<div class="modal fade" id="myModalEdit<?php echo $id_pertanian; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Edit <?php echo $title; ?></h4>
      </div>
      <?php echo form_open('data_pertanian/edit/'.$id_pertanian); ?>
        <div class="box-body">
          <div class="form-group">
            <label>Jenis Tanaman</label>
            <input type="text" name="jenis_tanaman" value="<?php echo $key->jenis_tanaman; ?>" class="form-control" placeholder="Jenis Tanaman" required>
          </div>
          <div class="form-group">
            <label>Luas Tanam</label>
            <input type="text" name="luas_tanam" value="<?php echo $key->luas_tanam; ?>" class="form-control" placeholder="Luas Tanam" required>
          </div>
          <div class="form-group">
            <label>Hasil</label>
            <input type="text" name="hasil" value="<?php echo $key->hasil; ?>" class="form-control" placeholder="Hasil" required>
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