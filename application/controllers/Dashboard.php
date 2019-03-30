<?php
class Dashboard extends CI_Controller
{
    public $userid;
    public function __construct() {
        parent::__construct();
       
        if(!$this->session->has_userdata("adminlogintrue"))
        {
            redirect(base_url()."login");
        }
        $this->load->database();
        $this->load->model("dashboard_model");
        $this->userid=$this->session->userdata("adminlogintrue");
    }
    public function index()
    {
        $data['user']=$this->dashboard_model->getLoggedInUserData($this->userid);
        $this->load->view("header",$data);
        $this->load->view("dashboard_view");
        $this->load->view("footer");
    }
    public function logout()
    {
        $this->session->unset_userdata("adminlogintrue");
        redirect(base_url()."login");
    }
    
}

