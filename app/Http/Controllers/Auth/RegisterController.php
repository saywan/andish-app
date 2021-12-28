<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Morilog\Jalali\Jalalian;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [

            'string' => 'The :attribute must be text format',
            'file' => 'The :attribute must be a file',
            'mimes' => 'Supported file format for :attribute are :mimes',
            'min' => ' گذرواژه حداقل باید  :min کاراکتر  باشد',
            'max' => 'The :attribute must have a maximum length of :max',
            'confirmed' => 'تکرار گذرواژه مطابقت ندارد',
            'unique' => 'این ایمیل آدرس قبلا ثبت شده است',
            'email' => 'آدرس ایمیل الزامسیت',
        ];

        $inputType = filter_var($data['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';


        return Validator::make($data, [
            'fullname' => ['required', 'string', 'max:255'],
            $inputType => ['required', 'string', 'max:255', 'unique:users'],
            'passwordregister' => ['required', 'string', 'min:8'],
        ], $messages);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $inputType = filter_var($data['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
        //  dd($inputType);

        $token = Str::random(32);

        $user = User::create([
            'email' => $data['email'],
            'fullname' => $data['fullname'],
            'role_id' => '6',
            'password' => Hash::make($data['passwordregister']),
            'status' => 'pending',
            'datereg' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s | %A  %d %B %Y '),
            'email_verification_token' => $token,
            'email_verified' => 0,
            'mobile_encode' => base64_encode($data['email']),
        ]);

        $username = "تایید حساب کاربری";
        $code_activite = base64_encode($data['email']);
        $_email_user = $data['email'];
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

        Session::put('Confirm', true);

        return $user;

    }
}
