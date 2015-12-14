<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends Base_Controller  {
	public function __construct()
	{
		parent::__construct();
		$this->is_login();
		$this->load->model('shop_account_model', 'account');
		$this->load->model('category_model', 'category');
		$this->load->model('product_package_unit_model','package_unit');
		$this->load->model('product_unit_model','product_unit');


	}


	public function create($value='')
	{
		$data = array();
		$this->category->get_product_category($data);
		$this->package_unit->get_product_package_unit($data);
		$this->product_unit->get_product_unit($data);
		$data['category_json'] =  json_encode($data['results']);
		$data['product_pack_unit_json'] = json_encode($data['product_package_unit_list']);
		$data['product_unit_json'] = json_encode($data['product_unit_list']);

		Assets::add_js('js/lib/category.js');

        Template::set_view('v_shop_account_create');
        Template::set($data);
        Template::render();
	}

	public function save($value='')
	{
		$params['username']  = $this->input->post('name');
		$params['password']  = md5($this->input->post('password'));
		$params['tel']  = $this->input->post('tel');
		$params['phone']  = $this->input->post('phone');
		$params['address']  = $this->input->post('address');
		$params['contacts']  = $this->input->post('contacts');

		
		
		$params['start_date']  = $this->input->post('start_date');
		$params['end_date']  = $this->input->post('end_date');
		$params['coordinates']  = $this->input->post('coordinates');
		$params['content']  = $this->input->post('content',true);
		if (isset($_FILES['photo']) && $_FILES['photo']['error'] != 4){
			$photo_name = $this->uploads('photo');
			$params['photo'] = new CURLFile($photo_name);

		}

		$results = $this->account->create_shop($params);
		var_dump($results);
		
	}

	public function picker($value='')
	{
		$this->load->view('v_picker'); 
	}


	public function uploads($value='')
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name']  = TRUE;
 	 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload($value))
		{
			$error = array('error' => $this->upload->display_errors());

			var_dump($error);
		} else {
   			$data =  $this->upload->data();
			
			return $data['full_path'];

		} 
	}

}