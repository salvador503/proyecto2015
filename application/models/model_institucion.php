<?php

class Model_Institucion extends CI_Model {

var $db = NULL;

function __construct()
{
    parent::__construct();
	$CI =&get_instance();
	$this->db = $CI->load->database('default', TRUE);

}

	function SaveForm($form_data)
	{
		$this->db->insert('institucion', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	public function insercion($data)
	{	
	    $sql = "select prc_institucion(?,?,?,?)";
		$query = $this->db->query($sql, $data);

	    return $query->result();
	}

} 
}
?>