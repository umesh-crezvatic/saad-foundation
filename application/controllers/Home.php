<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
    {  
        parent::__construct();
        //$this->load->model('admin/Product_model', '', TRUE);
    }

	public function index()
	{
		$this->load->view("front/index");
	}
}
