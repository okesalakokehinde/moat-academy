<?php
    Class Model_contact extends CI_Model{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function add_student_profile($photograph){
            $data = array(
                'lastname' => $this->input->post('lastname'),
                'firstname' => $this->input->post('firstname'),
                'photograph' => "uploads/".$photograph
            );
            //write to database
            $this->db->insert('student_profile', $data);
        }
        //to get all records in the table student_profile
        public function get_student_profile(){
            $query=$this->db->get('student_profile');
            return $query->result_array();
        }
    }
?>