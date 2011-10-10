<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 09, 2011 by Damiano Venturin @ Squadra Informatica

class Ex_Rest_Client2 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//load the rest client
		$this->load->spark('restclient/2.0.0');
		
		//set the server page in the client properties
		$rest_server = site_url('ex_rest_server');
		$this->rest->initialize(array('server' => $rest_server));
	}

	public function index()
	{
		$data = array();
		
		//Perform the Rest request
		$data['chart'] = $this->rest->get('chart'); //notice that we are not calling chart_get but only chart
		
		//Load the view and pass the data
		$this->load->view('ex_rest_client2',$data);
	}
}

/* End of ex_rest_client2.php */