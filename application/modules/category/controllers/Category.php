<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
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
			$html = $this->load->view('v_category_edit',$data,true);
			$this->output->set_content_type('application/json')->set_output(json_encode($html));

        }else{
        	return array();
            $this->session->set_flashdata('error_message', $message);
        }




			

	}

	public function add_category()
	{
		$data = array();
		Template::set_view('v_category_add');
        Template::set($data);
        Template::render();
	}




}