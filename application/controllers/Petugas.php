<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
	public function login()
	{
        check_already_login();
		$this->load->view('templates/header');
		$this->load->view('pages/petugas/login');
		$this->load->view('templates/footer');
	}
    public function dashboard(){
        check_not_login();
        $this->load->view('templates/header');
		$this->load->view('pages/petugas/dashboard');
		$this->load->view('templates/footer');
    }
}
