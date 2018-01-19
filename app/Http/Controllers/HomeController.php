<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evtlist;
use Illuminate\Support\Facades\DB;


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
        $settings = DB::table('users')
            ->join('settings', 'users.id', '=', 'settings.user_id')
            ->join('items', 'settings.item_id', '=', 'items.id')
            ->select('settings.*', 'items.name')
            ->get();

        return view('home', compact('settings', 'evtlists'));
    }

    public function save(Request $request)
    {
        $settings = $request->input('data');
        //get all setting
        foreach ($settings as $key => $setting) {
            DB::table('settings')
                ->where('id', $key + 1)
                ->update([
                    'row' => $setting['row'],
                    'col' => $setting['col'],
                    'sizex' => $setting['size_x'],
                    'sizey' => $setting['size_y']
                ]);
        }

        return response()->json("success");
    }

    public function Evtlist()
    {
        $evtlists = DB::table('evtlist')->get()->toJson();
        $evtlist = json_decode($evtlists);
        return response()->json($evtlist);
    }

    public function Remove(Request $request)
    {
        $evtlists = $request->input('data');
        $result = array_unique($evtlists);
        foreach ($result as $evtlist) {
            DB::table('evtlist')
                ->where('NODEID', $evtlist)
                ->delete();
        }

        return response()->json("Delete Complete");
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
