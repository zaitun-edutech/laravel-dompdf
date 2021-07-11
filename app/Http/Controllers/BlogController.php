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

    return view('blog')->with([
        'siswa'=>$siswa
    ]);
}
public function show($id)
{
    $data = Siswa::findOrFail($id);
    return view('show')->with([
        'siswa'=>$data
    ]);
}

public function cetak_pdf(){
    $siswa = Siswa::all();

    $pdf = PDF::loadview('blog',['siswa'=>$siswa]);
    	return $pdf->download('data-siswa.pdf');
        // return $pdf->stream();
}


}
