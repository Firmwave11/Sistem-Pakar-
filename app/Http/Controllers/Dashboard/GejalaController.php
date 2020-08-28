<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gejala;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejala = Gejala::all();
        return view('dashboard.gejala', compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gejala-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gejala = new Gejala;
        $gejala->name = $request->nama;
        $gejala->save();
        return redirect('/dashboard/gejala')->with('status', 'Gejala baru berhasil ditambahkan dalam knowladge base.');
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
     *////
    public function edit(Gejala $gejala)
    {
        $gejalas = Gejala::all();
        return view('dashboard.gejala-edit', compact('gejala', 'gejalas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gejala $gejala)
    {
        $gejala->name = $request->nama;
        $gejala->save();
        return redirect('/dashboard/gejala')->with('status','Gejala diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return redirect('/dashboard/gejala')->with('status','Gejala berhasil dihapus.');
    }
}