<?php

class Testigo_caso extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->model('model_testigo_caso');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_testigo', 'id testigo', 'required|max_length[3]');			
		$this->form_validation->set_rules('nombre', 'nombre:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido', 'apellido:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[1]');			
		$this->form_validation->set_rules('documento_de_identidad', 'documento de identidad', 'required|xss_clean|is_numeric|max_length[9]');			
		$this->form_validation->set_rules('originario_de', 'originario de:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('telefono', 'telefono:', 'required|xss_clean|max_length[11]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('templates/head');
			$this->load->view('templates/menu_investigador');
			$this->load->view('pages/view_testigo_caso');
			$this->load->view('templates/foot');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_testigo' => set_value('id_testigo'),
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'sexo' => set_value('sexo'),
					       	'documento_de_identidad' => set_value('documento_de_identidad'),
					       	'originario_de' => set_value('originario_de'),
					       	'telefono' => set_value('telefono')
						);
					
			// run insert model to write data to db
		
			if ($this->model_testigo_caso->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controler_testigo_caso/success');   // or whatever logic needs to occur
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
		$this->load->model("model_testigo_caso","modelo");
		$data = array(
				       	'id_testigo' => '',
				       	'nombre' => md5($this->input->post('nombre')),
				       	'apellido' => md5($this->input->post('apellido')),
				       	'sexo' => $this->input->post('sexo'),
				       	'documento_de_identidad' => md5($this->input->post('documento_de_identidad')),
				       	'originario_de' => $this->input->post('originario_de'),
				       	'telefono' => md5($this->input->post('telefono')),
				       	'opcion'=>1
					);
		$restultado = $this->modelo->insercion($data);
	}
}
?>