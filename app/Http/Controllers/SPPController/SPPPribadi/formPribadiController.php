<?php

namespace App\Http\Controllers\SPPController\SPPPribadi;

use App\Http\Controllers\Controller;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;


class formPribadiController extends Controller
{
      //
      public function index(): View
      {
       return view('dataPinjam.SPPPribadi.formPribadi');
    
      }
}
