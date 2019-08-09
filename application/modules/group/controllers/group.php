<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends MY_Controller {

	public function index(){
		$data['group_list'] = $this->MY_Model->getRows('user_group','','','','','','','array');
		$data['modules_list'] = $this->MY_Model->getRows('tbl_modules','','','','','','line_id','array');
		$this->load_page('index',$data);
	}

	public function addgroup(){
		$group_id = $this->MY_Model->insert('user_group',array('group_name' => $this->input->post('group_name'),'group_status' => 1));
		foreach($_POST['rights'] as $key => $value){
			$value['group_id'] = $group_id;
			$value['module_id'] = $key;
			$this->MY_Model->insert('tbl_sub_modules',$value);
		}
	}

	public function getGroupRights(){
		$id = $this->input->post('group_id');
	}
}
