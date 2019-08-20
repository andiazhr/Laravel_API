<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KunjunganPasPelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tgl = date('Ymd');
        $input = $request->segment(3);
        $input2 = $request->segment(4);
        $tanggal = date('Ymd', strtotime($input));
        $tanggal2 = date('Ymd', strtotime($input2));
        // $tanggal = $request->segment(3);
        // $tanggal2 = $request->segment(4);
        if(!($input == NULL) && $input2 == NULL){
            $kunjpaspelayanan = DB::Select("Exec SP_SIE_Kunjpaspelayanan '$tanggal', '$tanggal'");
            return response()->json($kunjpaspelayanan);
        }
        elseif(!($input2 == NULL ) && $input == NULL){
            $kunjpaspelayanan = DB::Select("Exec SP_SIE_Kunjpaspelayanan '$tanggal2', '$tanggal2'");
            return response()->json($kunjpaspelayanan);
        }
        elseif(!($input == NULL && $input2 == NULL)){
            $kunjpaspelayanan = DB::Select("Exec SP_SIE_Kunjpaspelayanan '$tanggal', '$tanggal2'");
            return response()->json($kunjpaspelayanan);
        }
        else{
            $kunjpaspelayanan = DB::Select("Exec SP_SIE_Kunjpaspelayanan '$tgl', '$tgl'");
            return response()->json($kunjpaspelayanan);
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
