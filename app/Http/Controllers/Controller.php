<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    function indexDash(){
        $title = 'Dashboard';
        $active = 'dashboard';

        $day = Carbon::now()->format('d');
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');
        DB::table('beritas')->where(DB::raw('DAY(created_at)'), $day);
        DB::table('beritas')->where(DB::raw('MONTH(created_at)'), $month);
        DB::table('beritas')->where(DB::raw('YEAR(created_at)'), $year);

        $berita = Berita::all()->count();
        $pengunjung = Berita::sum('read');
       
    // $data = array(0,0,0,0,0,0,0,0,0,0,0,0);
    // foreach($months as $index =>$month){
    //     $data[$month] = $berita[$index];
    // }
    return view('dashboard.index', compact('berita','day','month','year','title','active','pengunjung'));
    }
}
