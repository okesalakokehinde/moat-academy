<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	//guestbook creation
    
    public function index()
	{
		//$this->load->view('guestbook');
        
        //form validation code copied from user_guide and edit
        $this->load->library('form_validation');
        $this->form_validation->set_rules('lastname','firstname','required|trim');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('guestbook');
                }
                else
                {
                        //call the model to insert into the DB
                    $this->model_contact->add_contact();
                }
	}
}
