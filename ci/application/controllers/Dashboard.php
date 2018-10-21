<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth');
        ($this->auth->is_user_logged_in() ? : redirect('/login'));
        $this->load->model('company');
        $this->load->model('user');
    }

    public function index() {
        $data['info'] = $this->company->get_company_profile($this->user->get_uid());
        $this->load->view('dashboard', $data);
    }

    public function basicinfo() {
        $data['info'] = $this->company->get_company_profile($this->user->get_uid());
        $this->load->view('basicinfo', $data);
    }

    public function businessactivity() {
        $data['info'] = $this->company->get_company_profile($this->user->get_uid());
        $this->load->view('businessactivity', $data);
    }
    public function areaofexpertise() {
        $data['info'] = $this->company->get_company_profile($this->user->get_uid());
        $this->load->view('areaofexpertise', $data);
    }

}
