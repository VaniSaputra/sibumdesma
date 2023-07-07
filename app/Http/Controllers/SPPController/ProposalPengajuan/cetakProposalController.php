<?php

namespace App\Http\Controllers\SPPController\ProposalPengajuan;

use App\Http\Controllers\Controller;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\cetakProposal;
use PDF;
use App;

class cetakProposalController extends Controller
{
    //public function index()
    //{
      //  $data = [
        //    'title' => 'Welcome to Tutsmake.com',
          //  'date' => date('m/d/Y')
        //];
           
        //$pdf = PDF::loadView('dataPinjam.ProposalPengajuan.cetakProposal', $data);
     
    //    return $pdf->download('Surat Pernyataan Kredit - Kelompok.pdf');
    //}

     //
     public function index(): View
     {
         return view('dataPinjam.ProposalPengajuan.cetakProposal');

     }

     public function tanggungRenteng(): View
     {
         return view('dataPinjam.ProposalPengajuan.tanggungRenteng');

     }
     
     public function persetujuanSuami(): View
     {
         return view('dataPinjam.ProposalPengajuan.persetujuanSuami');

     }
     
     public function pakaiSendiri(): View 
     {
         return view('dataPinjam.ProposalPengajuan.pakaiSendiri');

     }

     public function lembarVerifikasi(): View 
     {
         return view('dataPinjam.ProposalPengajuan.lembarVerifikasi');

     }

     public function BAVerifikasi(): View 
     {
         return view('dataPinjam.ProposalPengajuan.BAVerifikasi');

     }

}
