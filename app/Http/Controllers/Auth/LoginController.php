<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\attendance;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Ipecompany\Smsirlaravel\Smsirlaravel;
use Morilog\Jalali\Jalalian;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $inputType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';

        if ($inputType == 'email') {
            //Error messages
            $messages = [
                "email.required" => "ایمیل یا شماره موبایل معتبر وارد کنید",
                "email.email" => "ایمیل نا معتبر است",
                "email.exists" => " این ایمیل قبلا ثبت نشده است",
                "userpasswordlogin.required" => " گذرواژه را وارد کنید",
                "userpasswordlogin.min" => " گذرواژه شامل حداقل 8 کاراکتر است"
            ];

            // validate the form data
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'userpasswordlogin' => 'required|min:8'
            ], $messages);


        } elseif ($inputType == 'mobile') {
            //Error messages
            $messages = [
                "email.required" => "شماره موبایل یا آدرس ایمیل معتبر را وارد کنید",
                "email.email" => "شماره موبایل  نا معتبر است",
                "email.exists" => "چنین شماره موبایلی یافت نشد",
                "userpasswordlogin.required" => " گذرواژه را وارد کنید",
                "userpasswordlogin.min" => " گذرواژه شامل حداقل 8 کاراکتر است"
            ];

            // validate the form data
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'userpasswordlogin' => 'required|min:8'
            ], $messages);
        }


        // dd($request->all());

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            // attempt to log
            //   dd(Auth::attempt(['status' => 'active', $inputType => $request->email, 'password' => $request->userpasswordlogin], $request->remember));

            if (Auth::attempt(['status' => 'active', $inputType => $request->email, 'password' => $request->userpasswordlogin], $request->remember)) {

                // if successful -> redirect forward


                /*  if (auth()->user()->role_id == 2) {

                      if (auth()->user()->two_auth == 1) {

                          return redirect('User/TwoAuth');

                      } else if (auth()->user()->auth_status == 'NotAuth'
                          || auth()->user()->auth_status == 'Reject' ||
                          auth()->user()->auth_status == 'Checking') {

                          //return route('User.Auth');
                          return redirect(url('User/Auth'));

                      } else {
                          return redirect(url('User/index'));
                         // return route('User.index');
                      }

                  }*/
                if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2 || auth()->user()->role_id == 3 || auth()->user()->role_id == 4 || auth()->user()->role_id == 5) {


                    $username = "گزارش ورود به داشبورد";
                    //  $code_activite = base64_encode("s.ganji73@gmail.com");
                    $code_activite = base64_encode("kawe.hejazi@gmail.com	");
                    //   $_email_user = "kawe.hejazi@gmail.com";
                    $_email_user = "s.ganji73@gmail.com";
                    $_title_site = 'Tether Bank';
                    // $_title_site = 'تایید حساب کاربری';
                    $_email_noreply = 'support@tether-bank.com';


                    /* Smsirlaravel::ultraFastSend([
                         'username' => auth()->user()->email,
                         'datetime' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s | %A  %d %B %Y ')
                     ], 58917, "09035478091");*/

                    //09358505007
                    //09358505007
                    $attendce = new attendance();
                    $attendce->userId = auth()->user()->id;
                    $attendce->IP = $request->ip();
                    $attendce->type = 'admin';
                    $attendce->browser = \App\Helper\Helper::getBrowser();
                    $attendce->login_date = Jalalian::fromCarbon(Carbon::now())->format('H:i:s | %A  %d %B %Y ');
                    $attendce->save();


                    /* Mail::send('page.login_attendece', array(
                         'user' => auth()->user()->email,
                         'datetime' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s | %A  %d %B %Y '),
                         'platform' => Helper::getBrowser()['platform'],
                         'userAgent' => Helper::getBrowser()['userAgent'],
                         'ip' => $request->ip()
                     ),
                         function ($message) use (
                             $code_activite,
                             $_email_user,
                             $_title_site,
                             $username,
                             $_email_noreply
                         )
                         {
                             $message->from($_email_noreply, $_title_site);
                             $message->subject('گزارش ورود به داشبورد');
                             $message->to($_email_user, $username);
                         });*/

                    return redirect()->intended(route('portal.index'));

                    // return redirect()->intended(route('User.index'));
                }

            } elseif (Auth::attempt(['status' => 'pending', $inputType => $request->email, 'password' => $request->userpasswordlogin], $request->remember)) {
                // return
                $status = Auth::user()->status;
                //dd(Auth::user()->email);
                //  Session::flush('UserEmail', base64_encode(Auth::user()->email));
                //   Session::put('UserEmail',base64_encode(Auth::user()->email));
                Session::put('Confirm', Auth::user()->id);

                Auth::logout();


                // return redirect(url('login'))->withInput()->with('errorMsg', 'حساب کاربری شما هنوز فعال نشده است');
                return back()->with('warning','حساب کاربری شما هنوز فعال نشده است');
                //  return redirect(url('login'));


                /*return redirect()->back()->withErrors([
                    'status' => 'حساب کاربری شما هنوز فعال نشده است.',
                ]);*/

            }

            /*if (Auth::check(['status' => 'pending'], $request->remember)) {
                return redirect()->back()->withErrors([
                    'status' => 'sdfsdfsdfsdf',
                ]);
            }*/


            if (!Hash::check('password', $request->userpasswordlogin)) {

                return redirect()->back()->withInput($request->only('password'))->withErrors([
                    'password' => 'گذرواژه اشتباه است',
                ]);
            }
            /* if(password_verify('password',$request->password)){
                 dd('fdf');
                 return redirect()->back()->withInput($request->only('password'))->withErrors([
                     'password' => 'رمز عبور اشتباه است.',
                 ]);
             }*/

            // if unsuccessful -> redirect back
            return redirect()->back()->withInput($request->only('email', 'password', 'remember'))->withErrors([
                'status' => 'Wrong password or this account not approved yet.',
            ]);
        }
    }
}
