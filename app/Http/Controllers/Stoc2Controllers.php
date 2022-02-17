<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Motor;
use App\Models\Detail_Pembayaran;
use DB;

class Stoc2Controllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = DB::table('motors')
		->join('kendaraans', 'motors.id_motor', '=', 'kendaraans.id_kendaraan')
		->select('motors.nama_motor', 'motors.mesin', 'motors.tipe_suspensi', 'motors.tipe_transmisi', 'kendaraans.tahun_keluaran',
		'kendaraans.warna', 'kendaraans.harga', 'motors.stock')
		->get();
		
		return view('stock2/show')->with('data', $data);
		
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
       $request->validate([
            'nama' => 'required',
            'mesin' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
            'stock' => 'required',
        ]);
        Detail_Pembayaran::create($request->all());

        return redirect()->route('motor.index')->with('succes', 'Pembelian Telah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($stock)
    {
        return view('stock2',compact('stock'));
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
