<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 14, 2011 by Damiano Venturin @ Squadra Informatica
// Php unit tests

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/test_controller.php';

class Api_Tests extends Test_Controller {

	public function __construct()
	{	
		parent::__construct();
		
		/*  
	 	//set up a new template for the tests output 		
		$this->unit->set_test_items(array('test_name', 'result'));
		$str = '
		<table border="0" cellpadding="4" cellspacing="1">
		{rows}
		<tr>
		<td>{item}</td>
		<td>{result}</td>
		</tr>
		{/rows}
		</table>';
		
		$this->unit->set_template($str); 
		*/
				
		//set the server page
		$this->rest->initialize(array('server' => $this->config->item('rest_server').'/exposeObj/chartex/'));
	}

	public function index()
	{
		//########################################
		// READ
		//########################################
		$method = 'read';
		
		//check to get an array as a return
		$rest_return = $this->rest->get($method, null, 'serialize');
		$this->arrayReturn($method, $rest_return);

		//check no REST error in return
		$this->checkNoRestError($method, $rest_return);

		//check status code == 200
		$this->check200($method, $rest_return);
		
		//check that data content is valid
		$expected_result = array('banana' => '2', 'potato' => '3');
		$test = (array) $rest_return['data'];
		echo $this->unit->run($test, $expected_result, $method.'- valid data in return ?');
				
		$this->printReturn($rest_return);

		//########################################
		// ADD
		//########################################
		$method = 'add/watermelon/5';
		
		//check to get an array as a return
		$rest_return = $this->rest->get($method, $post, 'serialize');
		$this->arrayReturn($method, $rest_return);

		//check no REST error in return
		$this->checkNoRestError($method, $rest_return);
		
		//check status code == 200
		$this->check200($method, $rest_return);
		
		$this->printReturn($rest_return);
	}		
}

/* End of api_tests.php */