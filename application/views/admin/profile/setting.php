<?php $this->load->view('admin/template/head'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit <?= $title?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('setting'); ?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label class="label">Nama Lengkap</label>
                        <input type="hidden" class="form-control" name="id_admin" value="<?= $this->session->userdata('id_admin'); ?>" readonly>
                        <input type="text" class="form-control" name="nama" value="<?= $admin['nama_admin']; ?>" required>
                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required value="<?= $admin['username']; ?>">
                        <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
                        <span class="text-danger small" id="dup_username"></span>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-sync"></i> Reset</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('admin/template/footer'); ?>
