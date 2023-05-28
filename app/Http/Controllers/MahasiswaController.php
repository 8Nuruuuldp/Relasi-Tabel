<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('Mahasiswa.index',['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'kelas'     => 'required',
            'jurusan'   => 'required',
            'alamat'    => 'required',
        ]);

        Mahasiswa::create([
            'nama'      => $request->nama,
            'kelas'     => $request->kelas,
            'jurusan'   => $request->jurusan,
            'alamat'    => $request->alamat,
        ]);
        
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view ('Mahasiswa.edit',['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->kelas = $request->kelas;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
    }



    // one to one relationship
    public function wali(){
        $mahasiswa = Mahasiswa::all();
        return view('Mahasiswa.wali',['mahasiswa' => $mahasiswa]);
    }

    public function dosen() {
        $dosen = Dosen::all();
        return view('Mahasiswa.dosen', ['dosen' => $dosen]);
    }

    public function matkul() {
        $mahasiswa = Mahasiswa::get();
        return view('Mahasiswa.matkul', ['mahasiswa' => $mahasiswa]);
    }
}

    
