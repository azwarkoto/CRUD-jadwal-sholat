<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array('baseurl' =>base_url() );
		$this->load->view('home',$data);
	}
}
