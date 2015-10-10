<?php

class Controller_usuario extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_usuario');
	}	
	function index()
	{			
		$this->form_validation->set_rules('codigo', 'codigo:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('id_bitacora', 'id bitacora:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_rol', 'id rol:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('contrasena', 'contraseña:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('nombre', 'nombre:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido', 'apellido:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('telefono', 'telefono:', 'required|xss_clean|is_numeric|max_length[15]');			
		$this->form_validation->set_rules('e_mail', 'e-mail:', 'required|xss_clean|valid_email|max_length[20]');			
		$this->form_validation->set_rules('direccion', 'dirección:', 'required|xss_clean|max_length[150]');			
		$this->form_validation->set_rules('proviene_de', 'proviene de:', 'required|xss_clean|max_length[25]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('usuario_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'codigo' => set_value('codigo'),
					       	'id_bitacora' => set_value('id_bitacora'),
					       	'id_rol' => set_value('id_rol'),
					       	'contrasena' => set_value('contrasena'),
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'telefono' => set_value('telefono'),
					       	'e_mail' => set_value('e_mail'),
					       	'direccion' => set_value('direccion'),
					       	'proviene_de' => set_value('proviene_de')
						);
					
			// run insert model to write data to db
		
			if ($this->model_usuario->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_usuario/success');   // or whatever logic needs to occur
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