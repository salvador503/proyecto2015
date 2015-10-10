<?php

class InstitucionMdl extends CI_Model {

var $db = NULL;

function __construct()
{
    parent::__construct();
	$CI =&get_instance();
	$this->db = $CI->load->database('default', TRUE);

}

public function insercion($data)
{	
    $sql = "select prc_institucion(?,?,?,?)";
	$query = $this->db->query($sql, $data);

    return $query->result();
}

} 

?>