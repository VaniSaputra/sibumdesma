<?php

namespace App\Http\Controllers\SPPController\SPPPerguliran;

use App\Http\Controllers\Controller;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;


class formAnggotaController extends Controller
{
     //
     public function index(): View
     {
      return view('dataPinjam.SPPPerguliran.formanggota');
 
     }

     public function store(Request $request)
     {
         $request->validate([
             'addMoreInputFields.*.subject' => 'required'
         ]);
      
         foreach ($request->addMoreInputFields as $key => $value) {
             Student::create($value);
         }
      
         return back()->with('success', 'New subject has been added.');
     }
}
