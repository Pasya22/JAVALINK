<?php
defined('BASEPATH') or exit('No direct script access allowed');

class guest extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('session');
        $this->load->helper('url', 'form', 'date');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('Login')) {
            if ($this->session->userdata('role_id') == 2) {

                $data['title'] = 'Home';
                $this->load->view('guest/guest', $data);
            }
        } else {
            redirect(site_url('Login'));
        }
    }

    public function Logout()
    {
        $this->session->unset_userdata('Login');
        $this->session->unset_userdata('role_id');
    }

}
