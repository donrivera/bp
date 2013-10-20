<?php
Class Due extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view($id)
	{	$year=date('Y');
		$sql="SELECT d.*,p.fname,p.lname FROM dues d INNER JOIN paddlers p ON p.id=d.paddler_id  WHERE d.paddler_id='$id' AND YEAR(d.due_date)='$year' ORDER BY MONTH(d.due_date) ASC";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>	