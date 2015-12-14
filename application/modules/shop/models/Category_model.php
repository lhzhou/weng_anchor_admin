<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_product_category(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'shop/product_category',$params,'POST');
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_SUCCESS) {
			$data['results'] = $json->results;

		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

	public function get_category_json(&$data,$params='')
	{
		// echo BASE_API_URL.'shop/category/all_category_json';exit();
		$results = doCurl(BASE_API_URL.'shop/category/all_category_',$params,'POST');
		// var_dump($results);exit();
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_SUCCESS) {
			$data['results'] = $json->results;

		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}


	public function create_category(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'shop/category/create_category',$params,'POST');
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_CREATE_SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

	public function update_category(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'shop/category/update_category',$params,'POST');
		// var_dump($results);exit();
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_CREATE_SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

	public function delete_category(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'shop/category/delete_category',$params,'POST');
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::GET_CATEGORY_CREATE_SUCCESS) {
			$data['results'] = $json->results;
		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}







}

/* End of file Shop_model.php */
/* Location: ./application/models/Shop_model.php */

?>