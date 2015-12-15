<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends Base_Controller  {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model', 'admin');
	}

	public function login_check()
	{
		$params['username']  = $this->input->post('username');
		$params['password']  = md5($this->input->post('password'));
		$this->admin->admin_login($data,$params);
		if (isset($data['results'])) {
			$this->session->set_userdata('user_token',$data['results']->token);
			$this->session->set_userdata('admin_name',$data['results']->username);
			redirect('home', 'refresh');
		}else{
			$this->load->view('v_login', $data);
		}
	}

	public function out($value='')
	{
		$array_items = array('token', 'admin_name');
		$this->session->unset_userdata($array_items);
		redirect(base_url(), 'refresh');
	}



	public function welcome()
	{
		$this->is_login();
		$data=array();
		Template::set_view('v_welcome');
        Template::set($data);
        Template::render('login');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */