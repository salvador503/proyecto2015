<?php

class Model_observacion extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	
	function SaveForm($form_data)
	{
		$this->db->insert('observacion', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
}
?>