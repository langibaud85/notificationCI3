<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_controller
{
	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('home');
	}

	//--------------------------------------------------------------------

}


?>
