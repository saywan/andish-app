<?php

namespace App\Http\Controllers;

use App\Models\AdminSettings;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('Home.index');
    }

    public function contactUs()
    {

        $admin = AdminSettings::find(1);
        return view('Home.contact',['setting' => $admin]);
    }

    public function aboutUs()
    {

        $admin = AdminSettings::find(1);

        return view('Home.about', ['setting' => $admin]);
    }
}
