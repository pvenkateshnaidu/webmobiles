<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('AutModel');
    }

    function passwordFormateChecker($pass) {
        $pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
        if (!preg_match($pattern, $pass)) {
            $this->form_validation->set_message('password', 'The {field} field must have 1 UpperCase, LowerCase, Numeric or SpecialChar and Minimum 8 Chars Length.');
            return FALSE;
        }
        return TRUE;
    }

    public function index() {
        $data = $this->adminTemplet('');
        if ($this->form_validation->run('signIn') == FALSE) {
            $this->parser->parse('pages/login', $data);
        } else {
            if ($this->AutModel->checkUserCredentials($this->input->post())) {
                redirect('dashboard/index');
            } else {
                $data['error'] = '<p class="alert alert-danger">Your email/user id or password is incorrect.</p>';
                $this->parser->parse('pages/login', $data);
            }
        }
    }


    function forgotPassword() {
        $data = $this->templet('');
        $this->parser->parse('pages/register', $data);
    }

    
}
