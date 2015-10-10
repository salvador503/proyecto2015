<?php

class ControllerUsuario extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('ModelUSuario');
	}	
	function index()
	{			
		$this->form_validation->set_rules('nombre', 'Nombre:', 'required|xss_clean|max_length[50]');			
		$this->form_validation->set_rules('apelllido', 'Apelllido:', 'required|xss_clean|max_length[50]');			
		$this->form_validation->set_rules('telefono', 'Telefono:', '');			
		$this->form_validation->set_rules('e_mail', 'E-mail', 'required|xss_clean|valid_email');			
		$this->form_validation->set_rules('direccion', 'Direccion', 'required|xss_clean|max_length[150]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE)		{
			$this->load->view('usuario_view');
		}
		else logic
		{
		 				
			$form_data = array(
					       	'nombre' => set_value('nombre'),
					       	'apelllido' => set_value('apelllido'),
					       	'telefono' => set_value('telefono'),
					       	'e_mail' => set_value('e_mail'),
					       	'direccion' => set_value('direccion')
						);
					
					
			if ($this->ModelUSuario->SaveForm($form_data) == TRUE) 
			{
				redirect('controllerUsuario/success');   
			}
			else
			{
			echo 'ERROR. ';
						}
		}
	}
	function success()
	{
			echo 'exito al guardar';
	}
}
?>