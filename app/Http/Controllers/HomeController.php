<?php

namespace App\Http\Controllers;

use App\Models\AdminSettings;
use App\Models\Products;
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
}
