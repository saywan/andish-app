<?php

namespace App\Http\Controllers;

use App\Models\AdminSettings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('portal.setting.index');
    }

    public function MangePage()
    {

        $AdminSetting = AdminSettings::find(1);
        return view('portal.setting.MangePage', ['setting' => $AdminSetting]);
    }

    public function updateAboutPage(Request $request)
    {

        $admin = AdminSettings::find(1);
        if ($admin) {
            $admin->update([
                'about_title' => $request->titlePageAbout,
                'about_keyword' => $request->keywordPage,
                'about_desc' => $request->desc,
            ]);
            return response()->json(['status' => 200]);
        }
    }

    public function updateContactPage(Request $request)
    {

        $admin = AdminSettings::find(1);
        if ($admin) {
            $admin->update([
                'contact_title' => $request->titlePageContact,
                'contact_keyword' => $request->keywordContactPage,
                'contact_address' => $request->addressCompany,
                'emails_site' => $request->emails_site,
                'telephone_one_shop' => $request->telephone_one_shop,
                'telephone_two_shop' => $request->telephone_two_shop,
                'telephone_third_shop' => $request->telephone_third_shop,
            ]);
            return response()->json(['status' => 200]);
        }
    }

}
