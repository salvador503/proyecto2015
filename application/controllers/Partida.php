<?php

class Partida extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->model('model_partida');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_masivo', 'id masivo:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_partida', 'id partida:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_pais', 'id pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_institucion', 'id institución:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('expediente_masivo', 'expediente masivo', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('tipo_masivo', 'tipo masivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('nombre', 'nombre:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido', 'apellido:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[5]');			
		$this->form_validation->set_rules('fecha_de_emision', 'fecha de emision:', 'required|xss_clean');			
		$this->form_validation->set_rules('observacion_masivo', 'observacion masivo:', 'required|xss_clean|max_length[300]');			
		$this->form_validation->set_rules('ruta_masivo', 'ruta masivo:', 'required|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('nombre_de_adoptante', 'nombre de adoptante:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido_de_adoptante', 'apellido de adoptante:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('numero_de_partida', 'numero de partida:', 'required|xss_clean|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('numero_de_folio', 'numero de folio:', 'required|xss_clean|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('numero_de_libro', 'numero de libro:', 'required|xss_clean|is_numeric|max_length[3]');			
		$this->form_validation->set_rules('fecha_de_nacimiento', 'fecha de nacimiento:', 'required|xss_clean');			
		$this->form_validation->set_rules('expediente_id_masivo', 'expediente id masivo:', '');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			//$this->load->view('pages/view_partida');
			$this->load->view('pages/view_partida');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_masivo' => set_value('id_masivo'),
					       	'id_partida' => set_value('id_partida'),
					       	'id_pais' => set_value('id_pais'),
					       	'id_institucion' => set_value('id_institucion'),
					       	'expediente_masivo' => set_value('expediente_masivo'),
					       	'tipo_masivo' => set_value('tipo_masivo'),
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'sexo' => set_value('sexo'),
					       	'fecha_de_emision' => set_value('fecha_de_emision'),
					       	'observacion_masivo' => set_value('observacion_masivo'),
					       	'ruta_masivo' => set_value('ruta_masivo'),
					       	'nombre_de_adoptante' => set_value('nombre_de_adoptante'),
					       	'apellido_de_adoptante' => set_value('apellido_de_adoptante'),
					       	'numero_de_partida' => set_value('numero_de_partida'),
					       	'numero_de_folio' => set_value('numero_de_folio'),
					       	'numero_de_libro' => set_value('numero_de_libro'),
					       	'fecha_de_nacimiento' => set_value('fecha_de_nacimiento'),
					       	'expediente_id_masivo' => set_value('expediente_id_masivo')
						);
					
			// run insert model to write data to db
		
			if ($this->model_partida->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_partida/success');   // or whatever logic needs to occur
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
		$this->load->model('model_partida','modelo');

		$data = array(
						// expediente masivo
						'codigo_masivo' => $this->input->post('codigo_masivo'),
				       	'pais' => $this->input->post('pais'),
						'institucion' => $this->input->post('institucion'),
						'tipo_masivo' => 'partida',
				       	'nombre' => $this->input->post('nombre'),
				       	'apellido' => $this->input->post('apellido'),
				       	'sexo' => $this->input->post('sexo'),
						'fecha_de_emision' => $this->input->post('fecha_de_emision'),
				       	'observacion_masiva' => $this->input->post('observacion_masiva'),
				       	'ruta_masiva' => $this->input->post('ruta_masiva'),
				       	'nombre_adoptivo' => $this->input->post('nombre_adoptivo'),
				       	'apellido_adoptivo' => $this->input->post('apellido_adoptivo'),
				       	'n_partida'=> $this->input->post('numero_de_partida'),
				       	'n_folio'=> $this->input->post('numero_de_folio'),
				       	'n_libro'=> $this->input->post('numero_de_libro'),
				       	'fecha_partida'=> $this->input->post('fecha_partida'),
				       	'tipo_partida'=> $this->input->post('tipo_partida)'),
						'n_ficha_adopcion' => '',
				       	'fecha_de_ingreso' => '',
				       	'fecha_de_egreso' => '',
				       	'fecha_inscripcion' => '',
				       	'motivo_de_entrada' => '',
				       	'motivo_de_salida' => '',
				       	'fecha_adopcion' => '',
				       	'declaratoria_de_abandono' => '',
				       	'abogado' => '',
				       	'notario' => '',
				       	'apoderado_adoptante' => '',
				       	'juez' => '',
				       	'fecha_pronunciamiento' => '',
				       	'fecha_de_otorgamiento' => '',
				       	'jefe_de_registro_civil' => '',
				       	'alcalde' => ''				    
						);

		$resultado = $this->modelo->insercion($data);
	}
}
?>