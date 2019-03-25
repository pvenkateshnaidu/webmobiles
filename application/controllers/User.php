<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();

        
        $this->load->helper('string');
        $this->load->library('form_validation');
    }

    public function changeAdminPassword() {
        error_reporting(E_ALL & ~E_NOTICE);
        $wherepara = array(
            "id" => $_POST['id']
        );
        $updatparam = array(
            "password" => crypt($_POST['password'])
        );
        $result = $this->BaseModel->updateData("users", $updatparam, $wherepara);
        if ($result) {
            echo "1";
        } else {
            echo '0';
        }
    }
  public function index() {  
       $data='';
        if (($this->session->userdata('uWebStatus') == true)) 
			 redirect('Dashboard/index');
        
        if ($this->form_validation->run('login') == FALSE) {
  
            $this->parser->parse('admin/login', $data);
        } else {
        
            $this->load->model('AutModel');        
           // var_dump($this->input->post()); ezit;
            if ($this->AutModel->checkUserCredentials($this->input->post())) {
              
                redirect('Dashboard/index');
                
            } else {
                
                $data['error'] = '<p class="text-danger"><i class="fa fa fa-exclamation-triangle"></i> Your email or password is incorrect.</p>';
                $this->parser->parse('admin/login', $data);
            }
        }
    }
     public function logOut() {
 
        if (((!empty($this->session->userdata('uWebStatus')))) && ($this->session->userdata('uWebStatus') == true)) {
            $param = array(
                'logout' => date('Y-m-d H:i:s')
           );
            $this->BaseModel->updateData('userlog', $param, 'userId:' . $this->session->userdata('uId') . ',sessionId:' . session_id());
               
            $this->session->sess_destroy();
            unset($_SESSION);
            redirect('User/index');
        } 
    }
   
   
  protected function userAccessCheckUp() {
        if (($this->session->userdata('uWebStatus') == NULL)) {
            redirect('User/check');
        }
    }



    

  

}
