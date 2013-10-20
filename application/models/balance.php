<?php
Class Balance extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM balances";
		$query=$this->db->query($sql);
		return $query;
	}
	function totalBalance($id)
	{
		$sql="SELECT amount as bal FROM balances WHERE paddler_id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>	