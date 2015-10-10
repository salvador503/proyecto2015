<?php

class Controller_departamento extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_departamento');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_departamento', 'id departamento:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_pais', 'id pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('nombre_departamento', 'nombre departamento:', 'required|xss_clean|max_length[25]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('departamento_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_departamento' => set_value('id_departamento'),
					       	'id_pais' => set_value('id_pais'),
					       	'nombre_departamento' => set_value('nombre_departamento')
						);
					
			// run insert model to write data to db
		
			if ($this->model_departamento->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_departamento/success');   // or whatever logic needs to occur
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