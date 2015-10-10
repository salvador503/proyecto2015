<?php

class Observacion extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->model('model_observacion');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_observacion', 'id observacion:', 'required|max_length[3]');			
		$this->form_validation->set_rules('id_expediente', 'id expediente:', 'required|max_length[3]');			
		$this->form_validation->set_rules('fecha', 'fecha:', 'required');			
		$this->form_validation->set_rules('descripcionde_observacion', 'descripciónde observacion:', 'required|max_length[300]');			
		$this->form_validation->set_rules('prioridad', 'prioridad', 'required|max_length[15]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) 		{
			$this->load->view('pages/view_observacion');
			//$this->load->view('pages/observaciones02');
		}
		else 		{
		 	
			
			$form_data = array(
					       	'id_observacion' => null,
					       	'id_expediente' => set_value('id_expediente'),
					       	'fecha' => set_value('fecha'),
					       	'descripcionde_observacion' => set_value('descripcionde_observacion'),
					       	'prioridad' => set_value('prioridad')
						);
					
			
		
			if ($this->model_observacion->SaveForm($form_data) == TRUE) 			{
				redirect('controller_observacion/success');   			}
			else
			{
			echo 'A ocurrido un error';
						}
		}
	}
	function success()
	{
			echo 'insercion exitosa';
	}

	public function insertar(){
		$this->load->model('model_observacion','modelo');

		$data = array(
					       	'id' => '',
					       	'expediente' => $this->input->post('id_expediente'),
					       	'fecha' => date('d-m-Y'),
					       	'descripcion' => $this->input->post('descripcionde_observacion'),
					       	'prioridad' => $this->input->post('prioridad'),
					       	'opcion' => 1);

		// echo 'data '.implode(",",$data);

		$resultado = $this->modelo->insercion($data);

		$this->success();
	}
}
?>