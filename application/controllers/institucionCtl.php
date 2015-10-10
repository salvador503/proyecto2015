<?php
class InstitucionCtl extends CI_Controller {
		
	    // var $db = NULL;
		public function __construct() {
			parent::__construct();
			// $CI =&get_instance();
			//$this->db = $CI->load->database('default', TRUE);			
			//$this->db = $CI->load->model('InstitucionMdl');
			
		}

        public function index()
        {	
			$this->load->helper('form');
			$this->load->helper('url');	
			$this->load->view('pages/institucionVw');
        }

        public function comments()
        {
                echo 'Guenale';
        }
		
		public function getvalue(){
			//$this->db = $CI->load->model('InstitucionMdl');
			$this->load->model('InstitucionMdl','modelo');

			$data = array(
				'id' => 1010,
				'nombreIns' => md5($this->input->post('nombre')),
				'tipoIns' => $this->input->post('tipo'),
				'opcion' => 1);

			$resultado = $this->modelo->insercion($data);

				// $sql = "select prc_institucion(?,?,?,?)";
				// $query = $this->db->query($sql, $data);
			$this->comments();
			//echo implode('',$resultado);
		 }
		 
		}
