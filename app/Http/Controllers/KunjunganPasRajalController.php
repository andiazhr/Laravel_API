<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KunjunganPasRajalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grp = 91;
        $tgl = date('Ymd');
        $input = $request->segment(3);
        $input2 = $request->segment(4);
        $tanggal = date('Ymd', strtotime($input));
        $tanggal2 = date('Ymd', strtotime($input2));
        $jumlah = $request->segment(5);
        if(!($input == NULL) && $input2 == NULL){
            $kunjpasrajal = DB::Select("Exec SP_SIE_Kunjpasrajal '$grp', '$tanggal', '$tanggal'");
            return response()->json($kunjpasrajal);
        }
        elseif(!($input2 == NULL ) && $input == NULL){
            $kunjpasrajal = DB::Select("Exec SP_SIE_Kunjpasrajal '$grp', '$tanggal2', '$tanggal2'");
            return response()->json($kunjpasrajal);
        }
        // elseif(!($input == NULL && $input2 == NULL)){
        //     $kunjpasrajal = DB::Select("Exec SP_SIE_Kunjpasrajal '$grp', '$tanggal', '$tanggal2'");
        //     return response()->json($kunjpasrajal);
        // }
        // elseif(!($input == NULL && $input2 == NULL && $jumlah == NULL)){
        //     $kunjpasrajal = DB::Select("Exec SP_SIE_TestingKunj '$grp', '$tanggal', '$tanggal2', '$jumlah'");
        //     return response()->json($kunjpasrajal);
        // }
        elseif(!($input == NULL && $input2 == NULL)){
            if($jumlah == 0){
                $kunjpasrajal = DB::Select("Exec SP_SIE_Kunjpasrajal '$grp', '$tanggal', '$tanggal2'");
                return response()->json($kunjpasrajal);
            }
            elseif(!($jumlah == NULL)){
                $kunjpasrajal = DB::Select("Exec SP_SIE_TestingKunj '$grp', '$tanggal', '$tanggal2', '$jumlah'");
                return response()->json($kunjpasrajal);
            }
        }
        else{
            $kunjpasrajal = DB::Select("Exec SP_SIE_Kunjpasrajal '$grp', '$tgl', '$tgl'");
            return response()->json($kunjpasrajal);
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
