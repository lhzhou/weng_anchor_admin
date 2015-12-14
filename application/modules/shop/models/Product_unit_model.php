<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_unit_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_product_unit(&$data)
	{

		$results = doCurl(BASE_API_URL.'shop/product_unit');
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);
		if (isset($json->status_code) && $json->status_code == Status_Code::SUCCESS) {
			$data['product_unit_list'] = $json->results;

		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

	public function create_product_unit(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'create/shop/product_unit',$params,'POST');
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

	public function update_product_unit(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'update/shop/product_unit',$params,'POST');
		// var_dump($results);exit();
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_CREATE_SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}
	public function delete_product_unit(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'delete/shop/product_unit',$params,'POST');
		// var_dump($results);exit();
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_CREATE_SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

}

/* End of file Product_unit_model.php */
/* Location: ./application/models/Product_unit_model.php */ ?>