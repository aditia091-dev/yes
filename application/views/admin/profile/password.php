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
                <h3 class="card-title">Edit Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <form action="<?= base_url('change-password'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="label">Old Password</label>
                            <input type="hidden" class="form-control" name="id_admin" value="<?= $this->session->userdata('id_admin'); ?>" readonly>
                            <input type="password" class="form-control" name="old_password" required>
                            <?= form_error('old_password', '<span class="text-danger small">', '</span>'); ?>
                        </div>                  
                        <div class="form-group">
                            <label class="label">New Password</label>
                            <input type="password" class="form-control" name="new_password" required>
                            <?= form_error('new_password', '<span class="text-danger small">', '</span>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="label">Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password" required>
                            <?= form_error('confirm_password', '<span class="text-danger small">', '</span>'); ?>
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

