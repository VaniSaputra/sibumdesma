<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $__env->yieldContent('title'); ?></title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


   <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Tempusdominus Bootstrap 4 -->


  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/dropzone/min/dropzone.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('AdminLTE')); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <style tyle="text/css">
    body {background-color: #f2f2f2 ;}

  </style>

</head>


<div class="container-xl p-4 bg-white">
    <img class="img-fluid" src="<?php echo e(asset('AdminLTE')); ?>/dist/img/kopsurat.png" alt="kopsurat">
    <div class="row g-3">

        <!-- 1 Form Data No. Induk -->
        <div class="col-12 py-2">
            <h2 class="text-center mt-1"> <strong> SURAT PERNYATAAN TANGGUNG RENTENG </strong>  </h2>
        </div>

        <div class="col-12 py-2 mt-2">
         Yang bertanda tangan dibawah ini kami anggota kelompok ........................................................................................  
         yang beralamat di Desa ........................................................... Kecamatan Tawangharjo Kabupaten Grobogan, 
         masing masing dalam kedudukan sebagai pribadi anggota kelompok, secara sadar dan penuh tanggungjawab, 
         menyatakan bahwa  : 
        </div>                  

        <div class="col-12 px-4">
            1. Memberikan Kuasa Kepada UPK untuk memindahbukukan tabungan para anggota dalam rekening kelompok yang dibekukan sebagai jaminan kredit sebesar kekurangan angsuran  pokok dan bunga pada saat jatuh tempo angsuran, 
        </div>
        <div class="col-12 px-4 mt-1">
            2. Memberikan Kuasa Kepada UPK untuk memindahbukukan seluruh saldotabungan para anggota dalam rekening kelompok sebagai mana disebut pada nomer satu diatas, guna menutup sisa kewajiban pokok dan bunga kredit UPK yang telah jatuh tempo pelunasannya,
        </div>

        <div class="col-12 px-4 mt-1">
            3. Apabila pemindahbukukan seluruh tabungan tidak mencukupi untuk melunasi sisa pokok adatu bunga kredit yang telah jatuh tempo pelunasannya, maka :
        </div>

        <div class="col-11 offset-md-1 mt-2">
             a. Ketua/ Pengurus kelompok akan menjual jaminan anggota yang tidak memenuhi kewajibannya tersebut dan akan memperhitungkan hasilnya untuk melunasi sisa pokok dan jasa kredit, dan kelebihan dari jumlah tersebut akan dikembalikan kepada masing masing  anggota yang bersangkutan, <br>
        </div>
        <div class="col-11 offset-md-1 mt-2">
            b. Apabila anggota penunggak tidak memiliki jaminan, atau hasil penjualan tidak mencukupi untuk melunasi sisa pokok dan jasa kredit, maka setiap anggota kelompok diwajibkan untuk membayar sama banyaknya sisa  kewajiban tersebut. Ketua Pengurus kelompok bertanggungjawab atas kelancaran penyetoran ini sesuai batas waktu yang disepakati dengan pihak UPK,
        </div>

        <div class="col-12 px-4 mt-2">
            4. Anngota kelompok bersedia mengadakan tabungan tanggung renteng minimal 1 (satu) kali angsuran dari total besarnya pinjaman.
        </div>
        

        <div class="col-12 py-1 mt-2">
            Demikian Surat Pernyataan tanggung renteng ini dibuat, untuk dipergunakan bila man diperlukan.
        </div>

        <!-- /.card-header -->
        <div class="card-body">
                <table id="example1" class="table table-bordered table-striped ">
                  <thead>
                  <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Peminjam</th>
                    <th>Jaminan</th>
                    <th>Nilai</th>
                    <th>Tanda Tangan Peminjam</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Sumiati Setyowati</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                  <td class="text-center">2</td>
                    <td>Ida Rohyani</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td>Sumiati Setyowati</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                  <td class="text-center">4</td>
                    <td>Ida Rohyani</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>   
                  <tr>
                    <td class="text-center">5</td>
                    <td>Sumiati Setyowati</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                  <td class="text-center">6</td>
                    <td>Ida Rohyani</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>   
                  <tr>
                    <td class="text-center">7</td>
                    <td>Sumiati Setyowati</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                  <td class="text-center">8</td>
                    <td>Ida Rohyani</td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>                 

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <div class="col-4 py-1 mt-4 offset-md-8 text-center">
                    ....................... , ............/............/............ <br>
                    AN. PENGURUS KELOMPOK  <br> <br> <br>
                </div>
                <div class="col-4 py-1 mt-2 offset-md-8">
                    <br>
                </div>

                <div class="col-4 py-6 mt-8 offset-md-8 text-center">
                    KETUA KELOMPOK <br>
                    YASINTA ANASYATYA
                </div>


    </div>
</div>


  


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- jQuery YANG UMUM DIPAKAI = YANG UMUM DIPAKAI -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/dropzone/min/dropzone.min.js"></script>
<!-- jQuery YANG UMUM DIPAKAI = YANG UMUM DIPAKAI -->




<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('AdminLTE')); ?>/dist/js/pages/dashboard.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('AdminLTE')); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> 






<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



</body>
</html>

<?php /**PATH C:\xampp\htdocs\sistembumdes\resources\views/dataPinjam/ProposalPengajuan/tanggungRenteng.blade.php ENDPATH**/ ?>