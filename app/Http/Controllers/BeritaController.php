<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.index',[
            'active' => 'berita',
            'title' => 'Berita',
            'berita' => Berita::all()
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
            'penulis' => 'required',
            'judul' => 'required',
            'gambar' => 'required|image',
            'body' => 'required',
        ]);
        
        $validasiData['gambar'] = $request->file('gambar')->store('post-gambar');
        $validasiData['slug'] = Str::slug($request->judul);
        
        Berita::create($validasiData);
        return redirect('/news')->with('success','Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.berita.detail',[
            'active' => 'berita',
            'title' => 'Berita',
            'berita' => Berita::where('id', $id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.berita.edit',[
            'active' => 'berita',
            'title' => 'Berita',
            'berita' => Berita::where('id', $id)->first()
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
            'penulis' => 'required',
            'judul' => 'required',
            'gambar' => 'required|image',
            'body' => 'required',
        ]);

        if($request->file('gambar')){
            if($request->oldgambar){
                Storage::delete($request->oldgambar);
            }
            $validasiData['gambar'] = $request->file('gambar')->store('post-gambar');
        }
        
        Berita::where('id',$id)->update($validasiData);
        return redirect('/news')->with('warning','Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
    }
}
