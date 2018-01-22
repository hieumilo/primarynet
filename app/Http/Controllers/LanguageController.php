<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App;
use Lang;

class LanguageController extends Controller
{
    public function index(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        return view('welcome');
    }
    public function login(Request $request){
        if($request->lang <> ''){
            app()->setLocale($request->lang);
        }
        return view('auth.login');
    }
}
