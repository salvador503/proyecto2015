<?php

class Model_ficha_adopcion extends CI_Model {

	var $db = NULL;

	function __construct()
	{
		parent::__construct();
		$CI =&get_instance();
		$this->db = $CI->load->database('default', TRUE);
	}
	
	// --------------------------------------------------------------------

      /** 
       * function SaveForm()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
       */

	function SaveForm($form_data)
	{
		$this->db->insert('ficha_adopcion', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	public function insercion($data){
		/*
		********procedimiento ficha de adopcion no encontrado 
		*/
		$sql = "select prc_expediente_masivo(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, $data);

	    return $query->result();
	}
}
?>