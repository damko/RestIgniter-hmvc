<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 09, 2011 by Damiano Venturin @ Squadra Informatica

class Ex_Rest_Client extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//load the rest client
		$this->load->spark('restclient/2.0.0');		
		
		//set the server page in the rest client properties
		$this->rest->initialize(array('server' => 'http://twitter.com/'));
	}

	public function index()
	{
		$data = array();
		
		//Perform the Rest request
		$data['tweets'] = $this->rest->get('statuses/user_timeline/damko.xml');
		
		//Load the view and pass the data
		$this->load->view('ex_rest_client',$data);
	}
}

/* End of ex_rest_client.php */