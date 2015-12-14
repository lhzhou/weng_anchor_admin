<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attributes extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('dashboard' ,  'english');
        $data['lang']['nav_user'] =  $this->lang->line('nav_user');
        Assets::add_js('product/create_product.js');
		Assets::add_css('product/product.css');

	}
	
	public function index($value='')
	{


		$data = array();
		
		$data['category'] =  array(
			array('id' => 1 ,  'name' => '维生素'),
			array('id' => 2 ,  'name' => '保健品'),

			);
		$data['product'] = array(
			array('id' => 1 , 'type'=> '保健品规格' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 2 , 'type'=> '保健品用途' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 3 , 'type'=> '奶粉分段' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '2' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 4 , 'type'=> '面膜产品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),

		);
		
		Template::set_view('v_attributes_list');
        Template::set($data);
        Template::render();
	}

	public function create($value='')
	{
		if ($this->input->is_ajax_request()) {
            $this->ajaxConfirmAddAttributes();
            return;
        }

		$data = array();
		
		$data['type'] = array(
			array('id' => 1 ,  'name' => '营养品'),
			array('id' => 2 ,  'name' => '孕妇产品'),
			array('id' => 3 ,  'name' => '婴儿产品'),
			);
		
		Template::set_view('v_attributes_add');
        Template::set($data);
        Template::render();
	}

	public function ajaxConfirmAddAttributes($value='')
	{
		$post = $this->input->post();

		echo json_encode($post);
	}

	// private function ajaxConfirmAddAttributes(){

	// 	$out['method'] = 'redirect';
	// 	$out['message'] = '添加成功';
	// 	$out['url'] = site_url('category/type/index');
	// 	$this->output->set_content_type('application/json')->set_output(json_encode($out));
	// }
}
