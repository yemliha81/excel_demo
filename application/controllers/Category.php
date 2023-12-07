<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
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
    
	public function category_list()
	{
		$data['social_list'] = $this->db->select('*')
			->where('is_deleted', 0)
			->get('social_media_table')->result_array();
		$data['categories'] = $this->db->select('*')
			->where('is_deleted', 0)
    		->get('category_table')->result_array();
    	
    	    
    	$this->load->view('category_list_view', $data);

	}

	public function detail($id)
	{
		
		$data['category'] = $this->db->select('*')
			->where('is_deleted', 0)
			->where('id', $id)
    		->get('category_table')->row_array();

		$data['products'] = $this->db->select('*')
			->where('is_deleted', 0)
			->where('category_id', $id)
    		->get('products_table')->result_array();
    	
		$data['social_list'] = $this->db->select('*')
			->where('is_deleted', 0)
			->get('social_media_table')->result_array();

    	$this->load->view('category_detail_view', $data);

	}
}
