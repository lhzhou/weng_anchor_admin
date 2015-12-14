<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends Base_Controller  {


	
		



	public function index()
	{
		
		$this->load->view('user_reg_view');

	}


	public function create($value='')
	{


		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name']  = TRUE;
 	 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('upload'))
		{
			$error = array('error' => $this->upload->display_errors());

			var_dump($error);
		} else {
   			$data =  $this->upload->data();
			
			$params['upload'] = new CURLFile($data['full_path']);


			$results = doCurl(BASE_API_URL.'shop/users/create',$params , 'POST');

			var_dump($results);exit();
		} 

	}

	public function find(){
	
		$name = $this->input->get('name');
		// $this->db->escape();
		//echo $name;
		$sql = "SELECT * FROM temp WHERE name = '$name'";
		$query = $this->db->query($sql)->result();

		var_dump($query);

		exit();
		$rs = $this->db->get_where('temp', array('name' =>$name))->row();
		// echo $this->db->last_query();exit();
		echo $rs->name;exit();
		echo json_encode($rs);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */