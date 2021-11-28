<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Input <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('data_ternak/input'); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Jenis Ternak</label>
            <input type="text" name="jenis_ternak"  class="form-control" placeholder="Jenis Ternak">
          </div>
          <div class="form-group">
            <label>Jumlah Ternak</label>
            <input type="text" name="jumlah_ternak" class="form-control" placeholder="Jumlah Ternak" required>
          </div>
          <div class="form-group">
            <label>Jumlah Pemilik</label>
            <input type="text" name="jumlah_pemilik" class="form-control" placeholder="Jumlah Pemilik" required>
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