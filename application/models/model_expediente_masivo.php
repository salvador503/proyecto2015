<?php

class Model_expediente_masivo extends CI_Model {

	var $db = NULL;
	function __construct()
	{
		parent::__construct();
		$CI =&get_instance();
		$this->db = $CI->load->database('default',TRUE);
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
		$this->db->insert('expediente_masivo', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

	public function insercion($data){

/*

(id_masivo varchar, id_pais integer, id_institucion integer, tipo_masivo varchar, 
	nombre_persona varchar, apellido_persona varchar, sexo_persona char, fecha_emision date, observacion_masiva varchar, 
	ruta_masivo varchar, nombre_adop varchar, apellido_adop varchar,
	id_partida integer, n_partida bigint, n_folio bigint, n_libro bigint, fecha_nacimiento date,
	id_ficha_adopcion integer, n_ficha_adopcion varchar, fecha_ingreso date, fecha_egreso date, fecha_inscripcion date, 
	motivo_entrada varchar, motivo_salida varchar, fecha_adopcion date, declaratoria_abandono boolean, abogado varchar, notario varchar, apoderado_adoptantes varchar,
	juez varchar, fecha_pronunciamiento date, fecha_otorgamento date, jefe_registro_civil varchar, alcalde varchar)

*/

		$sql = "select prc_expediente_masivo()";
		$query = $this->db->query($sql, $data);

		return $query->result();
	}
}
?>