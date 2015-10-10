<?php

class Controller_biologico extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_biologico');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_familiar', 'id familiar:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_biologico', 'id biologico:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_desaparecido', 'id desaparecido:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_pais', 'id pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('relacion', 'relacion:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('telefono', 'telefono:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('correo', 'correo:', 'required|xss_clean|valid_email|max_length[25]');			
		$this->form_validation->set_rules('domicilio', 'domicilio:', 'required|xss_clean|max_length[50]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('tipo_de_documento', 'tipo de documento:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('numero_de_documento', 'numero de documento:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('originario_de', 'originario de:', 'required|xss_clean|max_length[25]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('biologico_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_familiar' => set_value('id_familiar'),
					       	'id_biologico' => set_value('id_biologico'),
					       	'id_desaparecido' => set_value('id_desaparecido'),
					       	'id_pais' => set_value('id_pais'),
					       	'relacion' => set_value('relacion'),
					       	'telefono' => set_value('telefono'),
					       	'correo' => set_value('correo'),
					       	'domicilio' => set_value('domicilio'),
					       	'sexo' => set_value('sexo'),
					       	'tipo_de_documento' => set_value('tipo_de_documento'),
					       	'numero_de_documento' => set_value('numero_de_documento'),
					       	'originario_de' => set_value('originario_de')
						);
					
			// run insert model to write data to db
		
			if ($this->model_biologico->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_biologico/success');   // or whatever logic needs to occur
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