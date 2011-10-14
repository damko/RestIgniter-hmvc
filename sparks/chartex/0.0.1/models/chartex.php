<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 9, 2011 by Damiano Venturin @ squadrainformatica.com

/**
 * 
 * This is an example about exposing an object via REST through RestIgniter
 * This object is a simple chart with some method and properties.
 * All the public methods and properties will be exposed via REST
 * @author damko
 *
 */
class Chartex extends CI_Model
{
	protected $name; //this won't be exposed
	public $chart_items = array(); //this will be exposed
		
	public function __construct(){
		parent::__construct();
		$this->name = "Chartex";
		$this->chart_items = $this->config->item('chart_items');	
	}

	/**
	*
	* adds one or more items to the chart via GET
	* @return array
	*/
	public function add_get(array $items)
	{
		unset($items['chartex']);
		foreach ($items as $key => $value) {
			$this->chart_items[$key] = $value;
		}
		return $this->read_get();
	}
	
	/**
	 * 
	 * returns chart items
	 * @return array
	 */
	public function read_get()
	{
		return $this->chart_items;				
	}

	/**
	*
	* returns chart name (which is not public)
	* @return array
	*/
	public function readChartName_get()
	{
		return $this->name;
	}
	
	/**
	*
	* removes one or more chart items
	* @return array
	*/
	public function remove_get(array $items)
	{
		unset($items['chartex']);
		foreach ($items as $key => $value) {
			unset($this->chart_items[$key]);
		}		
		return $this->read_get();
	}
	
	/**
	*
	* removes all chart items
	* @return array
	*/
	public function empty_chart_get()
	{
		return $this->delete();	
	}
	
	/**
	*
	* removes all chart items
	* @return array
	*/	
	private function delete()
	{
		$this->chart_items = array('');
		return $this->read_get();
	}

}

/* End of chartex.php */