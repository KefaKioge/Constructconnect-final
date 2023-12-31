<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_header');
        $this->load->model('admin/Model_profile');
    }
	public function index()
	{
		$data['error'] = '';
		$data['success'] = '';

		$header['setting'] = $this->Model_header->get_setting_data();

		$this->load->view('admin/view_header',$header);
		$this->load->view('admin/view_profile',$data);
		$this->load->view('admin/view_footer');
		
	}
	public function update()
	{
		$data['error'] = '';
		$data['success'] = '';

		$header['setting'] = $this->Model_header->get_setting_data();

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $data['error'] = validation_errors();
            }

			if(PROJECT_MODE == 0) {
				$valid = 0;
				$data['error'] = PROJECT_NOTIFICATION;
			}

            if($valid == 1) {
	            $form_data = array(
					'full_name' => $_POST['full_name'],
					'email'     => $_POST['email'],
					'phone'     => $_POST['phone']
	            );
	        	$this->Model_profile->update($form_data);
	        	$data['success'] = 'Profile Information is updated successfully!';
	        	
	        	$this->session->set_userdata($form_data);
            }
		}

		if(isset($_POST['form2'])) {
			$valid = 1;
			$path = $_FILES['photo']['name'];
		    $path_tmp = $_FILES['photo']['tmp_name'];
		    if($path!='') {
		        $ext = pathinfo( $path, PATHINFO_EXTENSION );
		        $file_name = basename( $path, '.' . $ext );
		        $ext_check = $this->Model_header->extension_check_photo($ext);
		        if($ext_check == FALSE) {
		            $valid = 0;
		            $data['error'] = 'You must have to upload jpg, jpeg, gif or png file<br>';
		        }
		    } else {
		    	$valid = 0;
		        $data['error'] = 'You must have to select a photo<br>';
		    }

			if(PROJECT_MODE == 0) {
				$valid = 0;
				$data['error'] = PROJECT_NOTIFICATION;
			}

		    if($valid == 1) {
		    	// removing the existing photo
		    	unlink('./public/uploads/'.$this->session->userdata('photo'));

		    	// updating the data
		    	$final_name = 'user-'.$this->session->userdata('id').'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );
		    			        
				$form_data = array(
					'photo' => $final_name
	            );
	        	$this->Model_profile->update($form_data);
	        	$data['success'] = 'Photo is updated successfully!';

	        	$this->session->set_userdata($form_data);
		    }        	
		}

		if(isset($_POST['form3'])) {
			$valid = 1;

		    $this->form_validation->set_rules('password', 'Password', 'trim|required');
		    $this->form_validation->set_rules('re_password', 'Retype Password', 'trim|required|matches[password]');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $data['error'] = validation_errors();
            }

			if(PROJECT_MODE == 0) {
				$valid = 0;
				$data['error'] = PROJECT_NOTIFICATION;
			}

		    if($valid == 1) {

		    	$form_data = array(
					'password' => md5($_POST['password'])
	            );
	        	$this->Model_profile->update($form_data);
	        	$data['success'] = 'Password is updated successfully!';
	        	
	        	$this->session->set_userdata($form_data);
		    }
		}

		$header['setting'] = $this->Model_header->get_setting_data();

		$this->load->view('admin/view_header',$header);
		$this->load->view('admin/view_profile',$data);
		$this->load->view('admin/view_footer');
	}
	
}
