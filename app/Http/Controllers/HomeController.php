<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Evtlist;
=======
use Illuminate\Support\Facades\DB;
>>>>>>> 793f801a5531cb4c23cee4584284d88e5c525aad

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
<<<<<<< HEAD
        $evtlists = Evtlist::all(); 
        return view('home', compact('evtlists'));
        
=======
        //get all setting
        $settings = DB::table('users')
            ->join('settings', 'users.id', '=', 'settings.user_id')
            ->join('items', 'settings.item_id', '=', 'items.id')
            ->select('settings.*', 'items.name')
            ->get();

        return view('home', compact('settings'));
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
>>>>>>> 793f801a5531cb4c23cee4584284d88e5c525aad
    }
}
