<?php

class Familiar_masivo extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->model('model_familiar_masivo');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_familiar', 'id familiar:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('numero_de_documento_familiar_masivo', 'numero de documento familiar masivo:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('parentesco_masivo', 'parentesco masivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('nombre_familiar_masivo', 'nombre familiar masivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido_familiar_masivo', 'apellido familiar masivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('tipo_de_documento_familiar_masivo', 'tipo de documento familiar masivo:', 'required|xss_clean|max_length[25]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('pages/view_familiar_masivo');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_familiar' => set_value('id_familiar'),
					       	'numero_de_documento_familiar_masivo' => set_value('numero_de_documento_familiar_masivo'),
					       	'parentesco_masivo' => set_value('parentesco_masivo'),
					       	'nombre_familiar_masivo' => set_value('nombre_familiar_masivo'),
					       	'apellido_familiar_masivo' => set_value('apellido_familiar_masivo'),
					       	'tipo_de_documento_familiar_masivo' => set_value('tipo_de_documento_familiar_masivo')
						);
					
			// run insert model to write data to db
		
			if ($this->model_familiar_masivo->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_familiar_masivo/success');   // or whatever logic needs to occur
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

	public function insertar(){
		$this->load->model('model_familiar_masivo','modelo');
		$data = array(
					       	'id_familiar' => $this->input->post('id_familiar'),
					       	'numero_de_documento_familiar_masivo' => $this->input->post('numero_de_documento_familiar_masivo'),
					       	'parentesco_masivo' => $this->input->post('parentesco_masivo'),
					       	'nombre_familiar_masivo' => $this->input->post('nombre_familiar_masivo'),
					       	'apellido_familiar_masivo' => $this->input->post('apellido_familiar_masivo'),
					       	'tipo_de_documento_familiar_masivo' => $this->input->post('tipo_de_documento_familiar_masivo'),
					       	'opcion' => 1
						);
		$resultado = $this->modelo->insercion($data);
	}
}
?>