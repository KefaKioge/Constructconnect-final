<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_category extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_header');
        $this->load->model('admin/Model_portfolio_category');
    }

	public function index()
	{
		$header['setting'] = $this->Model_header->get_setting_data();

		$data['portfolio_category'] = $this->Model_portfolio_category->show();

		$this->load->view('admin/view_header',$header);
		$this->load->view('admin/view_portfolio_category',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$header['setting'] = $this->Model_header->get_setting_data();

		$data['error'] = '';
		$data['success'] = '';

		if(isset($_POST['form1'])) {

			$valid = 1;

			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $data['error'] = validation_errors();
            }

			if(PROJECT_MODE == 0) {
				$valid = 0;
				$data['error'] = PROJECT_NOTIFICATION;
			}

		    if($valid == 1) 
		    {
				
		        $form_data = array(
					'category_name'=> $_POST['category_name'],
					'status'       => $_POST['status']
	            );
	            $this->Model_portfolio_category->add($form_data);

		        $data['success'] = 'Portfolio category is added successfully!';
		    }

            $this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_portfolio_category_add',$data);
			$this->load->view('admin/view_footer');
            
        } else {
            
            $this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_portfolio_category_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no service in this id, then redirect
    	$tot = $this->Model_portfolio_category->portfolio_category_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/portfolio-category');
        	exit;
    	}
       	
       	$header['setting'] = $this->Model_header->get_setting_data();
		$data['error'] = '';
		$data['success'] = '';
		$error = '';


		if(isset($_POST['form1'])) 
		{

			$valid = 1;

			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $data['error'] = validation_errors();
            } else {

            	// Duplicate Category Checking
            	$data['portfolio_category'] = $this->Model_portfolio_category->getData($id);
            	$total = $this->Model_portfolio_category->duplicate_check($_POST['category_name'],$data['portfolio_category']['category_name']);				
		    	if($total) {
		    		$valid = 0;
		        	$data['error'] = 'Category name already exists';
		    	}
            }

			if(PROJECT_MODE == 0) {
				$valid = 0;
				$data['error'] = PROJECT_NOTIFICATION;
			}

		    if($valid == 1) 
		    {
		    	// Updating Data
	    		$form_data = array(
					'category_name'=> $_POST['category_name'],
					'status'       => $_POST['status']
	            );
	            $this->Model_portfolio_category->update($id,$form_data);
				
				$data['success'] = 'Portfolio Category is updated successfully';
		    }

		    $data['portfolio_category'] = $this->Model_portfolio_category->getData($id);
	       	$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_portfolio_category_edit',$data);
			$this->load->view('admin/view_footer');
           
		} else {
			$data['portfolio_category'] = $this->Model_portfolio_category->getData($id);
			$this->load->view('admin/view_header',$header);
			$this->load->view('admin/view_portfolio_category_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no portfolio category in this id, then redirect
    	$tot = $this->Model_portfolio_category->portfolio_category_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/portfolio-category');
        	exit;
    	}

		if(PROJECT_MODE == 0) {
			redirect(base_url().'admin/portfolio-category');
		}


    	$result = $this->Model_portfolio_category->getData1($id);
		foreach ($result as $row) {
			$result1 = $this->Model_portfolio_category->show_portfolio_by_id($row['id']);
			foreach ($result1 as $row1) {
				$photo = $row1['photo'];
				$banner = $row1['banner'];
			}
			if($photo!='') {
				unlink('./public/uploads/'.$photo);
			}
			if($banner!='') {
				unlink('./public/uploads/'.$banner);
			}
			$result1 = $this->Model_portfolio_category->show_portfolio_photo_by_portfolio_id($row['id']);
			foreach ($result1 as $row1) {
				$photo = $row1['photo'];
				unlink('./public/uploads/portfolio_photos/'.$photo);
			}

			$this->Model_portfolio_category->delete1($row['id']);
			$this->Model_portfolio_category->delete2($row['id']);
		}
        $this->Model_portfolio_category->delete($id);

        redirect(base_url().'admin/portfolio-category');
    }

}