<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MobilControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::latest()->paginate(5);
        return view ('mobil.index',compact('mobil'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mobil.create');
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
            'id_mobil' => 'required',
            'nama_mobil' => 'required',
            'mesin' => 'required',
            'kapasitas_penumpang' => 'required',
            'tipe' => 'required',
            'stock' => 'required',
        ]);
        Mobil::create($request->all());

        return redirect()->route('mobil.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mobil $mobil)
    {
        return view('mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'id_mobil' => 'required',
            'nama_mobil' => 'required',
            'mesin' => 'required',
            'kapasitas_penumpang' => 'required',
            'tipe' => 'required',
            'stock' => 'required',
        ]);

        $mobil->update($request->all());

        return redirect()->route('mobil.index')->with('succes','Mobil Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobil)
    {
        $mobil->delete();

        return redirect()->route('mobil.index')->with('succes','Mobil Berhasil di Hapus');
    }
}