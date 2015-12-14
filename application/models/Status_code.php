<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status_Code extends CI_Model {

	const SUCCESS = 200;
	const FAILURE = 400;


	const ADMIN_LOGIN_SUCCESS = 6000;
	const ADMIN_LOGIN_FAILURE = 6001;

	const GET_CATEGORY_SUCCESS = 6010;
	const GET_CATEGORY_FAILURE = 6011;

	const GET_CATEGORY_CREATE_SUCCESS = 6013;
	const GET_CATEGORY_CREATE_FAILURE = 6014;



}

/* End of file Status_code.php */
/* Location: ./application/models/Status_code.php */

?>