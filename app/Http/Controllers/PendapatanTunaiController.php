<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanTunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tgl = date('Ymd');
        $input = $request->segment(3);
        $input2 = $request->segment(4);
        $tanggal = date('Ymd', strtotime($input));
        $tanggal2 = date('Ymd', strtotime($input2));
        if(!($input == NULL) && $input2 == NULL){
            $pendpTunai = DB::Select("Exec SP_SIE_PendpTunai '$tanggal', '$tanggal'");
            return response()->json($pendpTunai);
        }
        elseif(!($input2 == NULL ) && $input == NULL){
            $pendpTunai = DB::Select("Exec SP_SIE_PendpTunai '$tanggal2', '$tanggal2'");
            return response()->json($pendpTunai);
        }
        elseif(!($input == NULL && $input2 == NULL)){
            $pendpTunai = DB::Select("Exec SP_SIE_PendpTunai '$tanggal', '$tanggal2'");
            return response()->json($pendpTunai);
        }
        else{
            $pendpTunai = DB::Select("Exec SP_SIE_PendpTunai '$tgl', '$tgl'");
            return response()->json($pendpTunai);
        }
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
        //
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
        //
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
        //
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
}
