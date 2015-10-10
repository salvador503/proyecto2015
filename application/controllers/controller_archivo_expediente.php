<?php

class Controller_archivo_expediente extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_archivo_expediente');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_archivo_expediente', 'id archivo expediente:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_expediente', 'id expediente:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('ruta', 'ruta:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('tipo', 'tipo:', 'required|xss_clean|max_length[15]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('archivo_expediente_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_archivo_expediente' => set_value('id_archivo_expediente'),
					       	'id_expediente' => set_value('id_expediente'),
					       	'ruta' => set_value('ruta'),
					       	'tipo' => set_value('tipo')
						);
					
			// run insert model to write data to db
		
			if ($this->model_archivo_expediente->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_archivo_expediente/success');   // or whatever logic needs to occur
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