<?php

class Expediente extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->model('model_expediente');
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_expediente', 'id expediente:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id', 'id desaparecido:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('estado_caso', 'estado caso:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('fecha_apertura', 'fecha apertura:', 'required|xss_clean');			
		$this->form_validation->set_rules('investigador_designado', 'investigador designado:', 'required|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('clasificacion_del_caso', 'clasificacion del caso:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('estado_expediente', 'estado expediente:', 'required|xss_clean|max_length[10]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('templates/head');
			$this->load->view('templates/menu_digitador');
			$this->load->view('pages/view_expediente');
			$this->load->view('templates/foot');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_expediente' => set_value('id_expediente'),
					       	'id' => set_value('id'),
					       	'estado_caso' => set_value('estado_caso'),
					       	'fecha_apertura' => set_value('fecha_apertura'),
					       	'investigador_designado' => set_value('investigador_designado'),
					       	'clasificacion_del_caso' => set_value('clasificacion_del_caso'),
					       	'estado_expediente' => set_value('estado_expediente')
						);
					
			// run insert model to write data to db
		
			if ($this->model_expediente->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_expediente/success');   // or whatever logic needs to occur
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
		$this->load->model('model_expediente','modelo');

			$datos = array('id'=> null,
				'evento' => $this->input->post('evento'),
				'lugar' => $this->input->post('lugar_de_desaparicion'),
				'dia' => $this->input->post('dia_desaparicion'),
				'mes' => $this->input->post('mes_desaparicion'),
				'anio' => $this->input->post('ano_de_desaparicion'),
				'observacion' => null,
				'opcion' => 1);
			$Rdatos = $this->modelo->insercionDatos($datos);

			$desaparecido  = array( 'id' => null,
				'datos' =>$resultado,
				'pais' => $this->input->post('id_pais'),
				'sexo' => $this->input->post('sexo'),
				'foto' => $this->input->post('foto'),
				'fecha' => $this->input->post('fecha_de_nacimiento'),
				'lugar' => $this->input->post('lugar_de_nacimiento'),
				'estado' => $this->input->post('estado_civil'),
				'caracteristicas' => $this->input->post('caracteristicas_personales'),
				'domicilio' => $this->input->post('domicilio'),
				'observacion' => null,
				'opcion' => 1);
			$Rdesaparecido = $this->modelo->insercionDesaparecido($desaparecido);

			$nombre = array( 'id' => null,
				'nombre' => $this->input->post('nombre'),
				'tipo' => $this->input->post('tipo'),
				'desaparecido' => $Rdesaparecido,
				'familiar' => null,
				'apellido' => $this->input->post('apellido'),
				'opcion' => 1
				);
			$Rnombre = $this->modelo->insercionNombre($nombre);

			$expediente = array('id' => $this->input->post('id_expediente'),
				'desaparecido' => $Rdesaparecido,
				'estado' => TRUE,
				'apertura' => date('d-m-Y'),
				'investigador' => $this->input->post('investigador_designado'),
				'clasificacion' => $this->input->post('clasificacion_del_caso'),
				'estado_exp' => 'DES',
				'opcion');
			$Rexpediente = $this->modelo->insercionExpediente($expediente); 

			echo var_dump($insertDesap);
	}
}
?>