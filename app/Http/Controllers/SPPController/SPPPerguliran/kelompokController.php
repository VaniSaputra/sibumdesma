<?php

namespace App\Http\Controllers\SPPController\SPPPerguliran;

//Controller
use App\Http\Controllers\Controller;


//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;


class kelompokController extends Controller
{

    //
    public function index(): View
    {
     return view('dataPinjam.SPPPerguliran.kelompok');

    }
}
