<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\dt_parkir;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        $data = dt_parkir::get();
        return view('dashboard', compact('data'));
    }
    public function hari(){

        $data = dt_parkir::get();
        
        $total = 0;
        foreach ($data as $item) {
            $total += ($item->motor * $item->sh_motor) + ($item->mobil * $item->sh_mobil);
        }
    
        // Kirim data dan total ke view
        return view('hari', compact('data', 'total'));
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
