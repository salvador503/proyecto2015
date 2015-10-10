<?php

class Institucion extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->model('model_institucion');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_institucion', 'id institucion:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('nombre_institucion', 'nombre institucion:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('tipo', 'tipo:', 'required|xss_clean');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('templates/head');
			$this->load->view('templates/menu_digitador');
			$this->load->view('pages/view_institucion');
			$this->load->view('templates/foot');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_institucion' => set_value('id_institucion'),
					       	'nombre_institucion' => set_value('nombre_institucion'),
					       	'tipo' => set_value('tipo')
						);
					
			// run insert model to write data to db
		
			if ($this->model_institucion->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_institucion/success');   // or whatever logic needs to occur
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
			$this->load->model('model_institucion','modelo');

			$data = array(
				'id' => '',
				'nombreIns' => $this->input->post('nombre_institucion'),
				'tipoIns' => $this->input->post('tipo'),
				'opcion' => 1);

			$resultado = $this->modelo->insercion($data);

			$this->comments();
		 }
}
?>