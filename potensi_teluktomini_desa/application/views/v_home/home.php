<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(assets/academy/img/bg-img/xy1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <!-- <h4 data-animation="fadeInUp" data-delay="100ms">KMI- Balut</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>Xyz</h2> -->
                            <!-- <a href="<?php echo base_url('home/about_us'); ?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(assets/academy/img/bg-img/xy2.jpeg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <!-- <h4 data-animation="fadeInUp" data-delay="100ms">Panitia Seleksi Asisten Laboratorium</h4> -->
                            <!-- <h2 data-animation="fadeInUp" data-delay="400ms"><?php echo $kegiatan; ?></h2> -->
                            <!-- <a href="<?php echo base_url('home/alur_pendaftaran'); ?>"" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide bg-img" style="background-image: url(assets/academy/img/bg-img/xy3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="hero-slides-content">
                            <!-- <h4 data-animation="fadeInUp" data-delay="100ms">Bang Ambo University</h4>
                            <h2 data-animation="fadeInUp" data-delay="400ms">Wellcome to our <br>University</h2> -->
                            <!-- <a href="<?php echo base_url('home/about_us'); ?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Feature Area Start ##### -->
 <!-- <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1"></i>
                                <h5>Best University</h5>
                            </div>
                        </div> 
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-assistance"></i>
                                <h5>Amazing Teachers</h5>
                            </div>
                        </div> 
                         <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-telephone-3"></i>
                                <h5>Great Support</h5>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- ##### Top Feature Area End ##### -->

<!-- ##### Course Area Start ##### -->
<div class="academy-courses-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4 mb-0">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <!-- <div class="course-icon">
                        <i class="icon-id-card"></i> 
                    </div> -->
                    <div class="course-content">
                         <h5>Tabel Potensi Pertanian</h5>
                         <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Jenis Tanaman</th>
                    <th>Luas Tanam</th>
                    <th>Hasil</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($data_pertanian as $key) {
                        $id_pertanian = $key->id_pertanian;
                     ?>
                  <tr>
                    <td><?php echo $no; ?>.</td>
                    <td><?php echo $key->jenis_tanaman; ?></td>
                    <td><?php echo $key->luas_tanam; ?></td>
                    <td><?php echo $key->hasil; ?></td>
                    </td>
                  </tr>
                  <?php 
                    $no++;
                 
                    }
                   ?>
                  </tbody>
                </table>
                    </div>
                </div>
            </div>
            
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <!-- <div class="course-icon">
                        <i class="icon-responsive"></i>
                    </div> -->
                    <div class="course-content">
                        <h5>Tabel Potensi Peternakan</h5>
                        <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Jenis Ternak</th>
                    <th>Jumlah Ternak</th>
                    <th>Jumlah Pemilik</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($data_ternak as $key) {
                        $id_ternak = $key->id_ternak;
                     ?>
                  <tr>
                    <td><?php echo $no; ?>.</td>
                    <td><?php echo $key->jenis_ternak; ?></td>
                    <td><?php echo $key->jumlah_ternak; ?></td>
                    <td><?php echo $key->jumlah_pemilik; ?></td>
                    </td>
             

                  </tr>
                  <?php 
                    $no++;
                 
                    }
                   ?>
                  </tbody>
                </table>
                    </div>
                </div>
            </div>
            <!-- Single Course Area -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                    <!-- <div class="course-icon">
                        <i class="icon-message"></i>
                    </div> -->
                    <div class="course-content">
                        <h5>Tabel Lahan Pertanian</h5>
                        <table id="example1" class="table table-bordered">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Luas Lahan</th>
                    <th>KK</th>
                    
                   
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($data_lahan as $key) {
                        
                     ?>
                  <tr>
                    <td><?php echo $no; ?>.</td>
                    <td><?php echo $key->luas_lahan; ?></td>
                    <td><?php echo $key->kk; ?></td>
                    
                    </td>
                  </tr>
                  <?php 
                    $no++;
                 
                    }
                   ?>
                  </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Course Area End ##### -->



<!-- ##### CTA Area Start ##### -->
<!-- <div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
                    <h3><?php echo $kegiatan; ?> !</h3>
                    <a href="<?php echo base_url('home/alur_pendaftaran'); ?>" class="btn academy-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- ##### CTA Area End ##### -->