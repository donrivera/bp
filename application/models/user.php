<?php
	Class User extends CI_Model
	{
		function login($username, $password)
		{
			$this -> db -> select('id,username,fname, password,type');
			$this -> db -> from('users');
			$this -> db -> where('username',$username);
			$this -> db -> where('password',MD5($password));
			$this -> db -> limit(1);
			$query = $this -> db -> get();
			if($query -> num_rows() == 1)
			{return $query->result();}
			else
			{return false;}
		}
		function edit($id)
		{
			$sql="SELECT * FROM users WHERE id='$id'";
			$query=$this->db->query($sql);
			return $query;
		}
	}
?>
