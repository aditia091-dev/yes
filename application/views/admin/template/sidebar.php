 <?php
  $id_admin = $this->session->userdata('id_admin');
  $user = $this->db->get_where('admin', ['id_admin' => $id_admin])->row_array();
  ?>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <!-- User Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <?= $this->session->userdata('nama'); ?>
          <i class="far fa-user"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('setting'); ?>" class="dropdown-item">
            <i class="fas fa-cog mr-2"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('change-password'); ?>" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i> Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('logout'); ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard');?>" class="brand-link">
      <img src="<?= base_url();?>assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cr. Breton ID</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img class="img-circle elevation-2" alt="User Image" src="<?= base_url().'assets/backend/img/profile/user.png' ?>" />
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('nama')?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= $title == 'Dashboard' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin'); ?>" class="nav-link <?= $title == 'Kelola Admin' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>Kelola Admin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('konten'); ?>" class="nav-link <?= $title == 'Kelola Konten' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>Kelola Konten</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
