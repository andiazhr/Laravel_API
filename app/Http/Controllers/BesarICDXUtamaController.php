<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BesarICDXUtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grp = 95;
        $grp2 = 93;
        $grp3 = 91;
        $grp4 = [91, 93, 95];
        $tgl = date('Ymd');
        $input = $request->segment(3);
        $input2 = $request->segment(4);
        $input3 = $request->segment(5);
        $tanggal = date('Ymd', strtotime($input));
        $tanggal2 = date('Ymd', strtotime($input2));
        // $tanggal = date('Ymd', strtotime($request->segment(3)));
        // $tanggal2 = date('Ymd', strtotime($request->segment(4)));
        if(!($input == NULL) && $input2 == NULL){
            $ICDX = DB::Select("Exec SP_SIE_TOP10_ICD_X '$grp', '$tanggal', '$tanggal'");
            return response()->json($ICDX);
        }
        elseif(!($input2 == NULL ) && $input == NULL){
            $ICDX = DB::Select("Exec SP_SIE_TOP10_ICD_X '$grp', '$tanggal2', '$tanggal2'");
            return response()->json($ICDX);
        }
        elseif(!($input == NULL && $input2 == NULL)){
            if($input3=='Rawat Jalan')
            {
                $grp=91;
            }
            elseif($input3=='Rawat Inap')
            {
                $grp=93;
            }
            elseif($input3=='Rawat Gawat Darurat'){
                $grp=95;
            }
            elseif($input3=='Semua Jenis Rawat'){
                $grp='%%';
            }
            elseif($input3 == NULL)
            {
                $grp = 95;
                $input = $request->segment(3);
                $input2 = $request->segment(4);
                $tanggal = date('Ymd', strtotime($input));
                $tanggal2 = date('Ymd', strtotime($input2));
            
            }
            $ICDX = DB::Select("Exec SP_SIE_TOP10_ICD_X '$grp', '$tanggal', '$tanggal2'");
            return response()->json($ICDX);
        }
        
        // elseif(!($input == NULL && $input2 == NULL) && $input3 == 'Rawat Jalan'){
        //     $ICDX = DB::Select("Exec SP_SIE_TOP10_ICD_X '$grp3', '$tanggal', '$tanggal2'");
        //     return response()->json($ICDX);
        // }
        // elseif(!($input == NULL && $input2 == NULL) && $input3 == 'Rawat Inap'){
        //     $ICDX = DB::Select("Exec SP_SIE_TOP10_ICD_X '$grp2', '$tanggal', '$tanggal2'");
        //     return response()->json($ICDX);
        // }
        // elseif(!($input == NULL && $input2 == NULL) && $input3 == 'Semua Jenis Rawat'){
        //     $ICDX = DB::Select("Exec SP_SIE_TOP10_ICD_X '$grp4', '$tanggal', '$tanggal2'");
        //     return response()->json($ICDX);
        // }
        else{
            $ICDX = DB::Select("Exec SP_SIE_TOP10_ICD_X '$grp', '$tgl', '$tgl'");
            return response()->json($ICDX);
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
