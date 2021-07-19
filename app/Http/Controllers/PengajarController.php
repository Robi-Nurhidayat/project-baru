<?php

namespace App\Http\Controllers;

use App\Models\pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pengajar = pengajar::all();
        return view('admin.pengajar',['pengajar' => $pengajar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, pengajar $pengajar)
    {
        // $extension = $request->file('images')->extension();
        $extension = $request->file('images')->extension();
        $filename = time(). '.' . $extension;
        Storage::putFileAs('public/movies', $request->file('images'),$filename);


        $pengajar->nama = $request->nama;
        $pengajar->email = $request->email;
        $pengajar->usia = $request->usia;
        $pengajar->alamat = $request->alamat;
        $pengajar->kelas = $request->kelas;
        $pengajar->images = $filename;
        $pengajar->save();

        return redirect()->route('pengajar');
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
    public function edit(pengajar $pengajar)
    {
        return view('admin.editPengajar',['pengajar' => $pengajar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengajar $pengajar)
    {

        if($request->hasFile('images')){
            $extension = $request->file('images')->extension();
            $filename = time(). '.' . $extension;
            Storage::putFileAs('public/movies', $request->file('images'),$filename);
            $pengajar->images = $filename;
        }



        $pengajar->nama = $request->nama;
        $pengajar->email = $request->email;
        $pengajar->usia = $request->usia;
        $pengajar->alamat = $request->alamat;
        $pengajar->kelas = $request->kelas;
        $pengajar->save();

        return redirect()->route('pengajar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengajar $pengajar)
    {

        $pengajar->delete();
        return redirect()->route('pengajar');
    }
}
