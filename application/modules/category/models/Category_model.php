<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_Model extends Api_Model {

	public function __construct()
	{
		parent::__construct();
	}



	public function get_category($pid=0)
	{
		$params['page'] = 1;
		$params['limit'] = 100;
		$params['parent_id'] = $pid;
		$response = $this->post(BASE_API_URL.'product_category/product_category/categoryList' , $params);
		// var_dump($response);exit();
		return $response;
	}
	
	public function get_category_detail($params='')
	{
		$response = $this->post(BASE_API_URL.'product_category/product_category/categoryDetail' , $params);
		return $response;

	}

}