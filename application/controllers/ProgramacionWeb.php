<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgramacionWeb extends CI_Controller {

	public function __construct(){
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');
        
	}

	public function index()
	{
        $data['title'] = "Web";

		$linkJsVista = base_url('assets/js/home.js');
		$footer = array(
            'scriptVista'=> '<script src="'.$linkJsVista.'"></script>',
			'centrado' =>'text-center'
        );

		$this->load->view('header', $data);
		$this->load->view('programacionWeb/index');
		$this->load->view('footer', $footer);
	}
}
