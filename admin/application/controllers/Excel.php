<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Excel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        if(empty($_SESSION['admin_logged_in'])){
            redirect();
        }
        if(empty($_SESSION['lang'])){
            $_SESSION['lang'] = 'tr';
        }
        
        if(empty($_SESSION['lang_array'])){
            $_SESSION['lang_array'] = array('tr', 'en');
        }
    }
    
	public function index()
	{
		$data['menu'] = '2_1';
		$this->load->view('excel/excel_upload_view', $data);
	   
	}

	public function write_to_file(){

		//Test mesajı

		//$fields = $this->db->field_data('products_table');

		//debug($fields);

		$products = $this->db->select('*')
				->get('products_table')->result_array();

		//debug($products);

		$letters = range('A', 'K');

		$spreadsheet = new Spreadsheet();
		$activeWorksheet = $spreadsheet->getActiveSheet();

		$i = 1;
		$columns = array('id',
						'category_id',
						'product_name_en',
						'product_code',
						'product_description_en',
						'product_image',
						'product_price',
						'icons',
						'is_deleted',
						'is_hidden',
						'created_at');


		$i = 1;
		foreach($products as $key => $product){

			foreach($letters as $k =>  $letter) {
				$activeWorksheet->setCellValue($letter.$i, $product[$columns[$k]]);
			}
			$i++;
		}

		$writer = new Xlsx($spreadsheet);
		$writer->save(FCPATH.'excel_files/products-'.date("d-m-Y-H-i-s").'.xlsx');

		echo "done";
	}

	public function read_file(){

		$upload_file = $_FILES['upload_file']['name'];
		$extension = pathinfo($upload_file, PATHINFO_EXTENSION);

		//debug($_FILES);

		if($extension == 'xlsx'){
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		if($extension == 'xls'){
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		}

		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);


		//$spreadsheet = $reader->load(DOC_ROOT . '/files/excel/test.xlsx');

		$products = $spreadsheet->getActiveSheet()->toArray();

		//debug($products);

		foreach($products as $key => $product){
			if($key > 0 && $product[0]!==NULL){
				$ins[$key]['product_code'] = $product[0];
				$ins[$key]['product_name_en'] = $product[1];
				$ins[$key]['product_description_en'] = $product[2];
				$ins[$key]['product_price'] = $product[3];

				$checkProduct[$key] = $this->db->select('id')
					->where('product_code', $product[0])
					->get('products_table')->row_array();

				if(!empty($checkProduct[$key])){
					//Ürün varsa update edilmesi gerek
					$this->db->update('products_table', $ins[$key], array('product_code' => $product[0]));
				}else{
					//Insert işlemi yapılmalı
					$this->db->insert('products_table', $ins[$key]);
				}
			}
		}

		echo 'İşlem tamamlandı.';
		//debug($ins);

	}

	public function upload_file()
	{

		$upload_file = $_FILES['upload_file']['name'];
		$extension = pathinfo($upload_file, PATHINFO_EXTENSION);

		if($extension == 'xlsx'){
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		}
		if($extension == 'xls'){
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
		}

		$spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);

		
		//$spreadsheet = $reader->load(DOC_ROOT . '/files/excel/test.xlsx');

		$products = $spreadsheet->getActiveSheet()->toArray();

		//debug($products);

		try {
			$this->db->trans_begin();
			foreach($products as $key => $product){
				if($key > 0 && $product[0]!==NULL){
					$ins[$key]['product_code'] = $product[0];
					$ins[$key]['product_name_en'] = $product[1];
					$ins[$key]['product_description_en'] = $product[2];
					$ins[$key]['product_price'] = $product[3];

					$checkProduct[$key] = $this->db->select('id')
						->where('product_code', $product[0])
						->get('products_table')->row_array();
					
					if(!empty($checkProduct[$key])){
						$this->db->update('products_table', $ins[$key], array('product_code' => $product[0]));
					}else{
						$this->db->insert('products_table', $ins[$key]);
					}
	
					
				}
			}
			$this->db->trans_commit();
		  }
		  catch (Exception $e) {
			$this->db->trans_rollback();
			echo $e->getMessage();
			die();
		  }

		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('process', 'success');
		}else{
			$this->session->set_flashdata('process', 'fail');
		}
		
		redirect(PRODUCT_LIST);
	   
	}
	
}
