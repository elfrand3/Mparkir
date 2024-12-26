<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\dt_parkir;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        $data = dt_parkir::get();
        $tmt = 0;
        $tmb = 0;
        $tpt = 0;
        $tpb = 0;
        foreach ($data as $item) {
            $tmt += ($item->motor );
            $tmb += ($item->mobil );
            $tpt += ($item->motor * $item->sh_motor );
            $tpb += ($item->mobil * $item->sh_mobil );
        }
        return view('dashboard', compact('data', 'tmt', 'tmb', 'tpt', 'tpb'));
    }
    public function hari(){

        $data = dt_parkir::get();

        $tp = 0;
        $tk = 0;
        $tmt = 0;
        $tmb = 0;
        $tpt = 0;
        $tpb = 0;
        foreach ($data as $item) {
            $tp += ($item->motor * $item->sh_motor) + ($item->mobil * $item->sh_mobil);
            $tk += ($item->motor + $item->mobil );
            $tmt += ($item->motor );
            $tmb += ($item->mobil );
            $tpt += ($item->motor * $item->sh_motor );
            $tpb += ($item->mobil * $item->sh_mobil );
        }

        // Kirim data dan total ke view
        return view('hari', compact('data', 'tp', 'tk', 'tpt', 'tpb', 'tmt', 'tmb'));
    }
    public function bulan(){

        $data = dt_parkir::get();

        return view('bulan', compact('data'));
    }
    public function user(){

        $data = User::get();

        return view('user', compact('data'));
    }
}
