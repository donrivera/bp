<?php
Class Civil_Code extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM civil_code";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>