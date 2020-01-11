<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | <?=$title?></title>

  <?php $this->load->view("v_autoload_css");?>
  <?php $this->load->view("v_autoload_js");?>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
<?php $this->load->view("v_navbar");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view("v_main_sidebar");?>
  

  <!-- Content Wrapper. Contains page content -->
   <?php $this->load->view($content);?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?php $this->load->view("v_control_sidebar");?>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php $this->load->view("v_footer");?>
</div>
<!-- ./wrapper -->


</body>
</html>
