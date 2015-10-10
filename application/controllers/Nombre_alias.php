<?php

class Nombre_alias extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->model('model_nombre_alias');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_nombre', 'id nombre:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_desaparecido', 'id desaparecido:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_familiar', 'id familiar:', 'required|xss_clean');			
		$this->form_validation->set_rules('nombre', 'nombre:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido', 'apellido:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('tipo', 'tipo:', 'required|xss_clean|max_length[10]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('pages/view_nombre_alias');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_nombre' => set_value('id_nombre'),
					       	'id_desaparecido' => set_value('id_desaparecido'),
					       	'id_familiar' => set_value('id_familiar'),
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'tipo' => set_value('tipo')
						);
					
			// run insert model to write data to db
		
			if ($this->model_nombre_alias->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_nombre_alias/success');   // or whatever logic needs to occur
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
			$this->load->model('model_nombre_alias','modelo');

			$data = array(
					       	'id_nombre' => set_value('id_nombre'),
					       	'id_desaparecido' => set_value('id_desaparecido'),
					       	'id_familiar' => set_value('id_familiar'),
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'tipo' => set_value('tipo'),
					       	'opcion' => 1
						);
			
			$resultado = $this->modelo->insercion($data);
	}
}
?>