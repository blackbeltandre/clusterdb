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
        <h2 style="margin-top:0px">Tbl_lahan_pertanian Read</h2>
        <table class="table">
	    <tr><td>Luas Lahan</td><td><?php echo $luas_lahan; ?></td></tr>
	    <tr><td>Kk</td><td><?php echo $kk; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_lahan_pertanian') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>