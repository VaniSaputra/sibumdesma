<?php $__env->startSection('title', 'Data Kelompok'); ?>

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
                    <div class="m-2 fw-bold"><h5><i class="nav-icon fas fa-copy px-2"></i> SPP Pribadi</h5> 
                  
                    </div>
                </div>
                <div class="col-4 col-md-4">
                  <div><button type="button" class="btn btn-primary float-right" onclick="window.location='/formPribadi'">Form Pengajuan</button></div>
                </div>
            </div>  <!-- row -->
            </div>  <!-- card -->
            <!-- BOTTON DROPDOWN / FILTER KETERANGAN -->
      </div><!-- /.container-fluid -->
    </div> <!-- /.content-mt-1 -->
    <!-- ================================================================================================================================= -->
    

    <!-- BAGIAN MENU HALAMAN  -->
    <!-- ================================================================================================================================= -->
    <div class="pt-2">
    <div class="container-fluid px-3">
            <!-- Bagian isi  -->
              <div class=" row justify-content-center" role="group" aria-label="Basic example">
                  <div class="col-6 text-center p-3 my-2 bg-white text-white btn btn-white" onclick="window.location='/pribadiSPP'">
                  <strong>DATA PINJAMAN PRIBADI</strong>
                  </div>
                  <div  class="col-6 text-center p-3 my-2 bg-white text-white btn btn-white active" >
                  <strong>DATA PINJAMAN KREDIT KENDARAAN</strong>
                  </div>
              </div>  <!-- div row  -->
              <!-- Bagian isi  -->
    </div><!-- /.container-fluid -->
    </div> <!-- /.content-mt-1 -->
    <!-- ================================================================================================================================= -->
    

    <!-- INI ADALAH BAGIAN BODYY YANG BERISI TABLE -->
    <!-- ================================================================================================================================= -->
    <div class="content mt-2">
      <div class="container-fluid">
      <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr>
                    <th>Code Pinjam</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Desa</th>
                    <th>Pinjaman</th>
                    <th>Jangka</th>
                    <th>Jasa</th>
                    <th>Total</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>110.008.10001.3.23</td>
                      <td>Denny Caknan </td>
                      <td>Dsn Penjalinan Rt03 Rw03</td>
                      <td>Plosorejo</td>
                      <td>20.000.000</td>
                      <td>12</td>
                      <td>250.000</td>
                      <td>20.250.000</td>
                      <td class="text-center">
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                              <a href="" class="btn btn-sm btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Data"><i class="bi bi-collection-fill"></i></a>
                              <a href="" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"><i class="bi bi-pencil-square"></i></a>
                            
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                              <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data"><i class="bi bi-trash2-fill"></i></button>
                          </form>           
                      </td>
                  </tr>

                  <tr>
                      <td>110.008.10002.3.23</td>
                      <td>Yeni Inka</td>
                      <td>Dsn Penjalinan Rt03 Rw03</td>
                      <td>Tawangharjo</td>
                      <td>25.000.000</td>
                      <td>18</td>
                      <td>280.000</td>
                      <td>25.280.000</td>
                      <td class="text-center">
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                              <a href="" class="btn btn-sm btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Data"><i class="bi bi-collection-fill"></i></a>
                              <a href="" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Data"><i class="bi bi-pencil-square"></i></a>
                            
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('DELETE'); ?>
                              <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data"><i class="bi bi-trash2-fill"></i></button>
                          </form>           
                      </td>
                  </tr>


                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Code Pinjam</th>
                    <th>Nama </th>
                    <th>Alamat</th>
                    <th>Desa</th>
                    <th>Pinjaman</th>
                    <th>Jangka</th>
                    <th>Jasa</th>
                    <th>Total</th>
                    <th>Opsi</th>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

      </div>
    </div>
<!-- INI ADALAH BAGIAN BODYY YANG BERISI TABLE -->

</div>
  <!-- /.content-wrapper -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistembumdes\resources\views/dataPinjam/SPPPribadi/kendaraan.blade.php ENDPATH**/ ?>