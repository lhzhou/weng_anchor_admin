<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_Package_Unit_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_product_package_unit(&$data)
	{
		
		$results = doCurl(BASE_API_URL.'shop/product_package_unit');

		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::SUCCESS) {
			$data['product_package_unit_list'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

	public function create_product_package_unit(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'create/shop/product_package_unit',$params,'POST');
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

	public function update_product_package_unit(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'update/shop/product_package_unit',$params,'POST');
		// var_dump($results);exit();
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_CREATE_SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}
	public function delete_product_package_unit(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'delete/shop/product_package_unit',$params,'POST');
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

/* End of file PackUnit_model.php */
/* Location: ./application/models/PackUnit_model.php */ ?>