<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends Api_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function admin_login($params='')
	{
		$response = $this->post(BASE_API_URL.'account/account/admin_login' , $params);
		return $response;
		
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */
?>