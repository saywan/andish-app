<?php


namespace App\Helper;
use App\Models\loggerApi;
use Illuminate\Http\Request;
use Route;
use Session;

class logger
{
    public static function addLog()
    {

        $route = explode("@", Route::getCurrentRoute()->getActionName());
        $controller = $route[0];     // get controller
        $action = $route[1];        // get action
        $params = \Request::all();   // get url parameter
        $username = \Session::get('UserName');//<-- can be ur Auth::user()
        $log = new loggerApi();
        $log->controller = $controller;
        $log->action = $action;
        $log->parameter = json_encode($params);
        $log->user = 1;
        $log->method = \Request::getMethod();
        $log->IP = \Request::ip();
        $log->save();
        return $log->id;

    }
}
