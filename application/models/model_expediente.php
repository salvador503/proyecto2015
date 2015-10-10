<?php

class Model_expediente extends CI_Model {

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
		$this->db->insert('expediente', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	function insercionDatos($data)
	{	
	    $sql = "select prc_dato_desaparecido(?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, $data);
	    return $query->row()->prc_dato_desaparecido;
	}

	function insercionDesaparecido($data)
	{	
	    $sql = "select prc_desaparecido(?,?,?,?,?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, $data);
	    return $query->row()->prc_desaparecido;
	}

	function insercionNombre($data){
		$sql = "select prc_nombre_alias(?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, $data);
	    return $query->row()->prc_nombre_alias;
	}

	function insercionExpediente($data){
		$sql = "select prc_expediente(?,?,?,?,?,?,?,?)";
		$query = $this->db->query($sql, $data);
	    return $query->row()->prc_nombre_alias;
	}

}
?>