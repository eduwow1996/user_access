<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function __construct(){
		$route = $this->router->fetch_class();
		if($route == 'login'){
			if($this->session->has_userdata('logged_in')){
				redirect(base_url());
			}
		} else {
			if(!$this->session->has_userdata('logged_in')){
				redirect(base_url('login'));
			}
		}
	}

	public function load_page($page, $data = array()){
		$group_id = $this->session->userdata('user_group');
		$module = $this->router->fetch_class();
		$where = array(
			'tbl_sub_modules.group_id' => $group_id,
			'tbl_sub_modules.action_view' => 1
		);
		$join = array(
			'tbl_sub_modules' => 'tbl_modules.module_id = tbl_sub_modules.module_id'
		);
		$data['navigation'] = $this->MY_Model->getRows('tbl_modules','tbl_modules.module_name,tbl_modules.module_icon,,tbl_modules.module_url,tbl_modules.has_sub',$where,$join,'','','tbl_modules.line_id ASC','array');

		$where_check = array(
			'tbl_sub_modules.group_id' => $group_id,
			'tbl_modules.module_url' => $module
		);
		$join_check = array(
			'tbl_sub_modules' => 'tbl_modules.module_id = tbl_sub_modules.module_id'
		);
		$data['check_user_access'] = $this->MY_Model->getRows('tbl_modules','tbl_modules.module_name,tbl_modules.module_icon,,tbl_modules.module_url,tbl_modules.has_sub,tbl_sub_modules.*',$where_check,$join_check,'','','','row');
		if($data['check_user_access']->action_view == 1){
	          $this->load->view('includes/head',$data);
	          $this->load->view($page,$data);
	          $this->load->view('includes/footer',$data);
		} else {
			$this->load->view('errors/html/restricted');
		}
     }

	public function login_page($page, $data = array()){
          $this->load->view('includes/login_head',$data);
          $this->load->view($page,$data);
          $this->load->view('includes/login_footer',$data);
     }
}
