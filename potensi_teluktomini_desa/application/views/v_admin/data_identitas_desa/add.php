<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Input <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('data_identitas_desa/input'); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Desa</label>
            <input type="text" name="nama_desa"  class="form-control" placeholder="Nama Desa">
          </div>
          <div class="form-group">
            <label>Kepala Desa</label>
            <input type="text" name="kepala_desa" class="form-control" placeholder="Kepala Desa" required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat"  class="form-control" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label>Nomor Telpon</label>
            <input type="text" name="nomor_telpon" class="form-control" placeholder="Nomor Telpon" required>
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