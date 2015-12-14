<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends Base_Controller  {
	public function __construct()
	{
		parent::__construct();
		$this->is_login();
	}


	public function index($value='')
	{
		$data = array();
        Template::set_view('v_index');
        Template::set($data);
        Template::render();
	}



}