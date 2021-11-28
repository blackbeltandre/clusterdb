<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Input <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('data_pertanian/input'); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Nama Camat</label>
            <input type="text" name="nama_camat"  class="form-control" placeholder="Nama Camat">
          </div>
          <div class="form-group">
            <label>Masa Jabatan</label>
            <input type="text" name="masa_jabatan" class="form-control" placeholder="Masa Jabatan" required>
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