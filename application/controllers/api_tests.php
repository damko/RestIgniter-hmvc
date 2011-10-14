<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 14, 2011 by Damiano Venturin @ Squadra Informatica
// Php unit tests

class Api_Tests extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//load the embedded unit_test library
		$this->load->library('unit_test');
		
/* 		$this->unit->set_test_items(array('test_name', 'result'));
		$str = '
		<table border="0" cellpadding="4" cellspacing="1">
		    {rows}
		        <tr>
		        <td>{item}</td>
		        <td>{result}</td>
		        </tr>
		    {/rows}
		</table>';
		
		$this->unit->set_template($str); */
		
		//load the rest client
		$this->load->spark('restclient/2.0.0');		
		
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
	
	private function arrayReturn($method, $rest_return)
	{
		echo $this->unit->run($rest_return, 'is_array', $method.'- array in return ?');
	}	
	
	private function anyError($input)
	{
		isset($input['error']) ? true : false;
	}
	
	private function checkNoRestError($method, $rest_return)
	{
		$expected_result = false;
		$test = $this->anyError($rest_return);
		echo $this->unit->run($test, $expected_result, $method.'- any REST error ?');
	}
	
	private function check200($method, $rest_return)
	{
		$expected_result = '200';
		$test = (array) $rest_return['status'];
		$test = $test['status_code'];
		echo $this->unit->run($test, $expected_result, $method.'- status code == 200 ?');
	}
	
	private function printReturn($rest_return)
	{
		echo '<h3>REST return</h3>';
		echo '<pre style="font-size: 9px; background-color: #e8e8e8;">';
		print_r($rest_return);
		echo '</pre>';
	}
}

/* End of api_tests.php */