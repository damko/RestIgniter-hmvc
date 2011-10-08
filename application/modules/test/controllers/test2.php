<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Sep 19, 2011 by Damiano Venturin @ squadrainformatica.com

class Test2 extends MX_Controller {
	/**
	 * 
	 * A test to see if spark works
	 */
    public function __construct(){	   
    	//works if loaded here. 
    	//$this->load->helper('url');
        //$this->load->spark('curl/1.2.0');		
    
        parent::__construct();      
        $this->load->helper('url');
    	
        //works if loaded here. At the beginning it wasn't working here.
    	//$this->load->helper('url');
        //$this->load->spark('curl/1.2.0');		  
    }
    	
	public function index()
	{	
    	//works if loaded here At. the beginning it wasn't working here.
        $this->load->spark('curl/1.2.0');		
        
		$data = array();
        $data['dump'] = $this->curl->simple_get('http://www.rfc-editor.org/rfc/rfc1558.txt');	
        
        //let's try to load another spark
        $this->load->spark('example-spark/1.0.0');
        $this->example_spark->printHello();

        //let's try to load another spark        
		// Load the rest client spark
		$this->load->spark('restclient/2.0.0');
		$this->load->library('rest');
		$this->rest->initialize(array('server' => 'http://twitter.com/'));
		$username = 'damko';
		$data['tweets'] = $this->rest->get('statuses/user_timeline/'.$username.'.xml');  
       
        $this->load->view('test2',$data); //view in application/modules/test/views => works!
		//$this->load->view('test3',$data); //view in application/views => works!
	}
	
	public function firelog()
	{
		$this->load->spark( 'fire_log/0.7.0');
		$this->fire_log->get_file('log-'.date("Y-m-d").'.php');			
	}
}

/* End of test2.php */