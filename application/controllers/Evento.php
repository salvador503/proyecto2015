<?php

class Evento extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$CI =&get_instance();
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_evento', 'id evento:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('dia_inicio', 'dia inicio:', 'required|xss_clean|max_length[5]');			
		$this->form_validation->set_rules('mes_inicio', 'mes inicio:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('ano_inicio', 'año inicio:', 'required|xss_clean|max_length[5]');			
		$this->form_validation->set_rules('dia_fin', 'dia fin:', 'max_length[5]');			
		$this->form_validation->set_rules('mes_fin', 'mes fin', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('ano_fin', 'año fin:', 'max_length[5]');			
		$this->form_validation->set_rules('descripcion_de_evento', 'descripcion de evento:', 'required|xss_clean|max_length[150]');			
		$this->form_validation->set_rules('lugar_de_evento', 'lugar de evento:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('unidad_responsable', 'unidad responsable:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('responsable_evento', 'responsable evento:', 'required|xss_clean|max_length[25]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('pages/view_evento');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_evento' => set_value('id_evento'),
					       	'dia_inicio' => set_value('dia_inicio'),
					       	'mes_inicio' => set_value('mes_inicio'),
					       	'ano_inicio' => set_value('ano_inicio'),
					       	'dia_fin' => set_value('dia_fin'),
					       	'mes_fin' => set_value('mes_fin'),
					       	'ano_fin' => set_value('ano_fin'),
					       	'descripcion_de_evento' => set_value('descripcion_de_evento'),
					       	'lugar_de_evento' => set_value('lugar_de_evento'),
					       	'unidad_responsable' => set_value('unidad_responsable'),
					       	'responsable_evento' => set_value('responsable_evento')
						);
					
			// run insert model to write data to db
		
			if ($this->model_evento->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_evento/success');   // or whatever logic needs to occur
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
		$this->load->model('model_evento','modelo');
		
		$data = array('id' => $this->input->post('id_evento'),
			       	'diaIni' => $this->input->post('dia_inicio'),
			       	'mesini' => $this->input->post('mes_inicio'),
			       	'anoini' => $this->input->post('ano_inicio'),
			       	'diafin' => $this->input->post('dia_fin'),
			       	'mesfin' => $this->input->post('mes_fin'),
			       	'anofin' => $this->input->post('ano_fin'),
			       	'descripcion' => $this->input->post('descripcion_de_evento'),
			       	'lugar' => $this->input->post('lugar_de_evento'),
			       	'unidad' => $this->input->post('unidad_responsable'),
			       	'responsable' => $this->input->post('responsable_evento'),
			       	'opcion' => 1);

			// echo 'data '.implode(",", $data);
			
			$resultado = $this->modelo->insercion($data);
			echo 'insertado';
			//redirect('controller_evento/success');
	}
		
}
?>