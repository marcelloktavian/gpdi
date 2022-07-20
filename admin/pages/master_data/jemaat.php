<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jemaat | GPdI Bukit Hermon</title>

  <?php include 'pages/view/global_head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">


  <div class="modal fade" id="modal-delete-jemaat">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">PERHATIAN !!!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus jemaat ini ?<br>
            Nama jemaat &nbsp; : <b id="nama_jemaat_delete"></b><br>
        </div>
        <form action="controller/conn_delete_jemaat.php" method="post">
          <input type="hidden" name="id_user" value="<?=$_SESSION['lgid_user']?>">
          <input type="hidden" name="id_jemaat_delete" id="id_jemaat_delete" value="">

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <div class="modal fade" id="modal-edit-jemaat">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Edit Data jemaat</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="controller/conn_edit_jemaat.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group row">
              <label for="nama_edit_jemaat" class="col-sm-12 col-form-label">Nama jemaat</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_edit_jemaat" name="nama_edit_jemaat"
                  placeholder="Ketikan Nama jemaat" value="">
              </div>
            </div>

            <div class="form-group row">
              <label for="nama_edit_jemaat" class="col-sm-12 col-form-label">Nama jemaat</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_edit_jemaat" name="nama_edit_jemaat"
                  placeholder="Ketikan Nama jemaat" value="">
              </div>
            </div>

            <div class="form-group row">
              <label for="nama_edit_hp_jemaat" class="col-sm-12 col-form-label">No Telp jemaat</label>
              <div class="col-sm-12">
                <input type="text" required class="form-control" id="nama_edit_hp_jemaat" name="nama_edit_hp_jemaat"
                  placeholder="No Telp jemaat" value="" data-inputmask='"mask": "9999999999999"' data-mask>
              </div>
            </div>

            <div class="form-group row">
              <label for="nama_edit_alamat" class="col-sm-12 col-form-label">alamat</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_edit_alamat" name="nama_edit_alamat"
                  placeholder="Ketikan Nama jemaat" value="">
              </div>
            </div>


            <input type="hidden" name="id_user" value="<?=$_SESSION['lgid_user']?>">
            <input type="hidden" name="id_jemaat_edit" id="id_jemaat_edit" value="">
            <input type="hidden" class="form-group" id="fotoLama" name="fotoLama">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel2">Tambahkan Data jemaat</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="controller/conn_add_jemaat.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">

            <div class="form-group row">
              <label for="nama_add_tittle" class="col-sm-12 col-form-label">Nama Tittle</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_add_tittle" name="nama_add_tittle"
                  placeholder="Ketikan Nama jemaat" value="">
              </div>
            </div>

            <div class="form-group row">
              <label for="nama_add_jemaat" class="col-sm-12 col-form-label">Nama jemaat</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_add_jemaat" name="nama_add_jemaat"
                  placeholder="Ketikan Nama jemaat" value="">
              </div>
            </div>

            <div class="form-group row">
              <label for="nama_add_no_jemaat" class="col-sm-12 col-form-label">No Telp jemaat</label>
              <div class="col-sm-12">
                <input type="text" required class="form-control" id="nama_add_no_jemaat" name="nama_add_no_jemaat"
                  placeholder="No Telp jemaat" value="" data-inputmask='"mask": "9999999999999"' data-mask>
              </div>
            </div>

            <div class="form-group row">
              <label for="nama_add_alamat" class="col-sm-12 col-form-label">alamat</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_add_alamat" name="nama_add_alamat"
                  placeholder="Ketikan Nama jemaat" value="">
              </div>
            </div>


            <input type="hidden" name="id_user" value="<?=$_SESSION['lgid_user']?>">


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
  </div>


  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../assets/images/logo-admin.png" alt="GPdILogo">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <?php include 'pages/view/aside.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Our jemaat
              </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">



          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="row" style="height: 30px;">
                  <div class="col-6 form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success"
                      style="margin-top: 10px; margin-left: 20px;">
                      <!-- <input type="checkbox" class="custom-control-input" onChange="changeCheck()"
                        id="customSwitch3" value="1" <?php if($aktif==1){echo "checked";}?>>
                        <label class="custom-control-label"
                        for="customSwitch3"><?php if($aktif==1){echo "Aktif";}else{echo "Tidak Aktif";}?></label> -->
                    </div>
                  </div>
                  <div class="col-6 form-group">
                    <button class="btn btn-success float-sm-right" data-toggle="modal" data-target="#modal-add"
                      data-backdrop="static" data-keyboard="false"
                      style="right: 0px; width: 150px; margin-top: 10px; margin-right: 20px;">
                      + Add jemaat
                    </button>
                  </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama Tittle</th>
                        <th>Nama Jemaat</th>
                        <th>No HP jemaat</th>
                        <th>Alamat</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $result_head = mysqli_query($koneksi,"select * from `wb_jemaat`
                        where deleted_at is null");
                        while($d_head = mysqli_fetch_array($result_head)){
                        ?>
                      <tr>
                        <td><?php echo $d_head['tittle']; ?></td>
                        <td><?php echo $d_head['nama_jemaat']; ?></td>
                        <td><?php echo $d_head['hp_jemaat']; ?></td>
                        <td><?php echo $d_head['alamat']; ?></td>
                        <td style="text-align: center;">
                          <button class="btn btn-info btn-sm" name="id_ev" style="margin-right: 15px;"
                            data-a="<?php echo $d_head['id_jemaat']; ?>" data-b="<?php echo $d_head['nama_jemaat']; ?>"
                            data-c="<?php echo $d_head['jemaat']; ?>" data-d="<?php echo $d_head['hp_jemaat']; ?>"
                            data-e="<?php echo $d_head['alamat']; ?>" data-toggle="modal"
                            data-target="#modal-edit-jemaat" data-backdrop="static" data-keyboard="false">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                          </button>
                          <button class="btn btn-danger btn-sm" data-backdrop="static" data-keyboard="false"
                            data-c="<?php echo $d_head['id_jemaat']; ?>" data-v="<?php echo $d_head['nama_jemaat']; ?>"
                            data-toggle="modal" data-target="#modal-delete-jemaat">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                          </button>

                        </td>
                      </tr>

                      <?php } ?>


                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'pages/view/global_footer.php'; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  <?php include 'pages/view/global_script.php'; ?>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "paging": true,
        "sorting": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"],
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });



    $('#modal-delete-jemaat').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var recipient_c = button.data('c');

      var recipient_v = button.data('v');

      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('.id_jemaat_delete').val(recipient_c);
      document.getElementById("id_jemaat_delete").value = recipient_c;


      document.getElementById("nama_jemaat_delete").innerHTML = recipient_v;
    })



    $('#modal-edit-jemaat').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var recipient_a = button.data('a');
      var recipient_b = button.data('b');
      var recipient_c = button.data('c');
      var recipient_d = button.data('d');
      var recipient_e = button.data('e');

      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('.id_jemaat_edit').val(recipient_a);
      document.getElementById("id_jemaat_edit").value = recipient_a;

      modal.find('.nama_edit_jemaat').val(recipient_b);
      document.getElementById("nama_edit_jemaat").value = recipient_b;

      modal.find('.nama_edit_jemaat').val(recipient_c);
      document.getElementById("nama_edit_jemaat").value = recipient_c;

      modal.find('.nama_edit_hp_jemaat').val(recipient_d);
      document.getElementById("nama_edit_hp_jemaat").value = recipient_d;

      modal.find('.nama_edit_alamat').val(recipient_e);
      document.getElementById("nama_edit_alamat").value = recipient_e;

    })

    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate2').datetimepicker({
        format: 'DD-MMMM-yyyy'
      });
      //Date range picker
      $('#reservation2').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime2').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'DD/MM/YYYY'
        }
      })

      //Date range picker
      $('#reservationdate').datetimepicker({
        format: 'DD-MMMM-yyyy'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'DD/MM/YYYY'
        }
      })

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'DD/MM/YYYY'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()
    })

    $('#modal-add').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var modal = $(this)
    })

  </script>
</body>

</html>
