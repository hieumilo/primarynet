<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function chart1()
    {
        return view('iframeChart/iframeChart1');
    }
    public function chart2()
    {
        return view('iframeChart/iframeChart2');
    }
    public function chart4()
    {
        return view('iframeChart/iframeChart4');
    }
    public function chart5()
    {
        return view('iframeChart/iframeChart5');
    }
    public function chart6()
    {
        return view('iframeChart/iframeChart6');
    }
    public function chart7()
    {
        return view('iframeChart/iframeChart7');
    }
    public function chart8()
    {
        return view('iframeChart/iframeChart8');
    }
}
