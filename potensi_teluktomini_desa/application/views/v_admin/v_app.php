<?php 
  $this->load->view('layouts/head');
?>

<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini" onload="setInterval('displayServerTime()', 1000);">
<!-- Site wrapper -->
<div class="wrapper">
<?php 
  foreach ($user as $key) {
    $nama = $key->nama;
    $username = $key->username;
    $level = $key->level_admin;
    }

  if ($level == "1") {
     $this->load->view('layouts/header');
   } else{
     $this->load->view('layouts/header_panitia');
   }
?>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/pp.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          
          <p><?php echo $nama; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php
      if ($level == "1") {
         $this->load->view('layouts/sidebar_menu');
       } else{
          $this->load->view('layouts/sidebar_panitia');
       }
       ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <?php 
  // Admin
  if ($page == 'dashboard_admin') { 
    include 'dashboard/index.php';
  }elseif ($page == 'admin_edit'){ 
    include 'dashboard/admin_edit.php'; 
  }elseif ($page == 'data_pertanian'){ 
    include 'data_pertanian/index.php'; 
  }elseif ($page == 'data_pimpinan'){ 
    include 'data_pimpinan/index.php';   
  }elseif ($page == 'data_identitas_desa'){ 
    include 'data_identitas_desa/index.php';   
  }elseif ($page == 'data_ternak'){ 
    include 'data_ternak/index.php'; 
  }

  // Panitia
  elseif ($page == 'dashboard_panitia'){ 
    include 'dashboard_panitia/index.php'; 
  }elseif ($page == 'panitia_edit'){ 
    include 'dashboard_panitia/panitia_edit.php'; 
  }else{
    echo base_url('access_denied/not_found');
  }
  ?>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Irham Masir || Teknik Informatika UNG
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php 
  $this->load->view('layouts/foot');
?>
