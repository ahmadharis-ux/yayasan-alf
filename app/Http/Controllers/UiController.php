<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class UiController extends Controller
{
    function detailBerita($slug){
        $berita = Berita::whereSlug($slug)->first();
        Berita::whereSlug($slug)->update(array(
            'read' => $berita->read + 1
        ));

        return view('berita.detail')->with([
            'berita'    => $berita,
            'active' => 'berita',
            'title' => 'Berita',
        ]);
    }
}
