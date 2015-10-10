<?php

class Familiar extends CI_Controller {

	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->model('vista_familiar');
		// $CI =&get_instance();
		// $this->db = $CI->load->database('default', TRUE);
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_familiar', 'id familiar:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_desaparecido', 'id desaparecido:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_pais', 'id pais:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('relacion', 'relacion:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('telefono', 'telefono:', 'required|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('correo', 'correo:', 'required|xss_clean|max_length[25]');			
		$this->form_validation->set_rules('domicilio', 'domicilio:', 'required|xss_clean|max_length[100]');			
		$this->form_validation->set_rules('sexo', 'sexo:', 'required|xss_clean|max_length[10]');			
		$this->form_validation->set_rules('tipo_de_documento', 'tipo de documento:', 'required|max_length[25]');			
		$this->form_validation->set_rules('numero_de_documento', 'numero de documento:', 'required|xss_clean|max_length[20]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('pages/view_familiar');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'id_familiar' => set_value('id_familiar'),
					       	'id_desaparecido' => set_value('id_desaparecido'),
					       	'id_pais' => set_value('id_pais'),
					       	'relacion' => set_value('relacion'),
					       	'telefono' => set_value('telefono'),
					       	'correo' => set_value('correo'),
					       	'domicilio' => set_value('domicilio'),
					       	'sexo' => set_value('sexo'),
					       	'tipo_de_documento' => set_value('tipo_de_documento'),
					       	'numero_de_documento' => set_value('numero_de_documento')
						);
					
			// run insert model to write data to db
		
			if ($this->vista_familiar->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('controller_familiar/success');   // or whatever logic needs to occur
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
		
		$this->load->model('model_familiar','modelo');
		
		$data = array('id' => $this->input->post('id_familiar'),
			       	'desaparecido' => $this->input->post('id_desaparecido'),
			       	'pais' => $this->input->post('id_pais'),
			       	'relacion' => $this->input->post('relacion'),
			       	'telefono' => $this->input->post('telefono'),
			       	'correo' => $this->input->post('correo'),
			       	'domicilio' => $this->input->post('domicilio'),
			       	'sexo' => $this->input->post('sexo'),
			       	'tipoDoc' => $this->input->post('tipo_de_documento'),
			       	'numeroDoc' => $this->input->post('numero_de_documento'),
			       	'originario' => "originario",
			       	'nacionalidad' => "nacionalidad",
			       	'opcion' => 1,
			       	'opcion2' => 1);

			echo 'data'.implode(",", $data);

			$resultado = $this->modelo->insercion($data);
			
			//redirect('controller_evento/success');
			echo 'insertado';
	}
}
?>