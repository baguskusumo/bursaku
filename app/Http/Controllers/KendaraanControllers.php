<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KendaraanControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bursaku = Kendaraan::latest()->paginate(5);
        return view ('bursaku.index',compact('bursaku'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bursaku.create');
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
        $request->validate([
            'id_kendaraan' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);
        Kendaraan::create($request->all());

        return redirect()->route('bursaku.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kendaraan $bursaku)
    {
        return view('bursaku.show',compact('bursaku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $bursaku)
    {
        return view('bursaku.edit', compact('bursaku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kendaraan $bursaku)
    {
        $request->validate([
            'id_kendaraan' => 'required',
            'tahun_keluaran' => 'required',
            'warna' => 'required',
            'harga' => 'required',
        ]);

        $bursaku->update($request->all());

        return redirect()->route('bursaku.index')->with('succes','Kendaraan Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $bursaku)
    {
        $bursaku->delete();

        return redirect()->route('bursaku.index')->with('succes','Kendaraan Berhasil di Hapus');
    }
}