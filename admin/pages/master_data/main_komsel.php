<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Komsel (KeBun)</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Komsel (KeBun)</h3>
                <div class="card-tools">
                    <a href="index.php?p=komsel&action=add" style="text-align:right;"><button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Data</button></a>
                </button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl-komsel" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="2%">No</th>
                    <th>KeBun</th>
                    <th>PKS</th>
                    <th>No HP PKS</th>
                    <th>Wilayah</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $no=1;
                    $data = mysqli_query($koneksi,"select * from wb_komsel where id <> 30 and deleted=0");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                        <tr>
                            <td><?=number_format($no,0)?></td>
                            <td><?=$d['komsel']?></td>
                            <td><?=$d['pks']?></td>
                            <td><?=$d['hp_pks']?></td>
                            <td><?=$d['wilayah']?></td>
                            <td><a href="index.php?p=komsel&action=edit&id=<?=$d['id']?>" style="text-align:center;"><button type="button" class="btn btn-info"><i class="fas fa-edit"></i></button></a> 
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                        </tr>
                    <?php
                        $no++;
                        }
                    ?>
                  </tbody>
                </table>
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

  <script>
  $(function () {
    $("#tbl-komsel").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "order": [[1, 'asc']],
    });
   
  });
</script>