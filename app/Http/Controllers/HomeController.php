<?php

namespace App\Http\Controllers;

use App\Models\AdminSettings;
use App\Models\CartShop;
use App\Models\Products;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Morilog\Jalali\Jalalian;

class HomeController extends Controller
{

    public function index()
    {
        return view('Home.index');
    }

    public function contactUs()
    {

        $admin = AdminSettings::find(1);
        return view('Home.contact', ['setting' => $admin]);
    }

    public function aboutUs()
    {

        $admin = AdminSettings::find(1);
        return view('Home.about', ['setting' => $admin]);
    }

    public function showshop()
    {

        $product = Products::paginate(5);
        return view('Home.shop', ['product' => $product]);
    }

    public function showSingleProduct($slug, $id)
    {

        $product = Products::where('id', $id)->where('slug', 'like', '%' . urldecode($slug) . '%')->first();

        if ($product) {
            return view('Home.DetailsProduct', ['product' => $product]);
        } else {
            return redirect()->back();
        }
    }

    public function showCart(){
        $userCartItems = CartShop::userCartItems();
        return view('Home.Cart')->with(compact('userCartItems'));
    }
    public function NewCart(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
            //echo "<pre>";print_r($data);die;
            //Check Product
            $getProductStock = Products::where('id', $data['ProdId'])->first()->toArray();
            if ($getProductStock['count'] < $data['quantity']) {
                // $message = "تعداد کالا درخواستی موجود نیست ";
                ///   Session::flash('error_message', $message);
                //    return redirect()->back();
                $MsgTitle = 'درخواست سفارش ';
                $Msgbody = 'تعداد درخواستی کالا در انبار وجود ندارد';
                return response()->json(['status' => 401, 'MsgTitle' => $MsgTitle, 'Msg' => $Msgbody]);
            }
            // Generate Session Id if not exist
            $session_id = Session::get('session_id');
            if (empty($session_id)) {
                $session_id = Session::getId();
                Session::put('session_id', $session_id);

            }
            //Check Product if already User Cart


            if (Auth::check()) {
                //User is login
                $countProducts = CartShop::where(['product_id' => $data['ProdId'], 'qty' => $data['quantity'], 'user_id' => Auth::user()->id])->count();


            } else {
                //This is User not login
                $countProducts = CartShop::where(['product_id' => $data['ProdId'], 'qty' => $data['quantity'], 'session_id' => Session::get('session_id')])->count();
            }


            $sumTotalQtyCart = CartShop::where(['product_id' => $data['ProdId'], 'session_id' => Session::get('session_id')])->sum('qty');


            if ($sumTotalQtyCart >= $getProductStock['count']) {
              //  $message = "محصول متاسفانه تمام شده قابل سفارش نیست ";

              /*  Products::where('id', $data['ProdId'])->update([
                    'is_running_out' => 1
                ]);*/
                $MsgTitle = 'درخواست سفارش ';
                $Msgbody = 'تعداد درخواستی کالا در انبار وجود ندارد';
                return response()->json(['status' => 401, 'MsgTitle' => $MsgTitle, 'Msg' => $Msgbody]);
            //    Session::flash('error_message', $message);
           //     return redirect()->back();
            }

            if ($countProducts > 0) {
              //  $message = "محصول قبلا در سبد خرید شما اضافه شده";
             //   Session::flash('error_message', $message);
            //    return redirect()->back();
                return response()->json(['status' => 419]);
            } else if ($countProducts == 0) {

                $CurrentCart = CartShop::where(['product_id' => $data['ProdId'], 'session_id' => Session::get('session_id')])->first();
                if ($CurrentCart) {
                    $CurrentCart->update([
                        'qty' => $CurrentCart->qty + $data['quantity']
                    ]);
                //    $message = "تعداد محصول با موفقیت به روز رسانی شد";
                 //   Session::flash('error_message', $message);
                 //   return redirect()->back();
                    return response()->json(['status' => 202]);
                } else {

                    //Save Produce Cart
                    // echo "<pre>";print_r($data);die;
                    CartShop::insert([
                        'session_id' => $session_id,
                        'user_id' => Auth::check() ? Auth::user()->id : 0,
                        'product_id' => $data['ProdId'],
                        'qty' => $data['quantity'],
                        'price' => $data['price'],
                        'datereg' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s |  %A  %d %B %y ')
                    ]);
                    return response()->json(['status' => 200]);
                    //  $message = "محصول با موفقیت به سبد خرید اضافه شد";
                    //   Session::flash('success_message', $message);
                    //  return redirect()->back();
                }


            }


        }
    }

    public function showAuthForm()
    {
        return view('Home.auth.login');
    }

    public function ShowConfirm($email)
    {

        $user = User::where('mobile_encode', $email)->first();
        if ($user) {
            return view('Home.auth.Confirm');
        } else {
            Session::get('status', 'دستور غیر مجاز و منقضی شده است');

            return redirect()->back();

        }

    }

    public function VerifyAccount($token)
    {

        $user = User::where('email_verification_token', $token)->first();
        if ($user) {

            $user->update([
                'status' => 'active',
                'email_verified' => 1,
                'email_verified_at' => Carbon::now(),
                'email_verification_token' => ''
            ]);
            Session::put('success', 'حساب کاربری با موفقیت تایید شد ');

            return view('Home.auth.VerifyAccount');
        } else {
            Session::put('status', 'لینک فعالسازی منقضی شده است ');
            return redirect()->back();

        }

    }

    public function SendVerifyEmail(Request $request)
    {
        if ($request->has('userId')) {

            $userInfo = User::where('id', $request->userId)->first();
            if ($userInfo) {
                $token = Str::random(32);

                $userInfo->update([
                    'email_verification_token' => $token,
                ]);

                $username = "تایید حساب کاربری";
                $code_activite = base64_encode($userInfo->email);
                $_email_user = $userInfo->email;
                $_title_site = 'شرکت اندیش گستر';
                $_email_noreply = 'support@andishgostar.com';


                Mail::send('page.verifyEmail', array('confirmation_code' => $code_activite, 'token' => $token, 'title_site' => $_title_site),
                    function ($message) use (
                        $code_activite,
                        $_email_user,
                        $_title_site,
                        $username,
                        $_email_noreply
                    ) {
                        $message->from($_email_noreply, $_title_site);
                        $message->subject('تایید حساب کاربری');
                        $message->to($_email_user, $username);
                    });

                return response()->json(['status' => 200]);


            } else {
                return response()->json(['status' => 100]);
            }
        }
    }
}
