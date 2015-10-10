<?php

class Expediente_masivo extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->model('model_expediente_masivo');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_masivo', 'id masivo:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_pais', 'id pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_institucion', 'id institucion:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('expediente_id_masivo', 'expediente id masivo:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_expediente', 'id expediente:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('tipo_masivo', 'tipo masivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('nombre', 'nombre:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido', 'apellido:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('fecha_de_emision', 'fecha de emision:', 'required|xss_clean');			
		$this->form_validation->set_rules('observacion_masiva', 'observacion masiva:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('ruta_masiva', 'ruta masiva:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('nombre_adoptivo', 'nombre adoptivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido_adoptivo', 'apellido adoptivo:', 'required|xss_clean|max_length[25]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			// $this->load->view('pages/view_expediente_masivo');
			$this->load->view('pages/expediente_masivo02');
		
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_masivo' => set_value('id_masivo'),
					       	'id_pais' => set_value('id_pais'),
					       	'id_institucion' => set_value('id_institucion'),
					       	'expediente_id_masivo' => set_value('expediente_id_masivo'),
					       	'id_expediente' => set_value('id_expediente'),
					       	'tipo_masivo' => set_value('tipo_masivo'),
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'sexo' => set_value('sexo'),
					       	'fecha_de_emision' => set_value('fecha_de_emision'),
					       	'observacion_masiva' => set_value('observacion_masiva'),
					       	'ruta_masiva' => set_value('ruta_masiva'),
					       	'nombre_adoptivo' => set_value('nombre_adoptivo'),
					       	'apellido_adoptivo' => set_value('apellido_adoptivo')
						);
					
			// run insert model to write data to db
		
			if ($this->model_expediente_masivo->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_expediente_masivo/success');   // or whatever logic needs to occur
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
		$this->load->model("model_expediente_masivo","modelo");
		$data = array(
				       	'id_masivo' => $this->input->post('id_masivo'),
				       	'id_pais' => $this->input->post('id_pais'),
				       	'id_institucion' => $this->input->post('id_institucion'),
				       	'expediente_id_masivo' => $this->input->post('expediente_id_masivo'),
				       	'id_expediente' => $this->input->post('id_expediente'),
				       	'tipo_masivo' => $this->input->post('tipo_masivo'),
				       	'nombre' => $this->input->post('nombre'),
				       	'apellido' => $this->input->post('apellido'),
				       	'sexo' => $this->input->post('sexo'),
				       	'fecha_de_emision' => $this->input->post('fecha_de_emision'),
				       	'observacion_masiva' => $this->input->post('observacion_masiva'),
				       	'ruta_masiva' => $this->input->post('ruta_masiva'),
				       	'nombre_adoptivo' => $this->input->post('nombre_adoptivo'),
				       	'apellido_adoptivo' => $this->input->post('apellido_adoptivo')
					);
		$resultado = $this->modelo->insercion($data);
	}
}
?>