<?php

namespace App\Http\Controllers\SPPController\ProposalPengajuan;

use App\Http\Controllers\Controller;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\proposal;
use PDF;
use App;

class proposalController extends Controller
{
        //
        public function index(): View
        {
            return view('dataPinjam.ProposalPengajuan.proposal');
 
        }


        // MBUH OPO IKI
        public function store(Request $request)
        {
           
            $users = proposal::get();

            $data = [
                    'title' => 'How To Create PDF File In Laravel 10 - Techsolutionstuff',
                    'date' => date('d/m/Y'),
                    'users' => $users
            ];
    
            if($request->has('download'))
            {
                $pdf = PDF::loadView('dataPinjam.ProposalPengajuan.cetakProposal',$data);
                return $pdf->download('users_list.pdf');
            }
    
            return view('dataPinjam.ProposalPengajuan.cetakProposal',compact('users'));
        }


}