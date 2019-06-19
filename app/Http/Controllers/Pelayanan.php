<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\masyarakat;
use Excel;
class Pelayanan extends Controller
{
    public function index(){
        $data = Masyarakat::paginate(10);
        return view('pelayanan', compact('data'));
    }
    public function excel(){
        //$data = Masyarakat::get()->toArray();
        return Excel::download(new Masyarakat(), 'laporan.xlsx');
    }
}
