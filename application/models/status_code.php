<?php
Class Status_Code extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM status_code";
		$query=$this->db->query($sql);
		return $query;
	}
	function edit($id)
	{
		$sql="SELECT * FROM status_code WHERE id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	function getDesc($code)
	{
		$sql="SELECT description FROM status_code WHERE code='$code'";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>