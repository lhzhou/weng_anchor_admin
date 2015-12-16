<?php (defined('BASEPATH')) OR exit('No direct script access allowed');


class Base_Controller extends CI_Controller {


    public function __construct() {
        parent::__construct();
    }

    
    public function is_login()
    {
        $user_token = $this->session->userdata('token');
    	if (empty($user_token)) {
			redirect('login', 'refresh');
			return;
		}
    }

    public function get_token()
    {
    	return $this->session->userdata('token');
    }

    public function upload($value='')
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['encrypt_name']  = TRUE;
     
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload($value))
        {
            return false;
            // $error = array('error' => $this->upload->display_errors());

        } else {
            $data =  $this->upload->data();
            return $data['full_path'];
            
        } 
    }
}

/* End of file Base_Controller.php */
/* Location: ./application/core/Base_Controller.php */