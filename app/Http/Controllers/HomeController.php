<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\dt_parkir;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        $data = dt_parkir::get();
        $total_motor = 0;
        $total_mobil = 0;
        $total_pendapatan_motor = 0;
        $total_pendapatan_mobil = 0;
        foreach ($data as $item) {
            $total_motor += ($item->motor );
            $total_mobil += ($item->mobil );
            $total_pendapatan_motor += ($item->motor * $item->sh_motor );
            $total_pendapatan_mobil += ($item->mobil * $item->sh_mobil );
        }
        return view('dashboard', compact('data', 'total_motor', 'total_mobil', 'total_pendapatan_motor', 'total_pendapatan_mobil'));
    }
    public function hari(){

        $data = dt_parkir::get();

        $tp = 0;
        $tk = 0;
        $total_motor = 0;
        $total_mobil = 0;
        $total_pendapatan_motor = 0;
        $total_pendapatan_mobil = 0;
        foreach ($data as $item) {
            $tp += ($item->motor * $item->sh_motor) + ($item->mobil * $item->sh_mobil);
            $tk += ($item->motor + $item->mobil );
            $total_motor += ($item->motor );
            $total_mobil += ($item->mobil );
            $total_pendapatan_motor += ($item->motor * $item->sh_motor );
            $total_pendapatan_mobil += ($item->mobil * $item->sh_mobil );
        }

        // Kirim data dan total ke view
        return view('hari', compact('data', 'tp', 'tk', 'total_pendapatan_motor', 'total_pendapatan_mobil', 'total_motor', 'total_mobil'));
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
