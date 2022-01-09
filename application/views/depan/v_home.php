<?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>

<div class="slider_area">
        <div class="slider_active owl-carousel">
            <!-- single_carouse -->
            <div class="single_slider  d-flex align-items-center slider_bg_1">
               
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2">
               
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3">
               
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_4">
               
               </div>
            <!--/ single_carouse -->
            
        </div>
    </div>


<div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Berita Sekolah</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                
                
                
                <?php foreach ($berita->result() as $row) :?>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                <img src="<?php echo base_url().'assets/images/berita/'.$row->tulisan_gambar;?>" alt="<?php echo $row->tulisan_judul;?>">
                            </a>
                            <span class="badge"><?php echo $row->tulisan_kategori_nama;?></span>
                        </div>
                        <div class="news_info">
                            <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>">
                                <h4><?php echo $row->tulisan_judul;?></h4>
                            </a>
                            <p><?php echo limit_words($row->tulisan_isi,10).'...';?></p>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> <?php echo $row->tanggal;?></span> <span></span>    </p>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                
            </div>
        </div>
    </div>
    <!--/ service_area_start  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Pengumuman Sekolah</h3>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                                                              
                
                        <?php foreach ($pengumuman->result() as $row) :?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span><?php echo $row->tanggal;?></span>
                                    <h4><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h4>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>
                                    <a href="<?php echo site_url('pengumuman');?>" class="boxed-btn5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        
                        
                        
                    </div>
                </div>
                                
                
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="<?php echo site_url('pengumuman');?>" class="boxed-btn4">Lihat Semua Pengumuman</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  <br><br>
  
    <!-- popular_program_area_end -->


    