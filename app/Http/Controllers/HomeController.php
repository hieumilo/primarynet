<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evtlist;
use Illuminate\Support\Facades\Auth;
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
        //get all Evtlist
        $evtlists = Evtlist::all();

        //get all setting

        $settings = DB::table('users')
            ->join('settings', 'users.id', '=', 'settings.user_id')
            ->join('items', 'settings.item_id', '=', 'items.id')
            ->where('user_id',Auth::id())
            ->select('settings.*', 'items.name')
            ->get();


        return view('home', compact('settings', 'evtlists'));


        //check exist setting
        if ($settings->isEmpty()){
            //get all items
            $itemSettings = DB::table('items')->get();

            //insert default to database
            foreach ($itemSettings as $itemSetting){
                DB::table('settings')->insert([
                    ['user_id'=>Auth::id(), 'item_id'=>$itemSetting->id, 'row' => 1,'col' => 1,'sizex' => 1, 'sizey' => 1]
                ]);
            }

            $settings = DB::table('users')
                ->join('settings', 'users.id', '=', 'settings.user_id')
                ->join('items', 'settings.item_id', '=', 'items.id')
                ->where('user_id',Auth::id())
                ->select('settings.*', 'items.name')
                ->get();
        }

        //get all element dashboard


        return view('home', compact('settings','evtlists','itemSetting'));
    }

    public function save(Request $request)
    {
        $settings = $request->input('data');
        //get all setting
        foreach ($settings as $key => $setting) {
            DB::table('settings')
                ->where('id', $setting['id'])
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
        $evtlists = DB::table('evtlists')->get()->toJson();
        $evtlist = json_decode($evtlists);
        return response()->json($evtlist);
    }

    public function Remove(Request $request)
    {
        $evtlists = $request->input('data');
        $result = array_unique($evtlists);
        foreach ($result as $evtlist) {
            DB::table('evtlists')
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
