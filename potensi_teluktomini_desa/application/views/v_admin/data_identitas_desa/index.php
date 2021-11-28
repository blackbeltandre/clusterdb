 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-body">
              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Add</button>
            </div>
            <div class="box-footer">
              <?php $this->load->view('layouts/notifikasi'); ?>
            </div>
          </div>

          <?php include 'add.php';  ?>
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tabel <?php echo $title; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Desa</th>
                    <th>Kepala Desa</th>
                    <th>Alamat</th>
                    <th>Nomor Telpon</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($data_identitas_desa as $key) {
                     ?>
                  <tr>
                    <td><?php echo $no; ?>.</td>
                    <td><?php echo $key->nama_desa; ?></td>
                    <td><?php echo $key->kepala_desa; ?></td>
                    <td><?php echo $key->alamat; ?></td>
                    <td><?php echo $key->nomor_telpon; ?></td>
                    </td>
                    <td>

                      <a data-toggle="tooltip" data-placement="top" title="Edit">
                      <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalEdit<?php echo $key->id_desa; ?>"><i class="fa fa-edit"></i></button>
                      </a>
                      
                      <a href="<?php echo base_url('data_identitas_desa/delete/'.$key->id_desa); ?>" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return confirm('Hapus <?php echo $key->nama_desa; ?> ?')">
                      <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                      </a>

                    </td>
                  </tr>
                  <?php 
                    $no++;
                    include 'edit.php'; 
                    }
                   ?>
                  </tbody>
                </table>
            </div>
        </div>
      </div>  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->