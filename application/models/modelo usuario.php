function __construct()
	{
		parent::__construct();
	}
	
	
	function SaveForm($form_data)
	{
		$this->db->insert('tbl_usuario', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
}
?>