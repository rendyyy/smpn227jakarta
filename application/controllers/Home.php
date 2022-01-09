<?php
class Home extends CI_Controller{
    
	function __construct(){
        
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengumuman');
		$this->load->model('m_agenda');
		$this->load->model('m_files');
		$this->load->model('m_pengunjung');
		$this->m_pengunjung->count_visitor();
        
	}
    
	function index(){
        
            $this->data['main_view']   = 'depan/v_home';
        
			$this->data['berita']=$this->m_tulisan->get_berita_home();
			$this->data['pengumuman']=$this->m_pengumuman->get_pengumuman_home();
		
        
			$this->load->view('theme/template',$this->data);
	}

}
