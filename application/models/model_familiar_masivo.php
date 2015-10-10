<?php

class Model_familiar_masivo extends CI_Model {

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
		$this->db->insert('familiar_masivo', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	public function insercion($data){
		$sql = "select prc_familiar_masivo(?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, $data);

	    return $query->result();
	}
}
?>