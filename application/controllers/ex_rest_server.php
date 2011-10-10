<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 09, 2011 by Damiano Venturin @ Squadra Informatica

require APPPATH.'/libraries/REST_Controller.php';

class Ex_Rest_Server extends REST_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function chart_get()
	{
		$response = array(
							'banana' => '5',
							'milk' => '3',
							'potatoes' => '10',
						);
		$this->response($response, '200'); // 200 being the HTTP response code		
	}
}

/* End of ex_rest_server.php */