<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->userAccessCheckUp();
        $this->load->library('form_validation');
    }
    
   public function index() {
	  
        $result = '';
		$success ='';
		$error ='';
		$html = $this->load->view('admin/dashboard', $result, TRUE);
        $this->templet('home', $html, '', $error, $success);

    }
	public function addNewCollege() {
        $result = '';
		$success ='';
		$error ='';
		$html = $this->load->view('admin/addNewCollege', $result, TRUE);
        $this->templet('home', $html, '', $error, $success);

    }	
	/**
			Add College 
	*/
	public function addCollege() {
        $result["success_message"]='';
		 $result["error_message"]='';
		
		  if ($this->form_validation->run('addCollege') == TRUE) {
			       $param = array(
                "college_name" => $this->input->post('college_name'),
                'priniciple_name' => $this->input->post('priniciple_name'),
                "college_email" => $this->input->post('college_email'),
                "address" => $this->input->post('address'),
                "country" =>  $this->input->post('country'),               
                "created_date" => date('Y/m/d H:i:s'),
                'status' => 1
            );
			 $this->BaseModel->inserData("colleges", $param);
			 $result["success_message"]="Well done! Successfully added new college.";
		  } else{
			   $result["error_message"]='Not Valid';
		  }
		$html = $this->load->view('admin/addNewCollege', $result, TRUE);		  
        $this->templet('home', $html, '', $result["error_message"], $result["success_message"]);
		  

    }
		public function collegelist() {
        $result = '';
		$success ='';
		$error ='';
		 $result['colleges'] = $this->BaseModel->featchData("colleges", '*', '', '', '', '*');
		$html = $this->load->view('admin/collegelist', $result, TRUE);
        $this->templet('home', $html, '', $error, $success);

    }
   protected function userAccessCheckUp() {
        if (($this->session->userdata('uWebStatus') == NULL)) {
            redirect('User');
        }
    }    
}