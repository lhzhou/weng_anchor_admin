<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function admin_login(&$data,$params='')
	{
		$results = doCurl(BASE_API_URL.'admin_login',$params,'POST');
		$json = json_decode(isset($results['output']) ? $results['output'] : NULL);

		if (isset($json->status_code) && $json->status_code == Status_Code::ADMIN_LOGIN_SUCCESS) {
			$data['results'] = $json->results;

		}else{
			// $this->session->set_flashdata('error_message', $json->message);
			$data['error_message'] = $json->message;
		}
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */
?>