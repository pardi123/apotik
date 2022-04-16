<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function renderAdmin($content,$data = null)
	{
		

			$data['script'] =$this->load->view("template/script.php",$data,TRUE);
			$data['style'] =$this->load->view("template/style.php",$data,TRUE);
			$data['meta'] =$this->load->view("template/meta.php",$data,TRUE);
			$data['navbar'] =$this->load->view("template/navbar.php",$data,TRUE);
			$data['sidebar'] =$this->load->view("template/sidebar.php",$data,TRUE);
			$data['meta'] =$this->load->view("template/meta.php",$data,TRUE);
			//content
			$data['content'] = $this->load->view($content,$data,TRUE);
			//load base
			$this->load->view("base/main",$data);
	
	}
}
