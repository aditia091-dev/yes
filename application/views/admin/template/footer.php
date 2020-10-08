      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.5
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/backend/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url(); ?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url(); ?>assets/backend/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url(); ?>assets/backend/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url(); ?>assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url(); ?>assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url(); ?>assets/backend/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url(); ?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url(); ?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/backend/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url(); ?>assets/backend/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url(); ?>assets/backend/dist/js/demo.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/backend/plugins/toastr/toastr.min.js'?>"></script>
    <script src="<?= base_url(); ?>assets/backend/vendor/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?= base_url(); ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
      <script>
        $(document).ready(function() {

          $("#username").on('change',function(){
            <?php
              if ($title == 'Tambah Admin') { ?>
                $url  = "<?php echo base_url("Admin/Admin/cek_username"); ?>";
              <?php } else if ($title == 'Edit Admin') { ?>
                $url  = "<?php echo base_url("Admin/Admin/cek_username_edit/" . $admin['username']); ?>";
              <?php } else if ($title == 'Profile') {
                if ($this->session->login_admin == true) { ?>
                  $url  = "<?php echo base_url("Admin/Profile/cek_username/" . $admin['username']); ?>";
                <?php } else { ?>
                  $url  = "<?php echo base_url("Profile/cek_username/" . $user['username']); ?>";
                <?php }
              }
            ?>
            $.ajax({
              type    : "POST",
              url     : $url,
              data    : {
                username : $("#username").val()}, 
              async : true,
              dataType: "json",
              beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                  e.overrideMimeType("application/json;charset=UTF-8");
                }
              },
              success: function(response){
                $("#dup_username").html(response.dup_username).show();
              },
              error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
              }
            });
          });
        });

        $(document).ready( function () {
            $('#datatables-user').DataTable({
              "ordering": false,
            });
            $('#datatables-department').DataTable({
              "ordering": false,
            });
            $('#datatables-kategori').DataTable({
              "ordering": false,
            });
            $('#datepicker').datepicker({
              autoclose:true
            });
            $('#datepicker2').datepicker({
              autoclose:true
            });
        } );
      </script>
      <?php if($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
            toastr.success('Data berhasil disimpan.')
        </script>
      <?php elseif($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
            toastr.error('Data gagal disimpan.')
        </script>
      <?php elseif($this->session->flashdata('msg')=='edit'):?>
        <script type="text/javascript">
            toastr.info('Data berhasil diupdate.')
        </script>
      <?php elseif($this->session->flashdata('msg')=='hapus'):?>
        <script type="text/javascript">
            toastr.success('Data berhasil dihapus.')
        </script>
      <?php endif; ?>
  </body>
</html>
