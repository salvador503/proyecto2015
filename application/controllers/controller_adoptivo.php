<?php

class Controller_adoptivo extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_adoptivo');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_familiar', 'id familiar:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_adoptivo', 'id adoptivo:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_desaparecido', 'id desaparecido:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_pais', 'id pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('relacion', 'relacion:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('telefono', 'telefono:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('correo', 'correo:', 'required|valid_email|max_length[25]');			
		$this->form_validation->set_rules('domicilio', 'domicilio:', 'required|max_length[150]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('tipo_de_documento', 'tipo de documento:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('numero_de_documento', 'numero de documento:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('nacionalidad', 'nacionalidad:', 'required|xss_clean|max_length[15]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('adoptivo_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_familiar' => set_value('id_familiar'),
					       	'id_adoptivo' => set_value('id_adoptivo'),
					       	'id_desaparecido' => set_value('id_desaparecido'),
					       	'id_pais' => set_value('id_pais'),
					       	'relacion' => set_value('relacion'),
					       	'telefono' => set_value('telefono'),
					       	'correo' => set_value('correo'),
					       	'domicilio' => set_value('domicilio'),
					       	'sexo' => set_value('sexo'),
					       	'tipo_de_documento' => set_value('tipo_de_documento'),
					       	'numero_de_documento' => set_value('numero_de_documento'),
					       	'nacionalidad' => set_value('nacionalidad')
						);
					
			// run insert model to write data to db
		
			if ($this->model_adoptivo->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_adoptivo/success');   // or whatever logic needs to occur
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