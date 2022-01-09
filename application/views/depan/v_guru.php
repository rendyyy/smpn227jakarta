<div class="popular_program_area section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>STRUKTUR ORGANISASI</h3>
                        <p>Daftar Struktur Organisasi SMPN 227 Jakarta</p>
                        <br><br>
                    </div>
                </div>
            </div>
            
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div >
                        
                                    
                        
                        <?php foreach ($data->result() as $row) : ?>
                        <div class="row" >
                            <div class="col-lg-12">
                                <div class="program_thumb">
                            <center>
                            <h4><?php echo $row->guru_nama;?></h4>
                                    <?php if(empty($row->guru_photo)):?>
                            <img src="<?php echo base_url().'assets/images/blank.png';?>" class="img-thumbnail" style="width:500px;height:500px;" alt="<?php echo $row->guru_nama;?>">
                          <?php else:?>
                            <img src="<?php echo base_url().'assets/images/'.$row->guru_photo;?>" class="img-thumbnail" style="width:500px;height:500px;" alt="<?php echo $row->guru_nama;?>">
                          <?php endif;?> <hr><br>
                          </center>
                                </div>

                            </div>
                        </div>
                        <?php endforeach;?>
                        
                        
                    </div>
                    
                    <nav><?php echo $page;?></nav>
                    
                    
                </div>
                
                
                
            </div>

            
        </div>
    </div>