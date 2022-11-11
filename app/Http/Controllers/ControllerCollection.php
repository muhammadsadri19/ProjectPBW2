<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ControllerCollection extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getAllCollections()
    {
        $collections = DB::table('collections')
            ->select(
                'id as ID',
                'namaKoleksi as Nama Koleksi',
                DB::raw('
        (CASE
        WHEN jenis="1" THEN "Buku"
        WHEN jenis="2" THEN "Majalah"
        WHEN jenis="3" THEN "Cakram Digital"
        END) as Jenis
        '),
                'jumlahKoleksi as Jumlah Koleksi'
            )
            ->orderBy('namaKoleksi', 'asc')
            ->get();
    }

    public function index()
    {
        //
        $koleksi = Collection::all();
        return view("koleksi.datakoleksi")->with("koleksi", $koleksi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("koleksi.formkoleksi");
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
