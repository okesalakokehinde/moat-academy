<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('model_contact');
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                //$config['overwrite']           = TRUE;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                    //dump the data to get the file name
                    //var_dump($data['upload_data']['file_name']);
                    //get the file name
                    $photograph= $data['upload_data']['file_name'];
                    
                    //call a model                        
                        $this->model_contact->add_student_profile($photograph);  
                    $this->display_data();
                    
                    
                    

                        //$this->load->view('upload_success', $data);
                }
        }
    public function display_data(){
        //call a model to get all records in student_profile table
        $data['result']=$this->model_contact->get_student_profile();
        //var_dump($result);
        //display results in a table
        $this->load->view('display',$data);
        
    }
}
?>