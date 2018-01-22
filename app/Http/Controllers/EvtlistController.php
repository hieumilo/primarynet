<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evtlist;
use Illuminate\Support\Facades\DB;

class EvtlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item  =  Evtlist::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evtlist = Evtlist::find($id);
        return view('home', compact(evtlist));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //print_r(Evtlist::find($id));die();
    //        $edit = new Evtlist;
    //        $edit = $request->all();
    //        $edit->save();
        $edit = DB::table('evtlists')
            ->where('id', $id)
            ->update([
                'CHKDATE'=>$request->input('CHKDATE'),
                'CLSNOTIFY'=>$request->input('CLSNOTIFY'),
                'CURWEIGHT'=>$request->input('CURWEIGHT'),
                'EVTCOMMENT'=>$request->input('EVTCOMMENT'),
                'EVTDESCR'=>$request->input('EVTDESCR'),
                'EVTEND'=>$request->input('EVTEND'),
                'EVTGROUP'=>$request->input('EVTGROUP'),
                'EVTID'=>$request->input('EVTID'),
                'EVTIGNORE'=>$request->input('EVTIGNORE'),
                'EVTITEM'=>$request->input('EVTITEM'),
                'EVTNOTIFY'=>$request->input('EVTNOTIFY'),
                'EVTOPEN'=>$request->input('EVTOPEN'),
                'EVTSTART'=>$request->input('EVTSTART'),
                'GID'=>$request->input('GID'),
                'NODEID'=>$request->input('NODEID'),
                'NODEIP'=>$request->input('NODEIP'),
                'NODENAME'=>$request->input('NODENAME'),
                'NODESTAT'=>$request->input('NODESTAT'),
                'WCHK'=>$request->input('WCHK')]);


        return response()->json($edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
}
