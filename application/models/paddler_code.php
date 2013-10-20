<?php
Class Paddler_Code extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM paddler_code";
		$query=$this->db->query($sql);
		return $query;
	}
	function edit($id)
	{
		$sql="SELECT * FROM paddler_code WHERE id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	function getDesc($code)
	{
		$sql="SELECT description FROM paddler_code WHERE code='$code'";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>