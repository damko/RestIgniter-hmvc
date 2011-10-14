<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 14, 2011 by Damiano Venturin @ Squadra Informatica
// Php unit tests

class Test_Controller extends CI_Controller {

	public function __construct()
	{
		//load the embedded unit_test library
		//$CI =& get_instance();
		
		parent::__construct();
		$this->load->library('unit_test');
		
		//load the rest client
		$this->load->spark('restclient/2.0.0');		
	}
	
	protected function arrayReturn($method, $rest_return, $note = null)
	{
		echo $this->unit->run($rest_return, 'is_array', $method.'- array in return ?', $note);
	}
	
	protected function anyError($rest_return)
	{
		$test = (array) $rest_return['status'];
		return isset($test['error_message']) ? true : false;
	}
	
	protected function checkNoRestError($method, $rest_return, $note = null)
	{
		$expected_result = false;
		$test = $this->anyError($rest_return);
		echo $this->unit->run($test, $expected_result, $method.'- any REST error ?', $null);
	}
	
	protected function check200($method, $rest_return, $note = null)
	{
		$expected_result = '200';
		$test = (array) $rest_return['status'];
		$test = $test['status_code'];
		echo $this->unit->run($test, $expected_result, $method.'- status code == 200 ?', $note);
	}
	
	protected function printReturn($rest_return)
	{
		echo '<h3>REST return</h3>';
		echo '<pre style="font-size: 9px; background-color: #e8e8e8;">';
		print_r($rest_return);
		echo '</pre>';
	}
	
}