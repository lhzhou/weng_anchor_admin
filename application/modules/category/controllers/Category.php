<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('category_model', 'cm');
		Assets::add_js('lib/treeview.js');
        Assets::add_js('category/category.js');
        assets::add_css('category/category.css');
	}

	public function index()
	{
		$data = array();

		$category = $this->get_category();


		// var_dump($category);exit();
		foreach ($category as $key => $value) {
        	$category[$key] = $value;
        	$category_sub_noe = $this->get_category($value['id']);
        	$category[$key]['sub'] = $category_sub_noe;
        	foreach ($category_sub_noe as $key_1 => $value_1) {
			$category_sub_two = $this->get_category($value_1['id']);
        	$category[$key]['sub'][$key_1]['sub'] = $category_sub_two;
        	
        	}
        }
		
        $data['category'] = $category;
        // echo json_encode($category);exit();
		
		Template::set_view('v_category');
        Template::set($data);
        Template::render();
	}

	private function get_category($pid='')
	{
		$response = $this->cm->get_category($pid);
        $output = $response->getOutput();
		if ($response->isOK()) {
           return $output->results;
        }else{
        	return array();
            $this->session->set_flashdata('error_message', $message);
        }
	}

	public function edit_category($value='')
	{

		$id = $this->input->post('id');
		$params['id'] = $id;
		$params['lang'] = 1;
		$response = $this->cm->get_category_detail($params);
        $output = $response->getOutput();
		if ($response->isOK()) {
			$data =  $output->results;
			// var_dump($data['category'][0]);exit();
			// echo json_encode($data);exit();
			$html = $this->load->view('block/v_category_edit',$data,true);
			$this->output->set_content_type('application/json')->set_output(json_encode($html));

        }else{
        	return array();
            $this->session->set_flashdata('error_message', $message);
        }

	}

	public function update_category($value='')
	{
		$id        = $this->input->post('id');
		$sort      = $this->input->post('sort');
		$parent_id = $this->input->post('parent_id');
		$lang      = $this->input->post('lang');

		$lang_list = array();
		$i = 0;
		foreach ($lang as $key => $value) {
			$lang_list[$i]['lang'] = $key;
			$lang_list[$i]['name'] = $value['name'];
			$lang_list[$i]['desc'] = $value['desc'];
			$i++;
		}
		$params['id']        = $id;
		$params['name']      = $lang_list[0]['name'];
		$params['desc']      = $lang_list[0]['desc'];
		$params['sort']      = $sort;
		$params['parent_id'] = $parent_id;
		$params['lang_list'] = json_encode($lang_list);

		$response = $this->cm->update_category($params);
		$output = $response->getOutput();

		if ($response->isOK()) {
            $out['method'] = 'alert';
            $out['message'] = $output->message;
            $out['category_name'] = $lang_list[0]['name'];
            $this->output->set_content_type('application/json')->set_output(json_encode($out));
            return;
        }else{
            $out['method'] = 'alert';
            $out['message'] = $output->message;
            $this->output->set_content_type('application/json')->set_output(json_encode($out));
            return;
        }
	}

	public function create()
	{
		if ($this->input->is_ajax_request()) {
            $this->ajaxConfirmAddCategory();
            return;
        }

		$data = array();
		$data['category'] = $this->get_category();
		Template::set_view('v_category_add');
        Template::set($data);
        Template::render();
	}

	private function ajaxConfirmAddCategory(){


		$sort      = $this->input->post('sort');
		$parent_id = $this->input->post('parent_id');
		$root_category = $this->input->post('root_category');
		$lang      = $this->input->post('lang');

		$lang_list = array();
		$i = 0;
		foreach ($lang as $key => $value) {
			$lang_list[$i]['lang'] = $key;
			$lang_list[$i]['name'] = $value['name'];
			$lang_list[$i]['desc'] = $value['desc'];
			$i++;
		}

		if ($root_category == 0) {
			$parent_id = 0;
		}else{
			if (empty($parent_id)) {
				$parent_id = $root_category;
			}
		}
		$params['name']      = $lang_list[0]['name'];
		$params['desc']      = $lang_list[0]['desc'];
		$params['sort']      = $sort;
		$params['parent_id'] = $parent_id;
		$params['lang_list'] = json_encode($lang_list);

		$response = $this->cm->create_category($params);
		$output = $response->getOutput();

		if ($response->isOK()) {
            $out['method'] = 'alert';
            $out['message'] = $output->message;
            $out['category_name'] = $lang_list[0]['name'];
            $this->output->set_content_type('application/json')->set_output(json_encode($out));
            return;
        }else{
            $out['method'] = 'alert';
            $out['message'] = $output->message;
            $this->output->set_content_type('application/json')->set_output(json_encode($out));
            return;
        }

	}



	public function sub_category_select($id="")
	{
		$id = $this->input->post('id');
		$response = $this->cm->get_category($id);
        $output = $response->getOutput();
		if ($response->isOK()) {
			// var_dump($output->results);exit();
			$data['sub_category'] = $output->results;
			$html = $this->load->view('block/v_create_sub_category_select',$data,true);
			$this->output->set_content_type('application/json')->set_output(json_encode($html));
        }else{
        	$this->output->set_content_type('application/json')->set_output(json_encode(array()));
        }

	}



}