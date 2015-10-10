<?php

class Controller_municipio extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_municipio');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_municipio', 'id municipio:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_departamento', 'id departamento:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('nombre', 'nombre:', 'required|xss_clean|max_length[25]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('municipio_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_municipio' => set_value('id_municipio'),
					       	'id_departamento' => set_value('id_departamento'),
					       	'nombre' => set_value('nombre')
						);
					
			// run insert model to write data to db
		
			if ($this->model_municipio->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_municipio/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>