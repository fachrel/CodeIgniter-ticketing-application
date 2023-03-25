<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function petugas()
	{
        $post = $this->input->post(NULL, TRUE);
        if (isset($post['submit'])){
            $this->load->model('petugas_model');
            $query = $this->petugas_model->login($post);
            if($query->num_rows() > 0){
                $row = $query->row();
                $params = array(
                    'user_id' => $row->id,
                    'level' => $row->id_level
                );
                $this->session->set_userdata($params);
                redirect('dashboard');
            } else {
                echo 'raiso lek';
            }
        } else {
            echo 'tidak ada session';   
        }
	}

    public function logout(){
        $params = array('user_id', 'level');
        $this->session->unset_userdata($params);
        redirect('login-petugas');
    }
}
