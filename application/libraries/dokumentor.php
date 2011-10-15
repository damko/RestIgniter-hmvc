<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Aug 26, 2011 by Damiano Venturin @ Squadra Informatica



class Dokumentor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// Load the rest client
		$this->load->spark('restclient/2.0.0');
		$this->rest->initialize(array('server' => $this->config->item('rest_server')));
	}

	private function __print($data)
	{
		echo '<pre>';
		print_r($data);
		echo '</pre>';
	}

	/**
	 *
	 * Removes from the given string everything different from characters and numbers
	 * @param string $string
	 */
	private function __cleanString($string)
	{
		if(empty($string) or is_array($string))
		{
			return false;
		} else {
			return preg_replace("[^A-Za-z0-9]", "", $string);
		}
	}

	/**
	 *
	 * Produces a human readable list of the public methods available via REST
	 */
	public function displayAPI(array $objects = null) 
	{
		if(is_null($objects) || !is_array($objects)) return false; //$objects = array('chartex/0.0.1');
		
		//get methods list
		foreach ($objects as $key => $object) {
			
			//let's check if the required object is an exposed object
			//NO! because when a spark contains more than one object we don't know how many objects are exposed
// 			$exposedObjects = $this->config->item('exposeObj');
// 			if(!$exposedObjects) return false;
//			if(!isset($exposedObjects[$object])) break; 
			
			$tmp_methods = $this->rest->get('methods', array('object' => $object,
											 			 'format' => 'json'));			
			$methods->functions = $tmp_methods->functions;
			$methods->$object->functions = $tmp_methods->$object->functions;
		}
		
		//show the docstring for the method
		if(count($methods->functions)>0)
		{
			$methods_html = '<h3>Built-in methods:</h3>';
			$methods_html .= 'These are the methods hardcoded in RestIgniter API';
			$methods_html .= '<dl>';
			foreach ( $methods->functions as  $method) {
				if(empty($method->docstring))
				{
					$methods_html .= '<dt>'.$method->function.'</dt><dd>No description available</dd>';
				} else {
					$methods_html .= '<dt>'.$method->function.'</dt><dd>'.$method->docstring.'</dd>';
				}
			}
			$methods_html .= '</dl>';
			$methods_html .= '<h3>Public methods for the exposed objects:</h3>';
			foreach ($objects as $object) {
				$methods_html .= $this->objectHTML($methods,$object);
			}
		}
		return $methods_html;
	}
	
	private function objectHTML($methods,$object)
	{
			$methods_html = '<h4>Object: '.$object.'</h4>';
			$methods_html .= '<dl>';
			if(is_object($methods->$object))
			{
				foreach ( $methods->$object->functions as  $method) {
					if(empty($method->docstring))
					{
						$methods_html .= '<dt>'.$method->function.'</dt><dd>No description available</dd>';
					} else {
						$methods_html .= '<dt>'.$method->function.'</dt><dd>'.$method->docstring.'</dd>';
					}
				}
			}
			$methods_html .= '</dl>';	
			return $methods_html;	
	}
}

/* End of rest_client.php */