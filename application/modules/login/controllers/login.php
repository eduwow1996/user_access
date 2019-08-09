<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index(){
		$this->login_page('index');
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$checkUser = $this->MY_Model->getRows('tbl_users','*',$where,'','','','','row');
		if($checkUser){
			$this->set_session($checkUser);
			redirect(base_url('dashboard'));
		} else {
			$data['msg'] = 'Invalid Username or password';
			$this->login_page('index',$data);
		}
	}

	public function set_session($data){
		$session_data = array(
			'user_id' => $data->user_id,
			'name' => $data->name,
			'user_group' => $data->user_group,
			'logged_in' =>1
		);
		$this->session->set_userdata($session_data);
	}
}
