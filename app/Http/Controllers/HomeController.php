<?php

namespace App\Http\Controllers;

use App\Jstree;
use Illuminate\Http\Request;

use App\Evtlist;
use Illuminate\Support\Facades\App;
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
    public function index($lang)
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

        app()->setLocale($lang);


        return view('home', compact('settings','evtlists'));

    }

    public function newDashboard($lang)
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

        //check exist setting
        if ($settings->isEmpty()){
            //get all items
            $itemSettings = DB::table('ITEMS')->get();

            //insert default to database
            foreach ($itemSettings as $key=>$itemSetting){
                switch ($key) {
                    case 0:
                        DB::table('settings')->insert([
                            ['user_id' => Auth::id(), 'item_id' => $itemSetting->ID, 'row' => 1, 'col' => 1, 'sizex' => 3, 'sizey' => 2]
                        ]);
                        break;
                    case 1:
                        DB::table('settings')->insert([
                            ['user_id' => Auth::id(), 'item_id' => $itemSetting->ID, 'row' => 1, 'col' => 3, 'sizex' => 2, 'sizey' => 2]
                        ]);
                        break;
                    case 2:
                        DB::table('settings')->insert([
                            ['user_id' => Auth::id(), 'item_id' => $itemSetting->ID, 'row' => 3, 'col' => 3, 'sizex' => 2, 'sizey' => 2]
                        ]);
                        break;
                    case 3:
                        DB::table('settings')->insert([
                            ['user_id' => Auth::id(), 'item_id' => $itemSetting->ID, 'row' => 4, 'col' => 1, 'sizex' => 3, 'sizey' => 2]
                        ]);
                        break;
                    case 4:
                        DB::table('settings')->insert([
                            ['user_id' => Auth::id(), 'item_id' => $itemSetting->ID, 'row' => 5, 'col' => 3, 'sizex' => 2, 'sizey' => 2]
                        ]);
                        break;
                    case 5:
                        DB::table('settings')->insert([
                            ['user_id' => Auth::id(), 'item_id' => $itemSetting->ID, 'row' => 1, 'col' => 5, 'sizex' => 6, 'sizey' => 6]
                        ]);
                        break;
                    default:
                        DB::table('settings')->insert([
                            ['user_id' => Auth::id(), 'item_id' => $itemSetting->ID, 'row' => 4, 'col' => 1, 'sizex' => 3, 'sizey' => 2]
                        ]);
                }

            }
            $settings = DB::table('users')
                ->join('settings', 'users.id', '=', 'settings.user_id')
                ->join('items', 'settings.item_id', '=', 'items.id')
                ->where('user_id',Auth::id())
                ->select('settings.*', 'items.name')
                ->get();
        }
        app()->setLocale($lang);
        return view('new', compact('settings','evtlists'));

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

    public function showjstree()
    {
        $treeviews = DB::table('treeviews')
            ->select('treeviews.id as id', 'treeviews.NAME as name', 'treeviews.TEXT as text', 'treeviews.PARENT_ID as parent_id')
            ->get();

        $childs = array();

        foreach($treeviews as  $treeview)
            $childs[$treeview->parent_id][] = $treeview;
        $childs[$treeview->name][] = $treeview;
        unset($treeview);
        foreach($treeviews as $treeview)
            if (isset($childs[$treeview->id]))
                $treeview->children = $childs[$treeview->id];

        return $childs[0];


    }
    public function loadjstree() {
        $treeviews = DB::table('treeviews')->get();
        //$this->showjstree();
        $tree = $this->showjstree();

        //dd($tree);
        return response()->json($tree);
    }
    public function controljstree()
    {
        return view('jstree/treeview');
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