<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('siswa.create');

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
         $siswa=new siswa;
        $siswa->nama=$request->a;
        $siswa->kelas=$request->c;
        $siswa->jurusan=$request->d;
        if($request->hasfile('cover')){
            $siswas=$request->file('cover');
            $extension=$siswas->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $siswas->move($destinationPath ,$filename);
            $siswa->cover=$filename;
        }
        $siswa->save();
        return redirect()->route('siswa.index');
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
         $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
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
         $siswa= siswa::findOrFail($id);
         $siswa->nama=$request->a;
        $siswa->kelas=$request->c;
        $siswa->jurusan=$request->d;
         if($request->hasfile('cover')){
            $siswas=$request->file('cover');
            $extension=$siswas->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $siswas->move($destinationPath ,$filename);
            $siswa->cover=$filename;
        }
        $siswa->save();
        return redirect()->route('siswa.index');
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
        $siswa = siswa::findOrFail($id);
        $siswa ->delete();
        return redirect()->route('siswa.index');
    }
     
     public function search(Request $request)
    {
        $query = $request->get('nama');
        $siswa = barang::where('nama', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('siswa.hasil', compact('siswa','query'));
  }
}