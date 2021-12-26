<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Products;

class CartShop extends Model
{
    public $table = 'carts';
    public $fillable = ['user_id', 'session_id', 'product_id',  'qty','price'];
    public $timestamps = true;

    public static function userCartItems()
    {
      /*  if (Auth::check()) {
            $userCartItems = CartShop::with('product')->where('user_id', $userId)->orderBy('id','DESC')->get()->toArray();
        } else {
            $userCartItems = CartShop::with('product')->where('session_id', Session::get('session_id'))->orderBy('id','DESC')->get()->toArray();
          //  dd('asdasd');
        }*/
        $userCartItems = CartShop::with('product')->where('session_id', Session::get('session_id'))->orderBy('id','DESC')->get()->toArray();
       // dd($userCartItems);
        return $userCartItems;
    }
    public static function userCartItemsGroupBySession()
    {
        if (Auth::check()) {
            $userCartItems = CartShop::with('product')->where('user_id', Auth::user()->id)->orderBy('id','DESC')->get()->toArray();
        } else {
            $userCartItems = CartShop::with('product')->where('session_id', Session::get('session_id'))->orderBy('id','DESC')->get()->toArray();
          //  dd('asdasd');
        }

        return $userCartItems;
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Products', 'product_id');
    }
    public static function getProductAttrPrice($product_id){
        $attrPrice=Products::where('id',$product_id)->first()->toArray();
        return $attrPrice['price'];
    }
}
