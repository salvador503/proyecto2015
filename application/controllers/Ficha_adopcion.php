<?php

class Ficha_adopcion extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		// $this->load->model('model_ficha_adopcion');
	}	
	function index()
	{			
		// expediente masivo
		$this->form_validation->set_rules('codigo_masivo', 'codigo_masivo:', 'required|xss_clean|max_length[3]');			
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
		// ficha externa
		$this->form_validation->set_rules('id_masivo', 'id masivo:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_ficha_adopcion', 'id ficha adopcion:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('pais', 'pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_institucion', 'id_institucion:', 'max_length[3]');			
		$this->form_validation->set_rules('id_expediente_masivo', 'id expediente masivo:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_expediente', 'id expediente:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('tipo_masivo', 'tipo masivo:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('nombre', 'nombre:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido', 'apellido:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('fecha_emision', 'fecha emision:', 'required|xss_clean');			
		$this->form_validation->set_rules('observacion_masiva', 'observacion masiva:', 'required|xss_clean|max_length[100]');			
		$this->form_validation->set_rules('ruta_masivo', 'ruta masivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('nombre_adoptivo', 'nombre adoptivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apellido_adoptivo', 'apellido adoptivo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('numero_de_ficha_de_adopcion', 'numero de ficha de adopcion:', 'required|xss_clean|max_length[6]');			
		$this->form_validation->set_rules('fecha_de_ingreso', 'fecha de ingreso:', 'required|xss_clean');			
		$this->form_validation->set_rules('fecha_de_egreso', 'fecha de egreso:', 'required|xss_clean');			
		$this->form_validation->set_rules('fecha_inscripcion', 'fecha inscripcion:', 'required|xss_clean');			
		$this->form_validation->set_rules('motivo_de_entrada', 'motivo de entrada:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('motivo_de_salida', 'motivo de salida:', 'required|xss_clean|max_length[20]');			
		$this->form_validation->set_rules('fecha_adopcion', 'fecha adopcion:', 'required|xss_clean');			
		$this->form_validation->set_rules('declaratoria_de_abandono', 'declaratoria de abandono:', 'xss_clean|max_length[100]');			
		$this->form_validation->set_rules('abogado', 'abogado:', 'xss_clean|max_length[25]');			
		$this->form_validation->set_rules('notario', 'notario:', 'xss_clean|max_length[25]');			
		$this->form_validation->set_rules('apoderado_adoptante', 'apoderado adoptante:', 'xss_clean|max_length[25]');			
		$this->form_validation->set_rules('juez', 'juez:', 'xss_clean|max_length[25]');			
		$this->form_validation->set_rules('fecha_pronunciamiento', 'fecha pronunciamiento', 'xss_clean');			
		$this->form_validation->set_rules('fecha_de_otorgamiento', 'fecha de otorgamiento:', 'xss_clean');			
		$this->form_validation->set_rules('fecha_de_registro_civil', 'fecha de registro civil:', 'xss_clean');			
		$this->form_validation->set_rules('alcalde', 'alcalde:', 'xss_clean');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('pages/view_ficha_adopcion');
			//$this->load->view('pages/ficha_adopcion02');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					   		'id_masivo' => set_value('id_masivo'),
					       	//'id_ficha_adopcion' => set_value('id_ficha_adopcion'),
					    	'pais' => set_value('pais'),
					       	'id_institucion' => set_value('id_institucion'),
					       	'id_expediente_masivo' => set_value('id_expediente_masivo'),
					       	'id_expediente' => set_value('id_expediente'),
					       	'tipo_masivo' => set_value('tipo_masivo'),
					       	'nombre' => set_value('nombre'),
					       	'apellido' => set_value('apellido'),
					       	'sexo' => set_value('sexo'),
					       	'fecha_emision' => set_value('fecha_emision'),
					       	'observacion_masiva' => set_value('observacion_masiva'),
					       	'ruta_masivo' => set_value('ruta_masivo'),
					       	'nombre_adoptivo' => set_value('nombre_adoptivo'),
					       	'apellido_adoptivo' => set_value('apellido_adoptivo'),
					       	'numero_de_ficha_de_adopcion' => set_value('numero_de_ficha_de_adopcion'),
					       	'fecha_de_ingreso' => set_value('fecha_de_ingreso'),
					       	'fecha_de_egreso' => set_value('fecha_de_egreso'),
					       	'fecha_inscripcion' => set_value('fecha_inscripcion'),
					       	'motivo_de_entrada' => set_value('motivo_de_entrada'),
					       	'motivo_de_salida' => set_value('motivo_de_salida'),
					       	'fecha_adopcion' => set_value('fecha_adopcion'),
					       	'declaratoria_de_abandono' => set_value('declaratoria_de_abandono'),
					       	'abogado' => set_value('abogado'),
					       	'notario' => set_value('notario'),
					       	'apoderado_adoptante' => set_value('apoderado_adoptante'),
					       	'juez' => set_value('juez'),
					       	'fecha_pronunciamiento' => set_value('fecha_pronunciamiento'),
					       	'fecha_de_otorgamiento' => set_value('fecha_de_otorgamiento'),
					       	'fecha_de_registro_civil' => set_value('fecha_de_registro_civil'),
					       	'alcalde' => set_value('alcalde')
						);
					
			// run insert model to write data to db
		
			if ($this->model_ficha_adopcion->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_ficha_adopcion/success');   // or whatever logic needs to occur
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
		$this->load->model('model_ficha_adopcion','modelo');

		$data = array(
						// expediente masivo
						'codigo_masivo' => $this->input->post('codigo_masivo'),
				       	'pais' => $this->input->post('pais'),
						'institucion' => $this->input->post('institucion'),
						'tipo_masivo' => 'ficha adopcion',
				       	'nombre' => $this->input->post('nombre'),
				       	'apellido' => $this->input->post('apellido'),
				       	'sexo' => $this->input->post('sexo'),
						'fecha_de_emision' => $this->input->post('fecha_de_emision'),
				       	'observacion_masiva' => $this->input->post('observacion_masiva'),
				       	'ruta_masiva' => $this->input->post('ruta_masiva'),
				       	'nombre_adoptivo' => $this->input->post('nombre_adoptivo'),
				       	'apellido_adoptivo' => $this->input->post('apellido_adoptivo'),
				       	'n_partida'=> '',
				       	'n_folio'=>'',
				       	'n_libro'=>'',
				       	'fecha_partida'=>'',
				       	'tipo_partida'=>'',
						'n_ficha_adopcion' => $this->input->post('n_ficha_adopcion'),
				       	'fecha_de_ingreso' => $this->input->post('fecha_de_ingreso'),
				       	'fecha_de_egreso' => $this->input->post('fecha_de_egreso'),
				       	'fecha_inscripcion' => $this->input->post('fecha_inscripcion'),
				       	'motivo_de_entrada' => $this->input->post('motivo_de_entrada'),
				       	'motivo_de_salida' => $this->input->post('motivo_de_salida'),
				       	'fecha_adopcion' => $this->input->post('fecha_adopcion'),
				       	'declaratoria_de_abandono' => $this->input->post('declaratoria_de_abandono'),
				       	'abogado' => $this->input->post('abogado'),
				       	'notario' => $this->input->post('notario'),
				       	'apoderado_adoptante' => $this->input->post('apoderado_adoptante'),
				       	'juez' => $this->input->post('juez'),
				       	'fecha_pronunciamiento' => $this->input->post('fecha_pronunciamiento'),
				       	'fecha_de_otorgamiento' => $this->input->post('fecha_de_otorgamiento'),
				       	'jefe_de_registro_civil' => $this->input->post('jefe_de_registro_civil'),
				       	'alcalde' => $this->input->post('alcalde')				    
						);

		$resultado = $this->modelo->insercion($data);
	}
}
?>