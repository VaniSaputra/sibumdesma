<?php $__env->startSection('title', 'dashboard'); ?>

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
                    <div class="m-2 fw-bold"><h5><i class="nav-icon fas fa-tachometer-alt"></i>&nbsp; Form Pengajuan</h5> 
                  
                    </div>
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
                  <div class="col-6 text-center p-3 my-2 bg-white text-white btn btn-white active" onclick="window.location='/dataSPP'">
                 <strong>FORM KELOMPOK</strong> 
                  </div>
                  <div class="col-6 text-center p-3 my-2 bg-white text-white btn btn-white ">
                  <strong>FORM ANGGOTA KELOMPOK</strong>
                  </div>
              </div>  <!-- div row  -->
              <!-- Bagian isi  -->
    </div><!-- /.container-fluid -->
    </div> <!-- /.content-mt-1 -->
    <!-- ================================================================================================================================= -->
    


    <!-- PENCARIAN DATA -->
    <!-- ================================================================================================================================= -->
    <!-- Main content -->
    <!-- <div class="content ">
    <div class="container-fluid px-3 "> -->
          <!-- BOTTON DROPDOWN / FILTER -->
           <!-- <div class="row ms-">
               <div class="text-left p-1 my-2">
                   <strong>Cari Data :</strong>
               </div>
               <div class="col-8 col-md-4">
                   <div class="p-1 input-group">
                       <input class="form-control border rounded-pill" type="search" value="" aria-label="Search" placeholder="Cari Kode / Nama / Kelompok"
                       id="example-search-input">
                   </div> --> <!-- DIV BTN INPUT --> 
            <!--  </div>   DIV BTN COLUMN -->
          <!-- </div> DIV ROW -->
          <!-- BOTTON DROPDOWN / FILTER -->
    <!--</div> /.container-fluid -->
    <!--</div>  /.content -->
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
                    <th>KTP</th>
                    <th>Nama Anggota</th>
                    <th>Desa </th>
                    <th>Kode Kelompok</th>
                    <th>Status</th>
                    <th>Pinjaman</th>
                    <th>Jasa</th>
                    <th>Jumlah</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>12.74.03.460288.0003</td>
                    <td>Sumiati</td>
                    <td>Plosorejo</td>
                    <td>110.007.80008.8.22</td>
                    <td>Ketua</td>
                    <td>10.000.000</td>
                    <td>140.000</td>
                    <td>10.140.000</td>
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
                    <td>12.74.03.460288.0003</td>
                    <td>Dwi Lestari</td>
                    <td>Plosorejo</td>
                    <td>110.007.80008.8.22</td>
                    <td>Sekretaris</td>
                    <td>15.000.000</td>
                    <td>240.000</td>
                    <td>10.140.000</td>
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
                    <th>KTP</th>
                    <th>Nama Anggota</th>
                    <th>Desa </th>
                    <th>Kode Kelompok</th>
                    <th>Status</th>
                    <th>Pinjaman</th>
                    <th>Jasa</th>
                    <th>Jumlah</th>
                    <th>Opsi</th>
                  </tr>
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


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistembumdes\resources\views/dataSPP/formpengajuan.blade.php ENDPATH**/ ?>