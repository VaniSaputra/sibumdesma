<?php $__env->startSection('title', 'Form Anggota'); ?>

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
                    <div class="m-2 fw-bold"><h5><i class="nav-icon fas fa-copy px-2"></i> Form Anggota</h5> 
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
        <div class="card">

        <!-- ===================================    MINI MENUBAR   ========================================== -->
            <div class="pt-2">
                <div class="container-fluid px-4">
                    <!-- Bagian isi  -->
                        <div class=" row justify-content-center" role="group" aria-label="Basic example">
                            <div class="col-6 text-center p-3 my-2 bg-white text-white btn btn-default" onclick="window.location='/formKelompok'">
                                    <strong>FORM KELOMPOK</strong> 
                            </div>
                            <div class="col-6 text-center p-3 my-2 bg-white text-white btn btn-white active" onclick="window.location='/formAnggota'" >
                                    <strong>FORM ANGGOTA KELOMPOK</strong>
                            </div>
                        </div>  <!-- div row  -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.content-mt-1 -->
        <!-- ===================================    MINI MENUBAR    ========================================== -->
        
        
        <!-- ===================================    FORM PENGAJUAN    ========================================== -->
            <!-- /.card-header -->
            <div class="card-body">
                <form class="row g-3" action="<?php echo e(url('store-input-fields')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php if($errors->any()): ?>
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <?php if(Session::has('success')): ?>
                            <div class="alert alert-success text-center">
                                <p><?php echo e(Session::get('success')); ?></p>
                            </div>
                            <?php endif; ?>

                             <!-- 1 Form Data No. Induk -->
                             <div class="col-12 bg-primary text-white">
                                    <h3 class="text-center mt-2 py-1"> <strong> FORM ANGGOTA KELOMPOK </strong>  </h3>
                            </div>
                            <div class="col-12">
                                    <hr class="hr hr-blurry" />
                             </div>

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



                            <table class="table" id="dynamicAddRemove">
                                <tr>
                                    <th class="col-md-2">No. KTP</th>
                                    <th class="col-md-2">Nama Anggota</th>
                                    <th class="col-md-2">Alamat</th>
                                    <th class="col-md-2">Pekerjaan</th>
                                    <th class="col-md-2">Pinjaman</th>
                                    <th class="col-md-2"></th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="addMoreInputFields[0][subject]" placeholder="Masukkan ID KTP" class="form-control" data-inputmask="'mask': ['9999999999999999']" data-mask />
                                    </td>
                                    <td>
                                        <input type="text" name="addMoreInputFields[0][subject]" placeholder="Masukkan Nama" class="form-control"/>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="addMoreInputFields[0][subject]" placeholder="Masukkan Alamat" rows="1"></textarea>
                                    </td>
                                    <td>
                                        <input type="text" name="addMoreInputFields[0][subject]" placeholder="Masukkan Pekerjaan" class="form-control" />
                                    </td>
                                    <td>
                                        <input class="form-control input-currency" name="addMoreInputFields[0][subject]" type="text" type-currency="IDR" placeholder="Rp" />
                                    </td>
                                    <td>
                                        <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah</button></td>
                                    </tr>
                            </table>
                          <div class="col-12">
                            <hr class="hr hr-blurry" /></label>
                          </div>
                          
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Simpan Data Anggota</button>
                        &nbsp;
                        <button type="submit" class="btn btn-default">Muat Ulang</button>
                    </div>

                </form>
            </div>   <!-- /.card-body -->
      </div> <!-- /.card --> 



      </div>
    </div>
<!-- INI ADALAH BAGIAN BODYY YANG BERISI TABLE -->

</div>
  <!-- /.content-wrapper -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $(document).ready(function(){
            $('.ktp').inputmask('9999999999999999');
            $('.ck').inputmask('9999999999999999');
        });

        $("#dynamicAddRemove").append('<tr><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Masukkan ID KTP" class="ktp form-control" /></td><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Masukkan Nama"class="form-control" /></td><td><textarea class="form-control" name="[' + i +
            '][subject]" placeholder="Masukkan Alamat" rows="1"></textarea></td><td><input type="text" name="addMoreInputFields[' + i +
            '][subject]" placeholder="Masukkan Pekerjaan" class="form-control" /></td> <td><input class="form-control input-currency" name="addMoreInputFields[' + i +
            '][subject]" type="text" type-currency="IDR" placeholder="Rp" /></td>    <td><button type="button" class="btn btn-outline-danger remove-input-field">Hapus</button></td></tr>'
            );

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
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
        
        
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


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistembumdes\resources\views/dataPinjam/formanggota.blade.php ENDPATH**/ ?>