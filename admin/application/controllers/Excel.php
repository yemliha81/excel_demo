<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;



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

		$this->load->view('excel/excel_upload_view');
	   
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

		debug($spreadsheet->getActiveSheet()->toArray());
	   
	}
	
}
