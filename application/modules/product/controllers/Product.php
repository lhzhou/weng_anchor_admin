<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('dashboard' ,  'english');
        $data['lang']['nav_user'] =  $this->lang->line('nav_user');
        // var_dump($data['lang']);exit();
		// var_dump($CI);exit();
	}

	public function index($value='')
	{
		$data['category'] =  array(
			array('id' => 1 ,  'name' => '维生素'),
			array('id' => 2 ,  'name' => '保健品'),

			);

		$data['type'] = array(
			
			array('id' => 1 ,  'name' => '营养品'),
			array('id' => 2 ,  'name' => '孕妇产品'),
			array('id' => 3 ,  'name' => '婴儿产品'),
			);

		$data['product'] = array(
			array('id' => 1 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 2 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 3 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '2' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 4 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 5 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '2' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 6 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 7 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
			array('id' => 8 , 'type'=> '营养品' , 'category' => '维生素', 'name' => '维生素C' , 'last' => 99 , 'status' => '1' , 'created_at' => '2015-12-22 12:00:00'),
		);


		Template::set_view('v_porduct_list');
        Template::set($data);
        Template::render();
	}

	public function create($value='')
	{
		$data = array();
		$data['color'] = array(
			array('name' => '红色' , 'color' => 'red'),
			array('name' => '蓝色' , 'color' => 'blue'),
			array('name' => '黑色' , 'color' => 'black'),
		);
		$data['size'] = array(
			array('name' => 'L' , 'value' => 'L'),
			array('name' => 'LX' , 'value' => 'LX'),
			array('name' => 'LL' , 'value' => 'LL'),
		);
		Assets::add_js('product/create_product.js');
		Assets::add_css('product/product.css');

		Template::set_view('v_product_create');
        Template::set($data);
        Template::render();
	}

	public function ajax_form_upload_color_pic()
	{
		$color = $this->input->post('color');
		if (empty($color)) {
			$this->output->set_content_type('application/json')->set_output(json_encode(array()));
			return;
		}else{
			$data['color'] = $color;
			$html = $this->load->view('block/v_upload_color_pic',$data,true);
			$this->output->set_content_type('application/json')->set_output(json_encode($html));
			return;
		}
		
	}

	public function ajax_form_set_color_and_size_unit($value='')
	{
		$color       = $this->input->post('color');
		$size        = $this->input->post('size');
		

		if (empty($color) && empty($size)) {
			$this->output->set_content_type('application/json')->set_output(json_encode(array()));
			return;
		}else{
			$new_array = array();
			$i = 0;
			foreach ($color as $key => $c_value) {
				foreach ($size as $key => $s_value) {
					$new_array[$i]['color'] = $c_value['name'];
					$new_array[$i]['size'] = $s_value['name'];
					
					$i++;
				}
			}
			$data['color_size'] = $new_array;
			$html = $this->load->view('block/v_set_color_and_size_unit',$data,true);
			$this->output->set_content_type('application/json')->set_output(json_encode($html));
			return;
		}

	}

}