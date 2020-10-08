<?php $this->load->view('admin/template/head'); ?>
<?php $this->load->view('admin/template/sidebar'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active">Kelola Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('tambah-admin'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" required>
                                <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" required value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
                                <span class="text-danger small" id="dup_username"></span>
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="label">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="konfirmasi_password" required>
                                <?= form_error('konfirmasi_password', '<span class="text-danger small">', '</span>'); ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-default" href="<?= base_url('admin'); ?>"><i class="fa fa-arrow-left"> </i> Back</a>
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