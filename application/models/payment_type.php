<?php
Class Payment_Type extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM payment_type";
		$query=$this->db->query($sql);
		return $query;
	}
	function edit($id)
	{
		$sql="SELECT * FROM payment_type WHERE id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	
}
?>