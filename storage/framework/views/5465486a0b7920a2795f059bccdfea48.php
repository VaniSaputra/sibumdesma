<?php $__env->startSection('title', 'Form Anggota'); ?>

<!-- Masukkan kode isi konten didalam section ini -->
<?php $__env->startSection('content'); ?>

<form class="form-horizontal" role="form" method="post">
<div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Masukkan Kode Kelompok</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control" data-inputmask="'mask': ['999.999.99999.9.99']" data-mask>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" type="submit" value="kodekelompok">Save changes</button>
            </div>
            </div>
        </div>
</div>
</form>
 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- BAGIAN TITLE  -->
    <!-- ================================================================================================================================= -->

    <div class="pt-1">
      <div class="fluid">
            <!-- BOTTON DROPDOWN / FILTER KETERANGAN -->
            <div class="card card-text p-2">
            <div class="row justify-content-between">
                <div class="col-4 col-md-4">
                    <div class="m-2 fw-bold"><h5><i class="nav-icon fas fa-copy px-2"></i> Proposal Pengajuan</h5> 
                    </div>
                </div>
               
            </div>  <!-- row -->
            </div>  <!-- card -->
            <!-- BOTTON DROPDOWN / FILTER KETERANGAN -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-mt-1 -->
    <!-- ================================================================================================================================= -->
    

    <!-- INI ADALAH BAGIAN BODYY YANG BERISI TABLE -->
    <!-- ================================================================================================================================= -->
    <div class="content mt-2">
        <div class="container-fluid">
        
        <!-- ===================================    FORM PENGAJUAN    ========================================== -->
        <div class="card">
            <div class="card-body row g-3">

                 <!-- 1 Form Data No. Induk -->
                <div class="col-12">
                    <label for="inputAddress" class="form-label"> 1.  Masukkan Kode Kelompok  </label>
                </div>
                <div class="col-2">
                        <div class="m-2 fw-bold offset-md-1 ">
                        Kode Kelompok (CK)
                        </div>
                </div>
                <div class="col-md-3">
                         <input type="text" class="form-control" data-inputmask="'mask': ['999.999.99999.9.99']" data-mask>
                </div>
                <div class="col-md-2 offset-md-1 mt-1">
                    <div class="m-2 fw-bold">
                        Jumlah Anggota
                    </div>
                </div>
                <div class="col-md-3 mt-1">
                        <input type="text" class="form-control" id="inputEmail4" disabled="disabled" >
                </div>
                <div class="col-md-2 mt-1 ">
                    <div class="m-2 fw-bold">
                        Nama Kelompok
                    </div>
                </div>
                <div class="col-md-3 mt-1">
                        <input type="text" class="form-control" id="inputPassword4" disabled="disabled" >
                </div>
                <div class="col-2 mt-1 offset-md-1  ">
                        <div class="m-2 fw-bold">
                        Pinjaman
                        </div>
                </div>
                <div class="col-md-3 mt-2">
                        <input class="form-control input-currency" type="text" type-currency="IDR" disabled="disabled"  placeholder="Rp">
                </div>
                <div class="col-md-2 mt-1 ">
                    <div class="m-2 fw-bold">
                        Alamat Kelompok
                    </div>
                </div>
                <div class="col-md-3 mt-1">
                         <input type="text" class="form-control" id="inputPassword4"  disabled="disabled" >
                </div>
                <div class="col-2 mt-1 offset-md-1  ">
                        <div class="m-2 fw-bold">
                         Jangka Waktu
                        </div>
                </div>
                <div class="input-group col-md-3 mt-2" >
                        <input type="text" class="form-control" disabled="disabled">
                        <div class="input-group-prepend">
                             <span class="input-group-text">Bulan</span>  
                        </div>
                </div>
                <div class="col-md-2 mt-1 ">
                     <div class="m-2 fw-bold">
                         Desa
                     </div>
                </div>
                <div class="col-md-3 mt-1">
                        <input type="text" class="form-control" id="inputPassword4" disabled="disabled" >
                </div>
                <div class="col-2 mt-1 offset-md-1  ">
                        <div class="m-2 fw-bold">
                        Suku Bunga
                        </div>
                </div>
                <div class="input-group col-md-3 mt-2" >
                        <input type="text" class="form-control" disabled="disabled">
                        <div class="input-group-prepend">
                             <span class="input-group-text">%</span>  
                        </div>
                </div>
                <div class="col-md-2 mt-1 ">
                    <div class="m-2 fw-bold">
                        Ketua Kelompok
                    </div>
                </div>
                <div class="col-md-3 mt-1">
                        <input type="text" class="form-control" id="inputPassword4" disabled="disabled" >
                </div>
                <div class="col-2 mt-1 offset-md-1  ">
                        <div class="m-2 fw-bold">
                        Jasa
                        </div>
                </div>
                <div class="col-md-3 mt-2">
                <input class="form-control input-currency" type="text" type-currency="IDR" disabled="disabled"  placeholder="Rp">
                </div>
                <div class="col-md-2 mt-1 ">
                    <div class="m-2 fw-bold">
                        Alamat Ketua
                    </div>
                </div>
                <div class="col-md-3 mt-1">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" disabled="disabled"></textarea>
                </div>
                <div class="col-2 mt-1 offset-md-1  ">
                        <div class="m-2 fw-bold">
                        Total
                        </div>
                </div>
                <div class="col-md-3 mt-2">
                    <input class="form-control input-currency" type="text" type-currency="IDR" disabled="disabled"  placeholder="Rp">
                </div>

                <div class="col-12">
                    <hr class="hr hr-blurry" />
                </div>
            </div>   <!-- /.card-body -->
      </div> <!-- /.card --> 




      <div class="card">
            <div class="card-body row g-3">
            
                <!-- 1 Form Data No. Induk -->
                <div class="col-12">
                      <h4 class="text-center mt-2 py-1"> <strong> CETAK PROPOSAL PENGAJUAN </strong>  </h4>
                </div>
                <div class="col-12">
                    <hr class="hr hr-blurry" />
                </div>


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                    <!-- small card -->
                    <a href="/cetakProposal" onclick="return confirm('Yakin Ingin Mendownload?')" >
                        <div class="small-box bg-gradient-success">
                            <div class="col-8 inner">
                                <h4 class="text-left">Surat Permohonan Kredit</h4>
                            </div>
                            <div class="icon">
                                <i class=" fas bi bi-printer-fill"></i>
                            </div>
                            <div class="small-box-footer">
                                Cetak Sekarang
                            </div>
                        </div>   <!-- small card -->
                    </a>
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <a href="/tanggungRenteng" onclick="return confirm('Yakin Ingin Mendownload?')" >
                  <div class="small-box bg-gradient-success">
                      <div class="col-7 inner">
                          <h4 class="text-left">Surat Tanggung Renteng</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                  </a>
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <a href="/persetujuanSuami" onclick="return confirm('Yakin Ingin Mendownload?')" >
                  <div class="small-box bg-gradient-success">
                      <div class="col-7 inner">
                          <h4 class="text-left">Surat Persetujuan Suami</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                  </a>
                </div>   <!-- col botton -->

                
                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <a href="/pakaiSendiri" onclick="return confirm('Yakin Ingin Mendownload?')" >
                  <div class="small-box bg-gradient-success">
                      <div class="col-6 inner">
                          <h4 class="text-left">Surat Dipakai Sendiri</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                  </a>
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <div class="small-box bg-gradient-info">
                      <div class="col-6 inner">
                          <h4 class="text-left">Data Penerima Manfaat</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <div class="small-box bg-gradient-info">
                      <div class="col-6 inner">
                          <h4 class="text-left">Data Anggota Kelompok</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <a href="/lembarVerifikasi" onclick="return confirm('Yakin Ingin Mendownload?')" >
                  <div class="small-box bg-gradient-info">
                      <div class="col-6 inner">
                          <h4 class="text-left">Lembar Data Verifikasi</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                </a>
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <a href="/BAVerifikasi" onclick="return confirm('Yakin Ingin Mendownload?')" >
                  <div class="small-box bg-gradient-info">
                      <div class="col-6 inner">
                          <h4 class="text-left">Berita Acara Verifikasi</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                </a>
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <div class="small-box bg-gradient-info">
                      <div class="col-6 inner">
                          <h4 class="text-left">Lembar Hasil Verifikasi</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                </div>   <!-- col botton -->


                <!-- CETAK DATA PENERIMA MANFAAT -->
                <div class="col-3 btn">
                  <!-- small card -->
                  <div class="small-box bg-gradient-info">
                      <div class="col-6 inner">
                          <h4 class="text-left">Lembar KTP Peminjam</h4>
                      </div>
                      <div class="icon">
                          <i class=" fas bi bi-printer-fill"></i>
                      </div>
                      <div class="small-box-footer">
                          Cetak Sekarang
                      </div>
                  </div>   <!-- small card -->
                </div>   <!-- col botton -->


            </div> <!-- /.card-body -->
      </div> <!-- /.card -->



      </div>
    </div>
<!-- INI ADALAH BAGIAN BODYY YANG BERISI TABLE -->

</div>
  <!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
});
</script>

<!-- CURRENCY KE RUPIAH DALAM INPUT FORM -->
<script>
    document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
        element.addEventListener('keyup', function(e) {
        let cursorPostion = this.selectionStart;
            let value = parseInt(this.value.replace(/[^,\d]/g, ''));
            let originalLenght = this.value.length;
            if (isNaN(value)) {
            this.value = "";
            } else {    
            this.value = value.toLocaleString('id-ID', {
                currency: 'IDR',
                style: 'currency',
                minimumFractionDigits: 0
            });
            cursorPostion = this.value.length - originalLenght + cursorPostion;
            this.setSelectionRange(cursorPostion, cursorPostion);
            }
        });
        });

</script>


                         


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistembumdes\resources\views/dataPinjam/ProposalPengajuan/proposal.blade.php ENDPATH**/ ?>