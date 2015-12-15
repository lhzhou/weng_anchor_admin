<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('dashboard' ,  'english');
        $data['lang']['nav_user'] =  $this->lang->line('nav_user');
        // var_dump($data['lang']);exit();
		// var_dump($CI);exit();
	}

	public function index()
	{
		$this->is_login();
		$data = array();
		// $config['language']	= 'english';

		// echo $this->session->userdata('token');exit();
		// var_dump(get_cookie('name'));exit();
		Template::set_view('v_dashboard');
        Template::set($data);
        Template::render();
	}

	public function login($value='')
	{
		if ($this->input->is_ajax_request()) {
            $this->ajaxLogin();
            return;
        }

		$data = array();

		Template::set_view('v_login');
        Template::set($data);
        Template::render('login');
	}

	public function ajaxLogin(){
		
		$lang = $this->input->post('lang');
		$params['username'] = $this->input->post('username');
		$params['password'] = $this->input->post('password');
		$params['lang'] = $lang;
		$params['login_type'] = 3;

		$this->load->model('admin/admin_model', 'am');
		$response = $this->am->admin_login($params);
		// $response = $this->post(BASE_API_URL.'account/account/admin_login' , $params);
        
        $output = $response->getOutput();
      
        if ($response->isOK()) {
            $results = $output->results;
            $this->session->set_userdata('token' , $results['token']);
            $this->session->set_userdata('admin_name' , $results['name'] );
            set_cookie('name' , $lang);
            $out['method'] = 'redirect';
            $out['message'] = $output->message;
            $out['url'] = site_url('dashboard');
            $this->output->set_content_type('application/json')->set_output(json_encode($out));
            return;
        }else{

			$results = $output->results;
            $out['method'] = 'alert';
            $out['message'] = $output->message;
            $this->output->set_content_type('application/json')->set_output(json_encode($out));
            return;
        }
	}

	

}