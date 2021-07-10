<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use PDF;

class BlogController extends Controller
{
public function index()
{
    $siswa = Siswa::get();

    return view('blog',['siswa'=>$siswa]);
}

public function cetak_pdf(){
    $siswa = Siswa::get();

    $pdf = PDF::loadview('blog',['siswa'=>$siswa]);
    	return $pdf->download('data-siswa.pdf');
        // return $pdf->stream();
}


}
