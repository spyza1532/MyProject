<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function view()
	{
		$this->load->view('test');
	}
}
