<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    public $data = array();
    
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if(empty($_SESSION['lang'])){
            $_SESSION['lang'] = 'tr';
        }
        if(empty($_SESSION['lang_array'])){
            $_SESSION['lang_array'] = array('tr', 'en');
        }
    }
    
	public function index()
	{
		
		$data['products'] = $this->db->select('*')
			->where('is_deleted', 0)
			->get('products_table')->result_array();

		$data['social_list'] = $this->db->select('*')
			->where('is_deleted', 0)
			->get('social_media_table')->result_array();
	    
		$data['banners'] = $this->db->select('*')
			->where('is_deleted', 0)
			->get('banner_table')->result_array();
		
		$this->load->view('home_view', $data);
	}
	
	public function change_lang()
	{
		if($_POST['lang']){
		    $_SESSION['lang'] = $_POST['lang'];
		    echo 'ok';
		}
	}
	
}
