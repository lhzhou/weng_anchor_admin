<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends Base_Controller  {
	public function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('category_model', 'category');
		$this->load->model('product_package_unit_model','package_unit');
		$this->load->model('product_unit_model','product_unit');

	}

	public function index($value='')
	{
		$data = array();
		$this->category->get_product_category($data);
		$this->package_unit->get_product_package_unit($data);
		$this->product_unit->get_product_unit($data);
		$data['category_json'] =  json_encode($data['results']);
		$data['product_pack_unit_json'] = json_encode($data['product_package_unit_list']);
		$data['product_unit_json'] = json_encode($data['product_unit_list']);
		Assets::add_js('js/lib/category.js');
        Template::set_view('product/v_category');
        Template::set($data);
        Template::render();
	}

	public function category_action($value='')
	{
		$action = $this->input->post('action');
		$id = $this->input->post('id');
		$pid = $this->input->post('pid');
		$name = $this->input->post('name');

		switch ($action) {
			case 'add':
				$params['pid'] = $pid;
				$params['name'] = $name;
				// var_dump($params);exit();
				$this->category->create_category($data,$params);

				break;
			case 'update':
				$params['id'] = $id;
				$params['name'] = $name;
				$this->category->update_category($data,$params);
				break;
			case 'delete':
					$params['id'] = $id;
					$this->category->delete_category($data,$params);

				break;
			
			default:
				redirect(base_url('shop/product/category'), 'refresh');
				break;
		}
		redirect(base_url('shop/product/category'), 'refresh');
	}


	public function pack_unit_action($value='')
	{

		$action = $this->input->post('action');
		$id = $this->input->post('id');
		$name = $this->input->post('name');

		switch ($action) {
			case 'add':
				$params['name'] = $name;
				// var_dump($params);exit();
				$this->package_unit->create_product_package_unit($data,$params);

				break;
			case 'update':
				$params['id'] = $id;
				$params['name'] = $name;
				$this->package_unit->update_product_package_unit($data,$params);
				break;
			case 'delete':
					$params['id'] = $id;
					$this->package_unit->delete_product_package_unit($data,$params);

				break;
			
			default:
				redirect(base_url('shop/product/category'), 'refresh');
				break;
		}
		redirect(base_url('shop/product/category'), 'refresh');	
	}

	public function product_unit_action($value='')
	{

		$action = $this->input->post('action');
		$id = $this->input->post('id');
		$name = $this->input->post('name');

		switch ($action) {
			case 'add':
				$params['name'] = $name;
				$this->product_unit->create_product_unit($data,$params);

				break;
			case 'update':
				$params['id'] = $id;
				$params['name'] = $name;
				$this->product_unit->update_product_unit($data,$params);
				break;
			case 'delete':
					$params['id'] = $id;
					$this->product_unit->delete_product_unit($data,$params);

				break;
			
			default:
				redirect(base_url('shop/product/category'), 'refresh');
				break;
		}
		redirect(base_url('shop/product/category'), 'refresh');	
	}


	

}