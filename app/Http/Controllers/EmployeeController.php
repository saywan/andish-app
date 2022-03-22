<?php

namespace App\Http\Controllers;

use App\Rules\Nationalcode;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class EmployeeController extends Controller
{
    public function EmployeeActionServer(Request $request)
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

    public function listEmployee()
    {
        $listUser = User::where('role_id', '=', 4)->Orwhere('role_id', '=', 5)->orderBy('id', 'DESC')->get();
        return view('portal.employee.list', ['listUser' => $listUser]);
    }

    public function NewEmployee(Request $request)
    {

        if ($request->action == 'NewEmployee') {

            // dd($request->all());

            $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'codemeli' => ['required', new Nationalcode()],
               // 'datebirth' => 'required',

                'password' => 'required',
                'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users',
                'email' => 'required|unique:users',
              //  'accountno' => 'required',
            //    'cardno' => 'required',
            //    'cardtitle' => 'required',
            //    'shebacard' => 'required|digits:24',
                'typeuser' => 'required',

            ], [
                'firstname.required' => 'نام و نام خانوادگی مشتری را وارد کنید',
                'codemeli.required' => 'کد ملی مشتری را وارد کنید',
             //   'datebirth.required' => 'تاریخ تولد مشتری را وارد کنید',

                'password.required' => 'رمز عبور را انتخاب کنید',
                'city.required' => 'شهرستان مشتری را انتخاب کنید',
                'mobile.required' => 'موبایل مشتری را وارد کنید',
                'mobile.numeric' => 'موبایل مشتری بصورت عدد وارد   کنید',
                'mobile.digits' => 'موبایل مشتری بصورت عدد وارد   کنید',
                'mobile.regex' => 'فرمت وارد شده صحیح نمی باشد',
                'mobile.unique' => 'شماره موبایل تکراری هست',
               // 'telephone.required' => 'شماره موبایل مشتری را وارد کنید',
                'email.required' => 'آدرس ایمیل مشتری را وارد کنید',
                'email.unique' => 'آدرس ایمیل تکراری   می باشد',
             //   'accountno.required' => 'شماره حساب مشتری را وارد کنید',
            //    'cardno.required' => 'شماره کارت  مشتری را وارد کنید',
            //    'cardtitle.required' => 'عنوان کارت  مشتری را وارد کنید',
           //     'shebacard.required' => ' شماره شبا  مشتری را وارد کنید',
            //    'shebacard.digits' => 'شماره شبا  باید 24 عدد باشد',
                'typeuser.required' => 'نوع حساب  مشتری را مشخص کنید',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            $checkMobileUser = User::where('mobile', $request->mobile)->exists();
            if ($checkMobileUser) {

                return response()->json(['status' => 100, 'textmessage' => 'شماره موبایل تکراری هست']);
            }

            $checkEmailUser = User::where('email', $request->email)->exists();
            if ($checkEmailUser) {

                return response()->json(['status' => 100, 'textmessage' => 'آدرس ایمیل تکراری هست']);
            }

            $checkCodeMeliCheck = User::where('codemeli', $request->codemeli)->exists();
            if ($checkCodeMeliCheck) {

                return response()->json(['status' => 422, 'errors' => 'کد ملی تکراری هست']);
            }

            $user = new User();
            $user->fullname = $request->firstname;
            $user->codemeli = $request->codemeli;
            $user->mobile = $request->mobile;
            $user->job = $request->job;
            $user->phone = $request->telephone;
            $user->brithday = $request->datebirth;
            $user->email = $request->email;
            $user->accountno = $request->cardtitle;
            $user->cardnumber = $request->cardno;
            $user->namecard = $request->cardtitle;
            $user->sheba = $request->shebacard;
            $user->address = $request->address;
            $user->status = 'active';
            $user->datereg = Jalalian::fromCarbon(Carbon::now())->format(' %A  %d %B %Y | H:i:s ');;
            $user->password = \Illuminate\Support\Facades\Hash::make($request->password);


            if ($request->typeuser == 'accountant') {
                $user->role_id = 4;

            } elseif ($request->typeuser == 'operator') {
                $user->role_id = 5;
            }
            if ($user->save()) {
                return response()->json(['status' => 200]);
            } else {
                return response()->json(['status' => 100]);
            }


        }
    }

    public function createEmployee()
    {

        return view('portal.employee.create');
    }

    public function ShowEditEmployee($id)
    {


        $userinfo = User::where('id',$id)->first();
        if (!is_null($userinfo)) {
            return view('portal.employee.edit', ['user' => $userinfo,'id'=>$id]);
        } else {
            \Session::flush('error','کاربر مورد نظر شما یافت نشد');
            return redirect('portal/Employee');
        }
    }

    public function EditEmployee(Request $request)
    {

        if ($request->action == 'EditCustomer') {

            // dd($request->all());


            $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'codemeli' => ['required'],
                'datebirth' => 'required',
                'job' => 'required',
                'mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
                'email' => 'required',
                'accountno' => 'required',
                'cardno' => 'required',
                'cardtitle' => 'required',
                'shebacard' => 'required|digits:24',
                'typeuser' => 'required',

            ], [
                'firstname.required' => 'نام و نام خانوادگی مشتری را وارد کنید',
                'codemeli.required' => 'کد ملی مشتری را وارد کنید',
                'datebirth.required' => 'تاریخ تولد مشتری را وارد کنید',
                'job.required' => 'شغل مشتری را وارد کنید',

                'city.required' => 'شهرستان مشتری را انتخاب کنید',
                'mobile.required' => 'موبایل مشتری را وارد کنید',
                'mobile.numeric' => 'موبایل مشتری بصورت عدد وارد   کنید',
                'mobile.digits' => 'موبایل مشتری بصورت عدد وارد   کنید',
                'mobile.regex' => 'فرمت وارد شده صحیح نمی باشد',
                'mobile.unique' => 'شماره موبایل تکراری هست',
                'telephone.required' => 'شماره موبایل مشتری را وارد کنید',
                'email.required' => 'آدرس ایمیل مشتری را وارد کنید',
                'email.unique' => 'آدرس ایمیل تکراری   می باشد',
                'accountno.required' => 'شماره حساب مشتری را وارد کنید',
                'cardno.required' => 'شماره کارت  مشتری را وارد کنید',
                'cardtitle.required' => 'عنوان کارت  مشتری را وارد کنید',
                'shebacard.required' => ' شماره شبا  مشتری را وارد کنید',
                'shebacard.digits' => 'شماره شبا  باید 24 عدد باشد',
                'typeuser.required' => 'نوع حساب  مشتری را مشخص کنید',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
            /* $checkMobileUser = User::where('mobile', $request->mobile)->exists();
             if ($checkMobileUser) {

                 return response()->json(['status' => 100, 'textmessage' => 'شماره موبایل تکراری هست']);
             }

             $checkEmailUser = User::where('email', $request->email)->exists();
             if ($checkEmailUser) {

                 return response()->json(['status' => 100, 'textmessage' => 'آدرس ایمیل تکراری هست']);
             }

             $checkCodeMeliCheck = User::where('codemeli', $request->codemeli)->exists();
             if ($checkCodeMeliCheck) {

                 return response()->json(['status' => 422, 'errors' => 'کد ملی تکراری هست']);
             }*/


            $user = User::where('id',$request->Id)->first();
            if($user)
            {
                $user->update([
                    'fullname'=>$request->firstname,
                    'codemeli'=>$request->codemeli,
                    'mobile'=>$request->mobile,
                    'job'=>$request->job,
                    'phone'=>$request->telephone,
                    'brithday'=>$request->datebirth,
                    'email'=>$request->email,
                    'accountno'=>$request->accountno,
                    'cardnumber'=>$request->cardno,
                    'namecard'=>$request->cardtitle,
                    'sheba'=>$request->shebacard,
                    'address'=>$request->address,
                    'role_id'=> $request->typeuser =='buyer' ? 3 : 2 ,

                ]);

                \Session::get('success','اطلاعات مشتری با موفقیت ویرایش شد');
                return response()->json(['status' => 200]);
            }else{
                return response()->json(['status' => 100]);
            }





        }
    }

    public function ChangeStatusEmployee(Request $request)
    {

        if ($request->action == 'ChangeStatusEmployee') {

            $userinfo = User::where('id', $request->card_id)->first();
            if ($userinfo) {

                $userinfo->update([
                    'status' => $request->status,
                ]);
            }
            return response()->json(['status' => 200]);
        }

    }
}
