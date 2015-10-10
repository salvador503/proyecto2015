<?php

class Rol extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_rol','modelo');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_rol', 'Id Rol:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('tipo_rol', 'Tipo Rol', 'required|xss_clean|max_length[15]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE)
		{
			//$this->load->view('pages/view_rol');
			$this->load->view('pages/rol02');
		}
		else 		{
		 	
			
			$form_data = array(
					       	'id_rol' => set_value('id_rol'),
					       	'tipo_rol' => set_value('tipo_rol')
						);
					
			
		
			if ($this->model_rol->SaveForm($form_data) == TRUE) 			{
				redirect('controller_rol/success');  			}
			else
			{
			echo 'A ocurrido un error';
			
			}
		}
	}
	function success()
	{
			echo 'guardado exitosa mente';
	}

	public function insertar(){
		// $this->load->model('model_rol','modelo');
		
		$data = array(
				       	'id_rol' => set_value('id_rol'),
				       	'tipo_rol' => set_value('tipo_rol')
					);

		$resultado = $this->modelo->insercion($data);
		$this->success();
	}
}
?>