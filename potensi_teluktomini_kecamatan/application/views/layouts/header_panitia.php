<?php foreach ($user as $key) {
  $nama = $key->nama;
  $username = $key->username;
}?>
<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>A</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Potensi</b> - Teluk Tomini</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/pp.png" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $nama; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/pp.png" class="img-circle" alt="User Image">
              <p>
                <?php echo $nama; ?>
                <small><?php echo $username; ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo base_url('panitia/edit'); ?>" class="btn btn-primary btn-flat">Settings</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url('panitia/logout'); ?>"class="btn btn-danger btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>