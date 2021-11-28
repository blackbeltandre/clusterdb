<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_lahan_pertanian <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Luas Lahan <?php echo form_error('luas_lahan') ?></label>
            <input type="text" class="form-control" name="luas_lahan" id="luas_lahan" placeholder="Luas Lahan" value="<?php echo $luas_lahan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kk <?php echo form_error('kk') ?></label>
            <input type="text" class="form-control" name="kk" id="kk" placeholder="Kk" value="<?php echo $kk; ?>" />
        </div>
	    <input type="hidden" name="id_lahan" value="<?php echo $id_lahan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_lahan_pertanian') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>