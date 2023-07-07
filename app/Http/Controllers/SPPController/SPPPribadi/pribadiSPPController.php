<?php

namespace App\Http\Controllers\SPPController\SPPPribadi;

//Controller
use App\Http\Controllers\Controller;


//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;

class pribadiSPPController extends Controller
{
      //
      public function index(): View
      {
       return view('dataPinjam.SPPPribadi.pribadi');
  
      }
}
