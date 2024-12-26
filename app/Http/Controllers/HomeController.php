<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\dt_parkir;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function hari(){

        $data = dt_parkir::get();

        return view('hari', compact('data'));
    }
    public function bulan(){
<<<<<<< HEAD
        $data = dt_parkir::get();
        return view('bulan',compact('data'));
=======

        $data = dt_parkir::get();

        return view('bulan', compact('data'));
>>>>>>> 7c48f91d882284dde029c64d03c9523af69f91ed
    }
    public function user(){

        $data = User::get();

        return view('user', compact('data'));
    }
}
