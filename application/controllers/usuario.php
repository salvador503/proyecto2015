<?php

class usuario extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('modelo_usuario');
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
			$this->load->view('util/head2');
			$this->load->view('util/menu_digitador');
			//$this->load->view('util/titulo.php');
			$this->load->view('view_expediente');
			$this->load->view('util/foot2.php');
		}
		else
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
	
	public function insertar(){
			$this->load->model('model_usuario','modelo');

			$data = array(
				'id' => 1010,
				'nombreUser' => $this->input->post('nombre'),
				'apellidoUser' => $this->input->post('apellido'),
				'tel' => $this->input->post('telefono'),
				'mail' => $this->input->post('e_mail'),
				'dir' => $this->input->post('direccion'),
				'opcion' => 1);

			$resultado = $this->modelo->insercion($data);

			$this->comments();
		 }
}
?>