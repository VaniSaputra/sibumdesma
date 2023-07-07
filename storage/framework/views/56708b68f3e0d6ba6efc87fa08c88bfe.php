<?php $__env->startSection('title', 'Pengajuan Pinjaman Pribadi'); ?>

<!-- Masukkan kode isi konten didalam section ini -->
<?php $__env->startSection('content'); ?>
 
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
                    <div class="m-2 fw-bold"><h5><i class="nav-icon fas fa-copy px-2"></i> Form Pengajuan SPP Pribadi</h5> 
                    </div>
                </div>
                <div class="col-4 col-md-4">
                  <div><button type="button" class="btn btn-primary float-right" onclick="window.location='/cetakFormKel'">Cetak Form</button></div>
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
        <div class="card">

        <!-- ===================================    MINI MENUBAR   ========================================== -->
            <div class="pt-2">
                <div class="container-fluid px-4">
                    <!-- Bagian isi  -->
                        <div class=" row justify-content-center" role="group" aria-label="Basic example">
                            <div class="col-6 text-center p-3 my-2 bg-white text-white btn btn-white active" onclick="window.location='/formKelompok'">
                                    <strong>FORM SPP PRIBADI</strong> 
                            </div>
                            <div class="col-6 text-center p-3 my-2 bg-white text-white btn btn-default" onclick="window.location='/formAnggota'" >
                                    <strong>FORM SPP KREDIT KENDARAAN</strong>
                            </div>
                        </div>  <!-- div row  -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.content-mt-1 -->
        <!-- ===================================    MINI MENUBAR    ========================================== -->
        
        <!-- ===================================    FORM PENGAJUAN    ========================================== -->
            <!-- /.card-header -->
            <div class="card-body">
                <form class="row g-3">

                    <!-- 1 Form Data No. Induk -->
                    <div class="col-12 bg-primary text-white">
                                <h3 class="text-center mt-2 py-1"> <strong> FORM PENGAJUAN KELOMPOK </strong>  </h3>
                            </div>
                            <div class="col-12">
                                    <hr class="hr hr-blurry" />
                    </div>

                     <!-- 1 Form Data No. Induk -->
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> 1.  Data No. Induk Kelompok Peminjam  </label>
                    </div>
                          <div class="col-2">
                                <div class="m-2 fw-bold offset-md-1">
                                 NIKP
                                </div>
                          </div>
                          <div class="col-md-3">
                                <input type="text" class="form-control" data-inputmask="'mask': ['9999999999999999']" data-mask>
                          </div>

                          <div class="col-md-2 offset-md-1 mt-1">
                              <div class="m-2 fw-bold">
                                  Pergulian
                              </div>
                          </div>
                          <div class="col-md-3 mt-1">
                                <select class="custom-select rounded-0">
                                    <option>No. Perguliran</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                </select>
                          </div>
                          <div class="col-md-2 mt-1 ">
                              <div class="m-2 fw-bold">
                                Kode Kelompok - Lama
                              </div>
                          </div>
                          <div class="col-md-3 mt-1">
                                <input type="text" class="form-control" data-inputmask="'mask': ['999.999.99999.9.99']" data-mask>
                          </div>
                          <div class="col-2 mt-1 offset-md-1  ">
                                <div class="m-2 fw-bold">
                                Kode Kelompok - Baru
                                </div>
                          </div>
                          <div class="col-md-3 mt-2">
                                <input type="text" class="form-control" data-inputmask="'mask': ['999.999.99999.9.99']" data-mask>
                          </div>
                          <div class="col-12">
                            <hr class="hr hr-blurry" />
                          </div>


                    <!-- 2 Form Data Pribadi -->
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> 2. Data Pribadi </label>
                    </div>
                          <div class="col-2">
                                <div class="m-2 fw-bold">
                                 Nama Kelompok
                                </div>
                          </div>
                          <div class="col-md-9">
                                <input type="text" class="form-control">
                          </div>

                          <div class="col-md-2 mt-1">
                              <div class="m-2 fw-bold">
                                  Desa
                              </div>
                          </div>
                          <div class="col-md-9 mt-1">
                                <select class="custom-select rounded-0" id="exampleSelectRounded0">
                                    <option>Pilih Desa</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                </select>
                          </div>
                          
                          <div class="col-md-2 mt-1">
                              <div class="m-2 fw-bold">
                                  Alamat
                              </div>
                          </div>
                          <div class="col-md-9 mt-1">
                                 <textarea class="form-control" rows="2"></textarea>
                          </div>

                          <div class="col-12">
                            <hr class="hr hr-blurry" /></label>
                          </div>

                     <!-- 3 Form Data Pemohon -->
                    <div class="col-12">
                        <label for="inputAddress" class="form-label"> 3. Data Pemohon (Ketua Kelompok)  </label>
                    </div>
                          <div class="col-2">
                                <div class="m-2 fw-bold">
                                 Nama Lengkap
                                </div>
                          </div>
                          <div class="col-md-3">
                                <input type="text" class="form-control">
                          </div>
                          <div class="col-md-2 offset-md-1 mt-1">
                              <div class="m-2 fw-bold">
                                  No. Ktp
                              </div>
                          </div>
                          <div class="col-md-3 mt-1">
                                <input type="text" class="form-control" data-inputmask="'mask': ['9999999999999999']" data-mask>
                          </div>
                          <div class="col-md-2 mt-1">
                              <div class="m-2 fw-bold">
                                Tanggal Lahir
                              </div>
                          </div>
                          <div class="col-md-3 mt-1">
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                          </div>
                          <div class="col-2 mt-1 offset-md-1  ">
                                <div class="m-2 fw-bold">
                                No. Telp
                                </div>
                          </div>
                          <div class="col-md-3 mt-2">
                          <input type="text" class="form-control" data-inputmask="'mask': ['9999-9999-99999']" data-mask>
                          </div>
                          <div class="col-md-2 mt-">
                              <div class="m-2 fw-bold">
                                  Pekerjaan
                              </div>
                          </div>
                          <div class="col-md-9 mt-2">
                                <input type="text" class="form-control">
                          </div>                    
                          <div class="col-md-2 mt-2">
                              <div class="m-2 fw-bold">
                                  Alamat
                              </div>
                          </div>
                          <div class="col-md-9 mt-2">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                          </div>
                          <div class="col-12">
                            <hr class="hr hr-blurry" />
                          </div>


                     <!-- 4. Form Pengurus -->                   
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">4. Data Pengurus </label>
                    </div>
                          <div class="col-2">
                                <div class="m-2 fw-bold">
                                 Nama Ketua
                                </div>
                          </div>
                          <div class="col-md-3">
                                <input type="text" class="form-control">
                          </div>

                          <div class="col-2">
                              <div class="m-2 fw-bold">
                                  Alamat Ketua
                              </div>
                          </div>
                          <div class="col-md-4">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                          </div>
                          <div class="col-2 mt-1">
                                <div class="m-2 fw-bold">
                                 Nama Sekertaris
                                </div>
                          </div>
                          <div class="col-md-3 mt-1">
                                <input type="text" class="form-control">
                          </div>
                          <div class="col-md-2">
                              <div class="m-2 fw-bold">
                                  Alamat Sekertaris
                              </div>
                          </div>
                          <div class="col-md-4 mt-1">
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                          </div>
                          <div class="col-2 mt-1">
                                <div class="m-2 fw-bold">
                                 Nama Bendahara
                                </div>
                          </div>
                          <div class="col-md-3 mt-1">
                                <input type="text" class="form-control">
                          </div>
                          <div class="col-md-2 mt-1">
                              <div class="m-2 fw-bold">
                                  Alamat Bendahara
                              </div>
                          </div>
                          <div class="col-md-4 mt-1">
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                          </div>
                          <div class="col-12">
                            <hr class="hr hr-blurry" /></label>
                          </div>

                     <!-- 2 Form Data Pribadi -->
                    <div class="col-12">
                            <label for="inputAddress" class="form-label">4. Permohonan Kredit </label>
                    </div>
                    <div class="col-12">
                            Dengan ini mengajukan permohonan kredit sebagai berikut : 
                    </div>
                          <div class="col-2">
                                <div class="m-2 fw-bold">
                                Baru / Perpanjangan
                                </div>
                          </div>
                          <div class="col-3 mt-2  form-group clearfix">
                                  <div class="icheck-success d-inline">
                                      <input type="radio" name="r1" checked id="radioSuccess1">
                                      <label for="radioSuccess1"> Baru
                                      </label>
                                   </div>

                                   <div class="icheck-success d-inline offset-md-2">
                                      <input type="radio" name="r1" id="radioSuccess2">
                                      <label for="radioSuccess2"> Perpanjangan
                                      </label>
                                   </div>
                          </div>

                          <div class="col-6"> </div>

                          <div class="col-2 mt-1 ">
                                <div class="m-2 fw-bold">
                                Jumlah Kredit diajukan
                                </div>
                          </div>
                          <div class="col-3 mt-1">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                          </div>

                          <div class="col-2 mt-1 offset-md-1 ">
                                <div class="m-2 fw-bold">
                                Jangka Waktu Kredit
                                </div>
                          </div>
                          <div class="col-3 mt-1">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Bulan</span>
                                    </div>
                                    
                                </div>
                          </div>

                          <div class="col-2 mt-1">
                                <div class="m-2 fw-bold">
                                 Digunakan Untuk
                                </div>
                          </div>
                          <div class="col-10 mt-3 form-group clearfix ">
                                  <div class="icheck-success d-inline">
                                      <input type="radio" name="r2" checked id="radioSuccess3">
                                      <label for="radioSuccess3"> Tambah Modal Usaha 
                                      </label>
                                   </div>
                                   <div class="icheck-success d-inline offset-md-1">
                                      <input type="radio" name="r2" id="radioSuccess4">
                                      <label for="radioSuccess4"> Keperluan Anak
                                      </label>
                                   </div>
                                   <div class="icheck-success d-inline offset-md-1">
                                      <input type="radio" name="r2" id="radioSuccess5">
                                      <label for="radioSuccess5"> Investasi / Tabungan
                                      </label>
                                   </div>
                                   <div class="icheck-success d-inline offset-md-1">
                                      <input type="radio" name="r2" id="radioSuccess6">
                                      <label for="radioSuccess6"> Lain - Lain
                                      </label>
                                   </div>     
                          </div>

                          <div class="col-12">
                            <hr class="hr hr-blurry" /></label>
                          </div>

                     <!-- 5 DOKUMEN YANG DILAMPIRKAN -->
                    <div class="col-12">
                          <label for="inputAddress" class="form-label">5. Dokumen yang dilampirkan </label>
                    </div>
                          <div class="col-2">
                                <div class="m-2 fw-bold">
                                 Kelengkapan dokumen
                                </div>
                          </div>
                         
                          <div class="col-3 mt-2  ">
                               <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary1" name="ch1" checked>
                                  <label for="checkboxPrimary1"> Surat Pengantar Desa
                                  </label>
                              </div>
                          </div>

                          <div class="col-3 mt-2 ">
                              <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary2" name="ch1">
                                  <label for="checkboxPrimary2"> Daftar Calon Peminjam
                                  </label>
                              </div>
                          </div>

                          <div class="col-2 mt-2 ">
                              <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary3" name="ch1">
                                  <label for="checkboxPrimary3"> Fotokopi KTP
                                  </label>
                              </div>
                          </div>

                          <div class="col-2 mt-2 ">
                              <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary4" name="ch1">
                                  <label for="checkboxPrimary4"> Fotokopi KK
                                  </label>
                              </div>
                          </div>

                          <div class="col-2">
                                <div class="m-2 fw-bold">
                                </div>
                          </div>
                         
                          <div class="col-3 mt-1  ">
                               <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary5" name="ch1">
                                  <label for="checkboxPrimary5"> Surat Tanggung Rentang
                                  </label>
                              </div>
                          </div>

                          <div class="col-3 mt-1 ">
                              <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary6" name="ch1">
                                  <label for="checkboxPrimary6"> Berita Acara Verifikasi
                                  </label>
                              </div>
                          </div>

                          <div class="col-2 mt-1 ">
                              <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary7" name="ch1">
                                  <label for="checkboxPrimary7"> Hasil Verifikasi
                                  </label>
                              </div>
                          </div>

                          <div class="col-2 mt-1 ">
                              <div class="icheck-primary d-inline">
                                  <input type="checkbox" id="checkboxPrimary8" name="ch1">
                                  <label for="checkboxPrimary8"> Lembar Verifikasi
                                  </label>
                              </div>
                          </div>
                          
                          <div class="col-12">
                            <hr class="hr hr-blurry" /></label>
                          </div>
                          
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        &nbsp;
                        <button type="submit" class="btn btn-default">Hapus</button>
                    </div>

                </form>
            </div>   <!-- /.card-body -->
      </div> <!-- /.card --> 
      </div>
    </div>
<!-- INI ADALAH BAGIAN BODYY YANG BERISI TABLE -->

</div>
  <!-- /.content-wrapper -->



  


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistembumdes\resources\views/dataPinjam/SPPPribadi/formPribadi.blade.php ENDPATH**/ ?>