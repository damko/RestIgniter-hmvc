<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Aug 26, 2011 by Damiano Venturin @ Squadra Informatica

// TODO can't I avoid this ???
require APPPATH.'/libraries/dokumentor.php';

class Home extends Dokumentor {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home-ri-hmvc');
	}

	public function documentation()
	{
 		//load the rest client
		$this->load->spark('restclient/2.0.0');
		
		//set the server page in the client properties
		$this->rest->initialize(array('server' => $this->config->item('rest_server')));

		//perform the request
		$methods_list['api'] = $this->rest->get('methods');
		
		$data['methods_list'] = methods_HTML($methods_list, 'api');
		
		$this->load->view('documentation',$data);	
	}	
}

/* End of restigniter.php */