<?php

class Test extends CI_Controller {


	public function view($page = 'index')
	{
  $data['title'] = ucfirst($page);

    $this->load->view('template/header', $data);
    $this->load->view('test/'.$page, $data);
    $this->load->view('template/footer', $data);


	}
}
