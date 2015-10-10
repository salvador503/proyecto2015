<?php

class Conntroller_desaparecido extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_desaparecido');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_desaparecido', 'id desaparecido:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_datos', 'id datos:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_pais', 'id pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('foto', 'foto:', 'required|xss_clean|max_length[50]');			
		$this->form_validation->set_rules('fecha_de_nacimiento', 'fecha de nacimiento:', 'required|xss_clean');			
		$this->form_validation->set_rules('lugar_de_nacimiento', 'lugar de nacimiento:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('estado_civil', 'estado civil:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('caracteristicas_personales', 'caracteristicas personales:', 'required|xss_clean|max_length[150]');			
		$this->form_validation->set_rules('domicilio', 'domicilio', 'xss_clean|max_length[50]');			
		$this->form_validation->set_rules('observaciones_datos', 'observaciones datos:', 'required|max_length[150]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('desaparecido_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_desaparecido' => set_value('id_desaparecido'),
					       	'id_datos' => set_value('id_datos'),
					       	'id_pais' => set_value('id_pais'),
					       	'sexo' => set_value('sexo'),
					       	'foto' => set_value('foto'),
					       	'fecha_de_nacimiento' => set_value('fecha_de_nacimiento'),
					       	'lugar_de_nacimiento' => set_value('lugar_de_nacimiento'),
					       	'estado_civil' => set_value('estado_civil'),
					       	'caracteristicas_personales' => set_value('caracteristicas_personales'),
					       	'domicilio' => set_value('domicilio'),
					       	'observaciones_datos' => set_value('observaciones_datos')
						);
					
			// run insert model to write data to db
		
			if ($this->model_desaparecido->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('conntroller_desaparecido/success');   // or whatever logic needs to occur
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