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
                        <li class="breadcrumb-item active">Kelola Kategori</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Kategori</h3>
                            <a class="btn btn-sm btn-primary float-right" href="<?= base_url('tambah-kategori'); ?>"><i class="fa fa-user-plus"> </i> Tambah Kategori</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                
                            <div class="table-responsive">
                            <table id="datatables-user" class="table table-hover table-striped">
                                <thead class="">
                                    <th style="text-align:center; width: 30px;">No</th>
                                    <th>Kategori</th>
                                    <th>Kode Warna</th>
                                    <th>Tag</th>
                                    <th>Gambar</th>
                                    <th style="text-align:center; width: 220px;">Aksi</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                        foreach ($kategori as $key) { ?>
                                            <tr>
                                                <td style="text-align:center; width: 30px;"><?= $i++; ?></td>
                                                <td><?= $key['kategori']; ?></td>
                                                <td><?= $key['kode_warna']; ?></td>
                                                <td><?= $key['tag']; ?></td>
                                                <td>
                                                    <?php if (empty($key['gambar'])) { ?>
                                                        Tidak ada gambar.
                                                    <?php } else { ?>
                                                        <img class="img" src="<?= base_url().'assets/images/kategori/'.$key['gambar'] ?>" style="width:200px;"/>
                                                    <?php } ?>
                                                </td>
                                                <td style="text-align:center;">
                                                    <a href="<?= base_url('detail-kategori/' .$key['id_kategori'].'/'. $key['tag']); ?>" class="btn btn-sm btn-default"><i class="fa fa-list"></i> Details</a>
                                                    <a href="<?= base_url('edit-kategori/' . $key['id_kategori']); ?>" class="btn btn-sm btn-info disabled"><i class="fa fa-edit"></i> Edit</a>
                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus<?= $key['id_kategori']; ?>"><i class="fa fa-trash"></i> Hapus</button>
                                                </td>
                                            </tr>
                                        <?php }
                                    ?>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php
foreach ($kategori as $key) { ?>
    <div class="modal fade" id="modalHapus<?= $key['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus data ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data yang sudah dihapus tidak akan kembali
                    <form action="<?= base_url('hapus-kategori'); ?>" method="post">
                        <input type="hidden" name="id_kategori" value="<?= $key['id_kategori']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<?php $this->load->view('admin/template/footer'); ?>