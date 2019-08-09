<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends MY_Controller {

	public function index(){
		$limit = array(1,0);
		$data['modules_list'] = $this->MY_Model->getRows('tbl_modules','','','','','','line_id','array');
		$data['module_data'] = $this->MY_Model->getRows('tbl_modules','line_id','','','',$limit,'module_id DESC','row');
		$this->load_page('index',$data);
	}

	public function add_module(){
		$data = array();
		$module_name = $this->input->post('module_name');
		$module_icon = $this->input->post('module_icon');
		$module_url = $this->input->post('module_url');
		$has_parent = $this->input->post('has_parent');
		$parent_module = $this->input->post('parent_module');
		$line_id = $this->input->post('line_id');
		if($has_parent == 1){
			$data = array(
				'module_name' => $module_name,
				'module_icon' => $module_icon,
				'module_url' => $module_url,
				'has_sub' => $has_parent,
				'parent_module' => $parent_module,
				'line_id' => $line_id
			);
		} else {
			$data = array(
				'module_name' => $module_name,
				'module_icon' => $module_icon,
				'module_url' => $module_url,
				'has_sub' => $has_parent,
				'line_id' => $line_id
			);
		}
		if($this->MY_Model->insert('tbl_modules',$data)){
			echo 1;
		}
	}
}
