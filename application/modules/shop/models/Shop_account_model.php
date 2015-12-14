<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop_account_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function create_shop($params='')
	{
		$results = doCurl(BASE_API_URL.'create/shop/account',$params,'POST');
		var_dump($results);exit();
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