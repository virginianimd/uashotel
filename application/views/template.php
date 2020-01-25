<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bintang Hotel</title>
	<!-- Bootstrap Styles-->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->

     <!-- Import -->
     <!-- Page level plugin CSS-->
<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/dist/summernote.css'?>">

<link href="<?php echo base_url();?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

     <!-- Import -->
   
        <!-- Custom Styles-->
    <link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <!-- <link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> -->


</head>
<body> 
<!-- IMPORT -->


<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin.min.js') ?>"></script>
<!-- Demo scripts for this page-->
<script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>

<script src="<?php echo base_url()?>/assets/dist/summernote.min.js"></script>

<script src="<?php echo base_url()?>/assets/date_picker_bootstrap/bootstrap.min.js" ></script>


<script  src="<?php echo base_url()?>/assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" ></script>

<script  src="<?php echo base_url()?>/assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js" ></script>



<!-- IMPORT -->

    <!-- jQuery Js -->
    <script src="<?php echo base_url() ?>assets/js/jQuery-2.1.4.min.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url() ?>/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>


<script type="text/javascript">
var date = new Date();
date.setDate(date.getDate());
 $('.form_date').datetimepicker({

        language:  'id',

        weekStart: 1,

        todayBtn:  1,



  autoclose: 1,

  todayHighlight: 1,

  startView: 2,

  minView: 2,

  startDate: date,

  forceParse: 0

    });

</script>


<script type="text/javascript">
$(document).ready(function() {
	$('#summernote').summernote({
		height: "300px",
		styleWithSpan: false
	});
});
function postForm() {

	$('textarea[name="content"]').html($('#summernote').code());
}
</script>

<script type="text/javascript">
  $(document).ready(function() {

    $("#uang_bayar").focus();

     $("#uang_bayar").keyup(function(e) {

      var total_bayar =  $("#total_bayar").val();
      var uang_bayar =  $("#uang_bayar").val();

      var kembalian = uang_bayar - total_bayar;

      $("#kembalian").val(kembalian);


                  
         });
  });
</script>







    <!-- proses Lunas -->
    <script type="text/javascript">
         var baseURL = "<?php echo base_url(); ?>";
    </script>

    <div id="wrapper"> 
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">Bintang's Hotel</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="<?php echo base_url().'customer'?>"><i class="fa fa-edit"></i>Customer</a>
                    </li> 
                    <li>
                        <a href="<?php echo base_url().'tipekamar'?>"><i class="fa fa-desktop"></i>Tipe Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'kamar'?>"><i class="fa fa-desktop"></i>Kamar</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'reservasi'?>"><i class="fa fa-desktop"></i>Reservasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'operator'?>"><i class="fa fa-qrcode"></i>Pengguna Aplikasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-fw fa-file"></i> Keluar</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                    <?php echo $contents; ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
   
</body>
</html>
