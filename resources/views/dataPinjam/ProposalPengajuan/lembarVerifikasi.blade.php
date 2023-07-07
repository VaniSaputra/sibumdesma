<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">


   <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Tempusdominus Bootstrap 4 -->


  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/dropzone/min/dropzone.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('AdminLTE')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <style tyle="text/css">
    body {background-color: #f2f2f2 ;}

  </style>

</head>


<div class="container-xl p-4 bg-white">
    <img class="img-fluid" src="{{asset('AdminLTE')}}/dist/img/kopsurat.png" alt="kopsurat">
    <div class="row g-3">

        <!-- 1 Form Data No. Induk -->
        <div class="col-12 py-2 mb-4">
            <h2 class="text-center mt-1"> <strong> LEMBAR VERIFIKASI PEMINJAM </strong>  </h2>
        </div>

        <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
                KODE KELOMPOK
                </div>
        </div>
        <div class="col-md-3">
                    <input type="text" class="form-control" data-inputmask="'mask': ['999.999.99999.9.99']" data-mask>
        </div>
        <div class="col-md-2 offset-md-0 ml-4">
            <div class="m-2 fw-bold">
                JUMLAH ANGGOTA
            </div>
        </div>
        <div class="col-md-3 ml-4">
                <input type="text" class="form-control" id="inputEmail4" >
        </div>


       <div class="col-3 px-5 mt-1 ">
           <div class="m-2 fw-bold">
               NAMA KELOMPOK
           </div>
       </div>
       <div class="col-md-3 mt-1">
               <input type="text" class="form-control" id="inputPassword4" >
       </div>
       <div class="col-2 mt-1 offset-md-0 ml-4">
               <div class="m-2 fw-bold">
               PINJAMAN
               </div>
       </div>
       <div class="col-md-3 mt-1 ml-4">
               <input class="form-control input-currency" type="text" type-currency="IDR"  placeholder="Rp">
       </div>


       <div class="col-3 px-5 mt-1 ">
           <div class="m-2 fw-bold">
               ALAMAT KELOMPOK
           </div>
       </div>
       <div class="col-md-3 mt-1">
                <input type="text" class="form-control" id="inputPassword4"  >
       </div>
       <div class="col-2 mt-1 offset-md-0 ml-4">
               <div class="m-2 fw-bold">
                JANGKA WAKTU
               </div>
        </div>
        <div class="input-group col-md-3 mt-1 ml-4" >
                <input type="text" class="form-control">
                <div class="input-group-prepend">
                    <span class="input-group-text">Bulan</span>  
                </div>
        </div>



        <div class="col-3 px-5 mt-1 ">
            <div class="m-2 fw-bold">
                DESA
            </div>
        </div>
        <div class="col-md-3 mt-1">
                <input type="text" class="form-control" id="inputPassword4" >
        </div>
        <div class="col-2 mt-1 offset-md-0 ml-4">
                <div class="m-2 fw-bold">
                SUKU BUNGA
                </div>
        </div>
        <div class="input-group col-md-3 mt-1 ml-4" >
                <input type="text" class="form-control">
                <div class="input-group-prepend">
                     <span class="input-group-text">%</span>  
                </div>
        </div>


        <div class="col-3 px-5 mt-1 ">
            <div class="m-2 fw-bold">
                KETUA KELOMPOK
            </div>
        </div>
        <div class="col-md-3 mt-1">
                <input type="text" class="form-control" id="inputPassword4" >
        </div>
        <div class="col-2 mt-1 offset-md-0 ml-4">
                <div class="m-2 fw-bold">
                JASA
                </div>
        </div>
        <div class="col-md-3 mt-1 ml-4">
                <input class="form-control input-currency" type="text" type-currency="IDR"  placeholder="Rp">
        </div>


        <div class="col-3 px-5 mt-1 ">
            <div class="m-2 fw-bold">
                   ALAMAT KETUA
            </div>
        </div>
        <div class="col-md-3 mt-1">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
        </div>
        <div class="col-2 mt-1 offset-md-0 ml-4 ">
                <div class="m-2 fw-bold">
                     TOTAL
                </div>
        </div>
        <div class="col-md-3 mt-1 ml-4">
            <input class="form-control input-currency" type="text" type-currency="IDR"  placeholder="Rp">
        </div>

        <div class="col-12 mt-2">
            <hr class="hr hr-blurry" />
        </div>
      



         <div class="col-12 mb-2  px-5 m-2">
                 <label> INFORMASI DATA PEMINJAM </label>
         </div>    
        

         <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
               NAMA PEMINJAM
                </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border " id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
               NAMA SUAMI / ISTRI
               </div>
       </div>
       <div class="col-md-3 ml-4">
                <input type="text" class="form-control form-control-border" id="exampleInputBorder">
       </div>

       
       <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 py-0 ">
                <span>ALAMAT </span>
                </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
               ALAMAT
               </div>
       </div>
       <div class="col-md-3 ml-4" >
                <input type="text" class="form-control form-control-border" id="exampleInputBorder">
       </div>
       <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
                DESA
                </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
               DESA
               </div>
       </div>
       <div class="col-md-3 ml-4">
                <input type="text" class="form-control form-control-border" id="exampleInputBorder">
       </div>
       <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
                No. IDENTITAS / KTP 
                </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
               No. IDENTITAS / KTP 
               </div>
       </div>
       <div class="col-md-3 ml-4">
                <input type="text" class="form-control form-control-border" id="exampleInputBorder">
       </div>
       <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
                TEMPAT, TGL LAHIR
                </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
               TEMPAT, TGL LAHIR
               </div>
       </div>
       <div class="col-md-3 ml-4">
                <input type="text" class="form-control form-control-border" id="exampleInputBorder">
       </div>


       <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
                PEKERJAAN
                </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
               PEKERJAAN
               </div>
       </div>
       <div class="col-md-3 ml-4">
                <input type="text" class="form-control form-control-border" id="exampleInputBorder">
       </div>

       <div class="col-3 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
                NO WHATSAPP
                </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
          
               </div>
       </div>
       <div class="col-md-3 ml-4">
             
       </div>



        <div class="col-3 mt-2 px-5">
                <div class="m-2 fw-bold offset-md-1 ">
                PENDAPATAN/TAHUN
                </div>
        </div>
        <div class="col-md-3 mt-2">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 mt-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
               PENGELUARAN/TAHUN
               </div>
       </div>
       <div class="col-md-3 mt-2 ml-4">
                <input type="text" class="form-control form-control-border" id="exampleInputBorder">
       </div>


       <div class="col-3 px-5 mt-1">
                <div class="m-2 fw-bold offset-md-1 ">
                    ANAK SEKOLAH
                </div>
        </div>
       <div class="col-2 mt-3 ">
            <div class="icheck-primary d-inline">
               <input type="checkbox" id="checkboxPrimary1" name="ch1">
               <label for="checkboxPrimary1"> SD
               </label>
           </div>
       </div>

       <div class="col-2 mt-3 ">
          <div class="icheck-primary d-inline">
               <input type="checkbox" id="checkboxPrimary2" name="ch1">
               <label for="checkboxPrimary2"> SMP
               </label>
           </div>
      </div>

       <div class="col-2 mt-3 ">
           <div class="icheck-primary d-inline">
               <input type="checkbox" id="checkboxPrimary3" name="ch1">
               <label for="checkboxPrimary3"> SMA/SMK
               </label>
           </div>
       </div>

       <div class="col-2 mt-3 ">
          <div class="icheck-primary d-inline">
              <input type="checkbox" id="checkboxPrimary4" name="ch1">
               <label for="checkboxPrimary4"> KULIAH
               </label>
           </div>
       </div>

        <div class="col-3 px-5">
              <div class="m-2 fw-bold offset-md-1 ">
                JUMLAH TANGGUNGAN
              </div>
        </div>
        <div class="col-md-3">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-2 ml-4 offset-md-0">
               <div class="m-2 fw-bold">
          ORANG
               </div>
       </div>
       <div class="col-md-3 ml-4">
             
       </div>


        <div class="col-3 px-5 mt-2">
                  <div class="m-2 fw-bold offset-md-1 ">
                      STATUS RUMAH MILIK
                  </div>
          </div>
        <div class="col-2 mt-3 ">
              <div class="icheck-primary d-inline">
                  <input type="radio" name="r2" id="radioSuccess1"  >
                  <label for="radioSuccess1"> MILIK PRIBADI </label>
            </div>
        </div>

        <div class="col-2 mt-3 ">
            <div class="icheck-primary d-inline">
                  <input type="radio" name="r2" id="radioSuccess2"  >
                  <label for="radioSuccess2"> MILIK PRIBADI </label>
            </div>
        </div>

        <div class="col-4 mt-3 ">
            <div class="icheck-primary d-inline">
                  <input type="radio" name="r2" id="radioSuccess3"  >
                  <label for="radioSuccess3"> SEWA</label>
            </div>
        </div>



        <div class="col-3 px-5">
              <div class="m-2 fw-bold offset-md-1 ">
                LAMA DITEMPATI
              </div>
        </div>
        <div class="col-1">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-1">
                <div class="m-2 fw-bold ">
                TAHUN
              </div>
        </div>
        <div class="col-1">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder">
        </div>
        <div class="col-1">
                <div class="m-2 fw-bold ">
                BULAN
              </div> 
        </div>


       <div class="col-2">
              <div class="m-2 fw-bold">
                JUMLAH PENGAJUAN
              </div>
        </div>
        <div class="col-md-2">
                 <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder="Rp.">
        </div>

       <div class="col-3 px-5 mt-2">
                <div class="m-2 fw-bold offset-md-1 ">
                    DIGUNAKAN UNTUK
                </div>
        </div>
       <div class="col-2 mt-3 ">
            <div class="icheck-primary d-inline">
               <input type="checkbox" id="checkboxPrimary5" name="ch2">
               <label for="checkboxPrimary5"> TAMBAH MODAL USAHA
               </label>
           </div>
       </div>

       <div class="col-2 mt-3 ">
          <div class="icheck-primary d-inline">
               <input type="checkbox" id="checkboxPrimary6" name="ch2">
               <label for="checkboxPrimary6"> INVESTASI/ TABUNGAN
               </label>
           </div>
      </div>

       <div class="col-2 mt-3 ">
           <div class="icheck-primary d-inline">
               <input type="checkbox" id="checkboxPrimary7" name="ch2">
               <label for="checkboxPrimary7"> KEPERLUAN ANAK SEKOLAH
               </label>
           </div>
       </div>

       <div class="col-2 mt-3 ">
          <div class="icheck-primary d-inline">
              <input type="checkbox" id="checkboxPrimary8" name="ch2">
               <label for="checkboxPrimary8"> LAIN-LAIN
               </label>
           </div>
       </div>


       <div class="col-8 px-5">
              <div class="m-2 fw-bold offset-md-1 ">
                CATATAN
              </div>
        </div>
        <div class="col-4 px-5 text-center">
              <div class="m-2 fw-bold offset-md-1 ">
                TANDA TANGAN
              </div>
        </div>

        <div class="col-8 px-5">
             <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>

        <div class="col-12">
               <hr class="hr hr-solid" />
        </div>



        <div class="col-12 px-5 mb-2">
              <div class="m-2 fw-bold offset-md-1 ">
                TIM VERIFIKASI
              </div>
        </div>
        <div class="col-4 px-5 mt-2">
              <div class="m-2 fw-bold offset-md-1 ">
                1........................................................
              </div>
        </div>
        <div class="col-4 px-5 mt-2">
              <div class="m-2 fw-bold offset-md-1 ">
                2........................................................
              </div>
        </div>
        <div class="col-4 px-5 mt-2">
              <div class="m-2 fw-bold offset-md-1 ">
                3........................................................
              </div>
        </div>






    </div>
</div>






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




<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- jQuery YANG UMUM DIPAKAI = YANG UMUM DIPAKAI -->
<script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE')}}/dist/js/demo.js"></script>
<!-- Select2 -->
<script src="{{asset('AdminLTE')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="{{asset('AdminLTE')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="{{asset('AdminLTE')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- BS-Stepper -->
<script src="{{asset('AdminLTE')}}/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="{{asset('AdminLTE')}}/plugins/dropzone/min/dropzone.min.js"></script>
<!-- jQuery YANG UMUM DIPAKAI = YANG UMUM DIPAKAI -->




<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- ChartJS -->
<script src="{{asset('AdminLTE')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('AdminLTE')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Summernote -->
<script src="{{asset('AdminLTE')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('AdminLTE')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('AdminLTE')}}/dist/js/pages/dashboard.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> 






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


                         



