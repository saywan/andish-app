<?php

namespace App\Http\Controllers;

use App\Models\AdminSettings;
use App\Models\FactorOrderUser;
use App\Models\FactorUser;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function listFactor(){
        $Factor = FactorUser::where('userId',\Auth::user()->id)->get();
        return view('user.factor.list', compact('Factor'));
    }
    public function showFactor($id)
    {
        $Factor = FactorUser::find($id);
        if ($Factor) {
            // dd($Factor);
            $ProductOrder = FactorOrderUser::where('FactorId', $id)->get();
            return view('user.factor.show', ['Factor' => $Factor, 'ProductOrder' => $ProductOrder, 'id' => $id]);
        }
    }
    public function PrintPreview($id)
    {
        $Factor = FactorUser::find($id);
        if ($Factor) {
            $admin = AdminSettings::find(1);

            $ProductOrder = FactorOrderUser::where('FactorId', $id)->get();
            return view('user.factor.PrintPerview', ['Factor' => $Factor, 'ProductOrder' => $ProductOrder, 'id' => $id, 'admin' => $admin]);
        }
    }
}
