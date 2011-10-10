<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Oct 09, 2011 by Damiano Venturin @ Squadra Informatica

// TODO can't I avoid this ???
require APPPATH.'/libraries/dokumentor.php';

class Ex_Expose extends Dokumentor {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
 		$data['methods_list'] = $this->displayAPI(array('chartex'));
 		$this->load->view('ex_expose',$data);
	}
}

/* End of ex_expose.php */