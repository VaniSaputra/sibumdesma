<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SPPController;

/*
<<<<<<< Router atau menara petunjuk >>>>>>>
*/


Route::get('/', function (){
    return View('welcome');
});


//INI VIEW UNTUK LINK
Route::resource('/dashboard', \App\Http\Controllers\DashboardController::class);

//========================================= DATA PINJAMAN PERGULIRAN DAN PRIBADI ====================================================
//Data Pinjaman Perguliran

//Tabel Kelompok Perguliran
Route::resource('/kelompokSPP', \App\Http\Controllers\SPPController\SPPPerguliran\kelompokController::class);
//Tabel Anggota Perguliran
Route::resource('/anggotaSPP', \App\Http\Controllers\SPPController\SPPPerguliran\anggotaKelController::class);
//Form Pengajuan Pinjaman Kelompok
Route::resource('/formKelompok', \App\Http\Controllers\SPPController\SPPPerguliran\formKelompokController::class);
//Form Anggota Kelompok
Route::resource('/formAnggota', \App\Http\Controllers\SPPController\SPPPerguliran\formAnggotaController::class);


//Data Pinjaman Pribadi

//Tabel Pinjaman Pribadi
Route::resource('/pribadiSPP', \App\Http\Controllers\SPPController\SPPPribadi\pribadiSPPController::class);
//Tabel Pinjaman Pribadi
Route::resource('/kendaraanSPP', \App\Http\Controllers\SPPController\SPPPribadi\kendaraanSPPController::class);
//Tabel Pinjaman Pribadi
Route::resource('/formPribadi', \App\Http\Controllers\SPPController\SPPPribadi\formPribadiController::class);


//Proposal Pengajuan

//Tabel Pinjaman Pribadi
Route::resource('/proposalPengajuan', \App\Http\Controllers\SPPController\ProposalPengajuan\proposalController::class);

//Tabel Pinjaman Pribadi
Route::resource('/cetakProposal', \App\Http\Controllers\SPPController\ProposalPengajuan\cetakProposalController::class);

// cetak data proposal
use App\Http\Controllers\SPPController\ProposalPengajuan\cetakProposalController; 
Route::get('tanggungRenteng', [cetakProposalController::class, 'tanggungRenteng']);
Route::get('persetujuanSuami', [cetakProposalController::class, 'persetujuanSuami']); 
Route::get('pakaiSendiri', [cetakProposalController::class, 'pakaiSendiri']);
Route::get('lembarVerifikasi', [cetakProposalController::class, 'lembarVerifikasi']);
Route::get('BAVerifikasi', [cetakProposalController::class, 'BAVerifikasi']);