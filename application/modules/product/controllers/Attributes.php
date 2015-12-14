<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attributes extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('dashboard' ,  'english');
        $data['lang']['nav_user'] =  $this->lang->line('nav_user');
	}

	public function index($value='')
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
		
		Assets::add_js('product/create_product.js');
		Assets::add_css('product/product.css');
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
