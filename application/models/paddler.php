<?php
Class Paddler extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM paddlers";
		$query=$this->db->query($sql);
		return $query;
	}
	function viewName()
	{
		$sql="SELECT id,fname,lname FROM paddlers";
		$query=$this->db->query($sql);
		return $query;
	}
	function add($data = array())
	{
		extract($data);
		$dataArr = array(
							'fname'					=>$fname,
							'lname'					=>$lname,
							'gender'				=>$gender,
							'tel_no'				=>$tel_no,
							'blood_type'			=>$blood_type,
							'address'				=>$address,
							'registration_date'		=>$registration_date,
							'status'				=>$status,
							'paddler_type'			=>$paddler_type,
							'civil_status'			=>$civil_status
						);
						
		return $this->db->insert('paddlers',$dataArr);
	}
	function edit($id)
	{
		$sql="SELECT * FROM paddlers WHERE id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	function update($data=array(),$id)
	{
		extract($data);
		$dataArr = array(
							'fname'					=>$fname,
							'lname'					=>$lname,
							'gender'				=>$gender,
							'tel_no'				=>$tel_no,
							'blood_type'			=>$blood_type,
							'address'				=>$address,
							'registration_date'		=>$registration_date,
							'status'				=>$status,
							'paddler_type'			=>$paddler_type,
							'civil_status'			=>$civil_status
						);
						
		return $this->db->update('paddlers', $dataArr, array('id' => $id));
	}
	function viewByGender($gcode)
	{
		$sql="SELECT * FROM paddlers WHERE gender='$gcode'";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>

