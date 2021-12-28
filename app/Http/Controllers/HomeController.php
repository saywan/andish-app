<?php

namespace App\Http\Controllers;

use App\Models\AdminSettings;
use App\Models\Products;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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

        dd($slug . $id);
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
            Session::get('status','دستور غیر مجاز و منقضی شده است');

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
