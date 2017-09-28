<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	 public function __construct(){
            parent::__construct();
     }
    //guestbook creation
    
    public function index()
	{
		//$this->load->view('guestbook');
        //load the Header.php
        $this->load->view('viewHeader');
        
        //load the menu bar
        $this->load->view('viewMenu');
                
        //load the slider.php
        $this->load->view('viewSlider');
        
        //load the footer.php
        $this->load->view('viewFooter.php');
        
        
	}
}
