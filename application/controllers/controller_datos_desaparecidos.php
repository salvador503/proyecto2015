<?php

class Controller_datos_desaparecido extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('model_datos_desaparecido');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_datos', 'id datos:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_evento', 'id evento:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('lugar_de_desaparicion', 'lugar de desaparicion:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('dia_desaparicion', 'dia desaparicion:', 'required|xss_clean|max_length[2]');			
		$this->form_validation->set_rules('mes_desaparicion', 'mes desaparicion:', 'required|xss_clean|max_length[2]');			
		$this->form_validation->set_rules('ano_de_desaparicion', 'año de desaparicion:', 'required|xss_clean|max_length[2]');			
		$this->form_validation->set_rules('observaciones_sobre_datos', 'observaciones sobre datos:', 'xss_clean|max_length[150]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('datos_desaparecido_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_datos' => set_value('id_datos'),
					       	'id_evento' => set_value('id_evento'),
					       	'lugar_de_desaparicion' => set_value('lugar_de_desaparicion'),
					       	'dia_desaparicion' => set_value('dia_desaparicion'),
					       	'mes_desaparicion' => set_value('mes_desaparicion'),
					       	'ano_de_desaparicion' => set_value('ano_de_desaparicion'),
					       	'observaciones_sobre_datos' => set_value('observaciones_sobre_datos')
						);
					
			// run insert model to write data to db
		
			if ($this->model_datos_desaparecido->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_datos_desaparecido/success');   // or whatever logic needs to occur
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