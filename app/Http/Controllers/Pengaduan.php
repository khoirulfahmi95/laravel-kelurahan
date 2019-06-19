<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class Pengaduan extends Controller
{
    public function post(){
        return view('pengaduan');
    }
    public function excel(){
        //$data = Masyarakat::get()->toArray();
        return Excel::download(new Masyarakat(), 'laporan.xlsx');
    }
}