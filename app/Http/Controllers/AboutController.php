<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.about.index',[
            'active' => 'about',
            'title' => 'About',
            'about' => About::orderByDesc('id')->limit(1)->get()
        ]);
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
        $validasiData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'gambar' => 'required|image|file|max:1024',
            'body' => 'required',
        ]);
        $validasiData['gambar'] = $request->file('gambar')->store('post-gambar');

        About::create($validasiData);
        return redirect('/about')->with('success','Berhasil di tambahkan');
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
        $validasiData = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'gambar' => 'required|image',
            'body' => 'required',
        ]);
        $validasiData['gambar'] = $request->file('gambar')->store('post-gambar');
        
        About::where('id',$id)->update($validasiData);
        return redirect('/about')->with('warning','Berhasil di ubah');
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
