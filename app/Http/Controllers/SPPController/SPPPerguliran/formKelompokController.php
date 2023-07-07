<?php

namespace App\Http\Controllers\SPPController\SPPPerguliran;

use App\Http\Controllers\Controller;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;

class formKelompokController extends Controller
{
    //
    //
    public function index(): View
    {
     return view('dataPinjam.SPPPerguliran.formpengajuan');

    }
}
