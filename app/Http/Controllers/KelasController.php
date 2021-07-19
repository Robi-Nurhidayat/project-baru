<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use tidy;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kelas = Kelas::all();
        return view('admin.kelas',['kelas' => $kelas]);
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
    public function store(Request $request, Kelas $kelas)
    {

        $extension = $request->file('images')->extension();
        $filename = time(). '.' . $extension;
        Storage::putFileAs('public/movies', $request->file('images'),$filename);

        $kelas->namaKelas = $request->namaKelas;
        $kelas->namaPengajar = $request->namaPengajar;
        $kelas->hargaKelas = $request->hargaKelas;
        $kelas->kategori = $request->kategori;
        $kelas->images = $filename;
        $kelas->save();

        return redirect()->route('kelas');
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
    public function edit(Kelas $kelas)
    {
        return view('admin.editKelas',['kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {

        if($request->hasFile('images')){
            $extension = $request->file('images')->extension();
            $filename = time(). '.' . $extension;
            Storage::putFileAs('public/movies', $request->file('images'),$filename);
            $kelas->images = $filename;
        }

        $kelas->namaKelas = $request->namaKelas;
        $kelas->namaPengajar = $request->namaPengajar;
        $kelas->hargaKelas = $request->hargaKelas;
        $kelas->kategori = $request->kategori;
        $kelas->save();

        return redirect()->route('kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $id = $kelas->id;
        $kelas->delete();
        return redirect()->route('kelas');
    }
}
