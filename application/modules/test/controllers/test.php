<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Sep 19, 2011 by Damiano Venturin @ squadrainformatica.com

class Test extends CI_Controller {
	/**
	 * 
	 * A test to see if spark works
	 */
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->spark('curl/1.2.0');
    }
    	
	public function index()
	{
		$data = array();
        $data['dump'] = $this->curl->simple_get('http://www.rfc-editor.org/rfc/rfc1558.txt');	
        
		$this->load->view('test',$data);
		//$this->load->view('test3',$data); //this view in application/views works too
	}
}

/* End of test.php */