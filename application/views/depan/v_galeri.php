<div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">FASILITAS SEKOLAH</h3>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">                   
                    
                                      
                              
                    
                    
                    <div class="section-top-border">
				
                        
				<div class="row gallery-item">
                    
                    
            
                    
                    <?php foreach ($all_galeri->result() as $row) : ?>
					<div class="col-md-4"><br><br><br>
                        <h4 align='center'><?php echo $row->galeri_judul;?></h4>
						<a href="<?php echo base_url().'assets/images/fasilitas/'.$row->galeri_gambar;?>" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(<?php echo base_url().'assets/images/fasilitas/'.$row->galeri_gambar;?>);"></div>
						</a>
                        <hr>
					</div>
                    <?php endforeach;?>
					
				</div>
			</div>
                    
                    
                </div>
                
                
            </div>
        </div>
    </div>