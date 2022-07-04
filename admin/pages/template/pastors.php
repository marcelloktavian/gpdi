<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pastors | GPdI Bukit Hermon</title>

  <?php include 'pages/view/global_head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  
  <div class="modal fade" id="modal-delete-pastor">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">PERHATIAN !!!</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus Pastor ini ?<br>
            Nama Pastor &nbsp; : <b id="nama_pastor_delete"></b><br>
        </div>
        <form action="controller/conn_delete_pastors.php" method="post">
        <input type="hidden" name="id_user" value="<?=$_SESSION['lgid_user']?>">
          <input type="hidden" name="id_pastors_delete" id="id_pastors_delete" value="">

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


  <div class="modal fade" id="modal-edit-pastor">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Edit Data User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="controller/conn_edit_pastors.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label for="foto_user">Foto User</label>
              <input class="form-control" type="file" id="foto_user" name="foto_user">
              <label for="foto_user"><img id="foto_up"
                  style="width: 200px; border: 1px solid black; margin-top: 30px; padding: 10px;"
                  src="image/pastors/0.jpg" alt="your image" /></label>
            </div>
            <div class="form-group row">
              <label for="nama_pastors" class="col-sm-12 col-form-label">Nama User</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_pastors" name="nama_pastors" placeholder="Ketikan Nama Clinet"
                  value="">
              </div>
            </div>
            

            <input type="hidden" name="id_user" value="<?=$_SESSION['lgid_user']?>">
            <input type="hidden" name="id_pastors_edit" id="id_pastors_edit" value="">
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
          <h4 class="modal-title" id="exampleModalLabel2">Tambahkan Data Pastors</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="controller/conn_add_pastors.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label for="foto_user2">Foto User</label>
              <input class="form-control" type="file" id="foto_user2" name="foto_user2">
              <label for="foto_user2"><img id="foto_up2"
                  style="width: 200px; border: 1px solid black; margin-top: 30px; padding: 10px;"
                  src="image/pastors/0.jpg" alt="your image" /></label>
            </div>
            <div class="form-group row">
              <label for="nama_add_pastors" class="col-sm-12 col-form-label">Nama Pastors</label>
              <div class="col-sm-12">
                <input type="text" class="form-control" id="nama_add_pastors" name="nama_add_pastors"
                  placeholder="Ketikan Nama Pastors" value="">
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
              <h1 class="m-0">Our Pastors
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
                      + Add Pastors
                    </button>
                  </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style ="text-align: center;">Photos</th>
                        <th class="none"></th>
                        <th style ="width: 60%;">Nama pastors</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $result_head = mysqli_query($koneksi,"select * from `wb_pastors`
                        where deleted_at is null");
                        while($d_head = mysqli_fetch_array($result_head)){
                        ?>
                      <tr>
                        <td></td>
                        <td class="none"><img class="shadow" style="width: 300px; border: 1px solid black;"
                            src="image/pastors/<?php if($d_head['photos_pastors']!=""){echo $d_head['photos_pastors'];}else{echo "0.jpg";} ?>"
                            alt="your image" /></td>
                        <td><?php echo $d_head['nama_pastors']; ?></td>
                        <td style="text-align: center;">
                          <button class="btn btn-info btn-sm" name="id_ev" style="margin-right: 15px;"
                            data-a="<?php echo $d_head['id_pastors']; ?>"
                            data-b="<?php echo $d_head['photos_pastors']; ?>"
                            data-c="<?php echo $d_head['nama_pastors']; ?>"
                            data-toggle="modal" data-target="#modal-edit-pastor" data-backdrop="static"
                            data-keyboard="false">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                          </button>
                          <button class="btn btn-danger btn-sm" data-backdrop="static" data-keyboard="false"
                            data-c="<?php echo $d_head['id_pastors']; ?>" 
                            data-v="<?php echo $d_head['nama_pastors']; ?>"
                            data-toggle="modal" data-target="#modal-delete-pastor">
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
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#foto_up').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#foto_user").change(function () {
            readURL(this);
        });

        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#foto_up2').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#foto_user2").change(function () {
            readURL1(this);
        });



        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": false,
                "sorting": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });



        $('#modal-delete-pastor').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_c = button.data('c');

            var recipient_v = button.data('v');

            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.id_pastors_delete').val(recipient_c);
            document.getElementById("id_pastors_delete").value = recipient_c;


            document.getElementById("nama_pastor_delete").innerHTML = recipient_v;
        })



        $('#modal-edit-pastor').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var recipient_a = button.data('a');
            var recipient_b = button.data('b');
            var recipient_c = button.data('c');

            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            modal.find('.id_pastors_edit').val(recipient_a);
            document.getElementById("id_pastors_edit").value = recipient_a;

            modal.find('.fotoLama').val(recipient_b);
            document.getElementById("fotoLama").value = recipient_b;
            if (recipient_b=="") {
                document.getElementById("foto_up").src = "image/pastors/0.jpg"
            }else{
            document.getElementById("foto_up").src = "image/pastors/"+recipient_b;
            }
            modal.find('.nama_pastors').val(recipient_c);
            document.getElementById("nama_pastors").value = recipient_c;



            
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


        
$(document).ready(function(){

/*function readURL(input)
{
    if(input.files && input.files[0])
    {
      var reader = new FileReader();
  
      reader.onload = function(event) {
          $('#uploaded_image').attr('src', event.target.result);
          $('#uploaded_image').removeClass('img-circle');
          $('#foto_user').after('<div align="center" id="crop_button_area"><br /><button type="button" class="btn btn-primary" id="crop">Crop</button></div>')
      }
      reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
  }

  $("#foto_user").change(function() {
    readURL(this);
    var image = document.getElementById("uploaded_image");
    cropper = new Cropper(image, {
      aspectRatio: 1,
      viewMode: 3,
      preview: '.preview'
    });
});*/


var $modal = $('#modal');
var image = document.getElementById('sample_image');
var cropper;

//$("body").on("change", ".image", function(e){
$('#foto_user').change(function(event){
    var files = event.target.files;
    var done = function (url) {
        image.src = url;
        $modal.modal('show');
    };
    //var reader;
    //var file;
    //var url;

    if (files && files.length > 0)
    {
        /*file = files[0];
        if(URL)
        {
          done(URL.createObjectURL(file));
        }
        else if(FileReader)
        {*/
          reader = new FileReader();
          reader.onload = function (event) {
              done(reader.result);
          };
          reader.readAsDataURL(files[0]);
        //}
    }
});

$modal.on('shown.bs.modal', function() {
    cropper = new Cropper(image, {
      aspectRatio: 1,
      viewMode: 3,
      preview: '.preview'
    });
}).on('hidden.bs.modal', function() {
     cropper.destroy();
     cropper = null;
});

$("#crop").click(function(){
    canvas = cropper.getCroppedCanvas({
        width: 400,
        height: 400,
    });

    canvas.toBlob(function(blob) {
        //url = URL.createObjectURL(blob);
        var reader = new FileReader();
         reader.readAsDataURL(blob); 
         reader.onloadend = function() {
            var base64data = reader.result;  
          
            $.ajax({
              url: "crop/upload.php",
                method: "POST",                	
                data: {image: base64data},
                success: function(data){
                    console.log(data);
                    $modal.modal('hide');
                    $('#uploaded_image').attr('src', data);
                    //alert("success upload image");
                }
              });
         }
    });
  });

});
    </script>
</body>

</html>
