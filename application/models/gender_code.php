<?php
Class Gender_Code extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM gender_code";
		$query=$this->db->query($sql);
		return $query;
	}
	function getCode($code)
	{
		$sql="SELECT description FROM gender_code WHERE code='$code'";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>