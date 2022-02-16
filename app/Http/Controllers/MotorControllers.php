<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MotorControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::latest()->paginate(5);
        return view ('motor.index',compact('motor'))->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('motor.create');
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
            'id_motor' => 'required',
            'mesin' => 'required',
            'tipe_suspensi' => 'required',
            'tipe_transmisi' => 'required',
        ]);
        Motor::create($request->all());

        return redirect()->route('motor.index')->with('succes','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Motor $motor)
    {
        return view('motor.show',compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Motor $motor)
    {
        return view('motor.edit', compact('motor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motor $motor)
    {
        $request->validate([
            'id_motor' => 'required',
            'mesin' => 'required',
            'tipe_suspensi' => 'required',
            'tipe_transmisi' => 'required',
        ]);

        $motor->update($request->all());

        return redirect()->route('motor.index')->with('succes','Motor Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motor $motor)
    {
        $motor->delete();

        return redirect()->route('motor.index')->with('succes','Motor Berhasil di Hapus');
    }
}