<div class="modal fade" id="myModalEdit<?php echo $key->id_desa; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('data_identitas_desa/edit/'.$key->id_desa); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Desa</label>
            <input type="hidden" name="id_desa" value="<?php echo $key->id_desa; ?>" class="form-control" placeholder="id desa" required>
            <input type="text" name="nama_desa" value="<?php echo $key->nama_desa; ?>" class="form-control" placeholder="Nama Desa" required>
          </div>
          <div class="form-group">
            <label>Kepala Desa</label>
            <input type="text" name="kepala_desa" value="<?php echo $key->kepala_desa; ?>" class="form-control" placeholder="Luas Tanam" required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo $key->alamat; ?>" class="form-control" placeholder="Jenis Tanaman" required>
          </div>
          <div class="form-group">
            <label>Nomor Telpon</label>
            <input type="text" name="nomor_telpon" value="<?php echo $key->nomor_telpon; ?>" class="form-control" placeholder="Luas Tanam" required>
          </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-left">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>