<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanTunaiCBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // header("Access-Control-Allow-Origin: *");
        // $serverName = "103.105.253.194"; //serverName\instanceName
        // $connectionInfo = array( "Database"=>"DBKESHospital", "UID"=>"SA", "PWD"=>"Tidar0293");
        // $conn = sqlsrv_connect( $serverName, $connectionInfo);

        // $tanggal = date('Ymd');

        // $sql = "EXEC SP_SIE_PendpTunaiCB '$tanggal', '$tanggal'";
        // $stmt = sqlsrv_query( $conn, $sql);
        // while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        //     $data[] = $row['JMLTUNAI'];
        // }

        // echo json_encode($data);
        $tgl = date('Ymd');
        $pendpTunaiCB = DB::Select("Exec SP_SIE_PendpTunaiCB '$tgl', '$tgl'");
        echo json_encode($pendpTunaiCB);
        // return view('index', ['pendpTunaiCB'=>$pendpTunaiCB]);
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
