<?php

class Testimonio extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		//$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->model('model_testimonio');
		$CI =&get_instance();
		$this->db = $CI->load->database('default', TRUE);
	}	
	function index()
	{			
		$this->form_validation->set_rules('id_testimonio', 'Id Testimonio:', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('id_testigo', 'Id Testigo', 'required|xss_clean|max_length[3]');			
		$this->form_validation->set_rules('testimonio', 'Testimonio:', 'required|xss_clean|max_length[300]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/head');
			$this->load->view('templates/menu_investigador');
			$this->load->view('pages/view_testimonio');
			$this->load->view('templates/foot');
		}
		
		 	
			
			// $form_data = array(
			// 		       	'id_testimonio' => set_value('id_testimonio'),
			// 		       	'id_testigo' => set_value('id_testigo'),
			// 		       	'testimonio' => set_value('testimonio'),
			// 		       	'fecha' => date('Y-m-d')
			// 			);
					
			// $sql = "select prc_testimonio(?,?,?,?)";
			// $query = $this->db->query($sql, $form_data);
			// redirect('controller_testimonio/success');
		
			// if ($this->model_testimonio->SaveForm($form_data) == TRUE)			{
			// 	redirect('controller_testimonio/success');   
			// }
			// else
			// {
			// echo 'An error occurred saving your information. Please try again later';
			
			// }
		
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}

	public function insertar(){
		$this->load->model('model_testimonio','modelo');
		
		$data = array('testigo'  => $this->input->post('id_testigo'),
					   'testimonio' => $this->input->post('testimonio'),
					   'fecha' => date('d-m-Y')); //verificar fecha

			// echo 'data'.implode(",", $data);
			
			$resultado = $this->modelo->insercion($data);
			redirect('controller_testimonio/success');
	}
}
?>