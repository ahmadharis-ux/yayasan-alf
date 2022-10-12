<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hero.index',[
            'active' => 'banner',
            'title' => 'Banner',
            'hero' => Hero::all()
        ]);
    }
    public function heroAbout(){
        return view('about.index',[
            'banner' => Hero::whereStatus('about')->get()
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
            'status' => 'required',
            'gambar' => 'required|image',
        ]);
        $validasiData['gambar'] = $request->file('gambar')->store('post-gambar');

        Hero::create($validasiData);
        return redirect('/banner')->with('success','Berhasil di tambahkan');
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
        return view('dashboard.hero.edit',[
            'active' => 'banner',
            'title' => 'Banner',
            'banner' => Hero::where('id', $id)->first()
        ]);
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
            'status' => 'required',
            'gambar' => 'required|image',
        ]);
        $validasiData['gambar'] = $request->file('gambar')->store('post-gambar');

        Hero::where('id',$id)->update($validasiData);
        return redirect('/banner')->with('warning','Berhasil di tambahkan');
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
