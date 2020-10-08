<?php $this->load->view('template/head'); ?>
<?php $this->load->view('template/sidebar'); ?>
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
                        <li class="breadcrumb-item active">Profile</li>

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
                <h3 class="card-title">My Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar" align="center">
                                    <?php if (empty($user['foto'])):?>
                                    <img class="img-circle elevation-3" width="200px" src="<?= base_url().'assets/img/profile/user.png' ?>" />
                                    <?php else:?>
                                    <img class="img-circle elevation-3" width="200px" src="<?= base_url().'assets/img/profile/'.$user['foto'] ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <a href="<?= base_url('setting'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-edit"></i> Edit Profile</a>
                                    <a href="<?= base_url('change-password'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-lock"></i> Change Password</a>
                                </div>
                             </div>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-hover">
                                <tr>
                                    <th width="200">Nama</th>
                                    <td style="border-top:1px solid rgba(0, 0, 0, 0.1)"><?= $user['nama']; ?></td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td><?= $user['username']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?= $user['email']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td><?= $user['jabatan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td class="text-capitalize"><?= $user['role']; ?></td>
                                </tr>
                                <tr>
                                    <th>Signature</th>
                                    <td>
                                        <?php if (empty($user['tanda_tangan'])):?>
                                        <img class="img" src="<?= base_url().'assets/img/signature/signature.png' ?>" width="200px" />
                                        <?php else:?>
                                        <img class="img" src="<?= base_url().'assets/img/signature/'.$user['tanda_tangan'] ?>" width="200px" />
                                        <?php endif; ?>
                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                  
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

  
<?php $this->load->view('template/footer'); ?>