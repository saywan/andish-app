<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Ipecompany\Smsirlaravel\Smsirlaravel;
use Morilog\Jalali\Jalalian;

class AdminController extends Controller
{

    public function index()
    {

        return view('portal.index');
    }

    public function ActionServer(Request $request)
    {
        if ($request->has('action')) {
            // dd($request->has('action'));
            $functionName = $request->action;

            if (method_exists($this, $functionName)) {
                $this->Log = new Log;
                return $this::$functionName($request);
            } else
                return abort(404);
        } else
            return abort(404);

    }

    public function showlogin()
    {
        return view('portal.login.index');
    }

    public function register()
    {
        return view('portal.register.index');
    }

    public function checklogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'password' => ['required', 'min:8'],
        ], [
            'mobile.required' => 'شماره موبایل را وارد کنید',
            'password.required' => 'رمز عبور خود را وارد کنید',
            "password.min" => " گذرواژه شامل حداقل 8 کاراکتر است"

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $mobile = $request->mobile;
        $password = $request->password;
        // dd('sdfdsf');
        if (empty($mobile) or empty($password)) {
            return response()->json(['validate' => false, 'message' => 'فیلد ها خالی است ']);
        }
        $credentials = request(['mobile', 'password']);


        // attempt to log
        if (Auth::attempt(['status' => 'active', 'mobile' => $request->mobile, 'password' => $request->password], $request->remember)) {
            // if successful -> redirect forward


            // dd('sdsfsdf');
            return redirect()->route('portal.index');

        } elseif (Auth::attempt(['status' => 'pending', 'mobile' => $request->mobile, 'password' => $request->password], $request->remember)) {
            // return

            $status = Auth::user()->status;
            // dd($status);
            Auth::logout();
            Session::flush();
            return redirect(url('login'))->withInput()->with('errorMsg', 'حساب کاربری شما هنوز فعال نشده است');


            return redirect()->back()->withErrors([
                'status' => 'حساب کاربری شما هنوز فعال نشده است.',
            ]);

        }

        /*return redirect()->back()->withInput($request->only('email', 'password', 'remember'))->withErrors([
            'status' => 'Wrong password or this account not approved yet.',
        ]);*/


    }

    public function CreateAdminRegister(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'mobile' => 'required',
            'codemeli' => 'required',
            'password' => ['required', 'min:8'],
        ], [
            'fullname.required' => 'شماره موبایل را وارد کنید',
            'mobile.required' => 'شماره موبایل را وارد کنید',
            'codemeli.required' => 'کد ملی  را وارد کنید',
            'password.required' => 'رمز عبور خود را وارد کنید',
            "password.min" => " گذرواژه شامل حداقل 8 کاراکتر است"

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $token = Str::random(32);
        $digits = 6;
        $sms_code_verify = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
        $user_referecode = rand(pow(10, $digits - 1), pow(10, $digits) - 1);
        //

        $checkMobileUser = User::where('mobile', $request->mobile)->exists();
        if ($checkMobileUser) {

            return response()->json(['erorrs' => 'شماره موبایل تکراری هست']);
        }

        $checkEmailUser = User::where('email', $request->email)->exists();
        if ($checkEmailUser) {

            return response()->json(['erorrs' => 'آدرس ایمیل تکراری هست']);
        }

        $checkCodeMeliCheck = User::where('codemeli', $request->codemeli)->exists();
        if ($checkCodeMeliCheck) {

            return response()->json(['erorrs' => 'کد ملی تکراری هست']);
        }

        if ($checkMobileUser == false && $checkEmailUser == false && $checkCodeMeliCheck == false) {

            //

            $user = new User();
            $user->role_id = 5;
            $user->fullname = $request->fullname;
            $user->mobile = $request->mobile;
            $user->email = $request->email;
            $user->email_verification_token = $token;
            $user->confirmation_mobile_code = $sms_code_verify;
            $user->email_verified = 0;
            $user->mobile_encode = base64_encode($request->mobile);
            $user->password = Hash::make($request->password);
            $user->status = 'pending';
            $user->datereg = Jalalian::fromCarbon(Carbon::now())->format('H:i:s | %A  %d %B %Y ');

            if ($user->save()) {

                Smsirlaravel::ultraFastSend(['temp-password' => $sms_code_verify], 59085, $request->mobile);
                //Session::put('Confirm', true);

                return redirect('verifymobile/' . base64_encode($request->mobile));
                //  return  redirect()->route('/verifymobile/'.base64_encode($request->mobile));
                // return view('portal.register.verifymobile', ['mobile' => base64_encode($request->mobile)]);
            }

        }


    }

    public function verifymobile($mobile)
    {
        //dd($mobile);
        return view('portal.register.verify', ['mobile' => $mobile]);
    }

    public function logout()
    {
        Smsirlaravel::ultraFastSend([
            'username' => empty(auth()->user()->fullname) ? auth()->user()->email : auth()->user()->fullname,
            'datetime' => Jalalian::fromCarbon(Carbon::now())->format('H:i:s | %A  %d %B %Y ')
        ], 58918, "09183732103");

        //dd( auth()->user()->email);

        return redirect()->route('portal.Adminlogin');
        // auth()->logout();

        return redirect('/login');
    }

    public function checkCodeSMS(Request $request)
    {
        //dd($request->all());
        $info_user = User::where('mobile', $request->mobile)->where('confirmation_mobile_code', $request->CodeSMS)->first();


        if ($info_user) {
            $info_user->update([
                'status' => 'active'
            ]);

            // return redirect('Adminlogin');
            //   return redirect()->route('portal.Adminlogin');
            return response()->json(['status' => 'success', 'url' => '../Adminlogin']);

        } else {
            return response()->json(['status' => 'faild', 'message' => 'Cannot Active User']);
        }

    }
}
