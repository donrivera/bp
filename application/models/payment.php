<?php
Class Payment extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }
	function view()
	{
		$sql="SELECT * FROM payments";
		$query=$this->db->query($sql);
		return $query;
	}
	function add($data = array())
	{
		extract($data);
		$dataArr = array(
							'paddler_id'		=>$paddler_id,
							'payment_type'		=>$payment_type,
							'amount'			=>$amount,
							'date_of_payment'	=>$date_of_payment,
							'date_encoded'		=>$date_encoded,
							'received_by'		=>$received_by
						);
						
		return $this->db->insert('payments',$dataArr);
	}
	function searchReportById($id,$from,$to)
	{
		$sql="	SELECT p.*,pd.fname,pd.lname 
				FROM payments p
				INNER JOIN paddlers pd ON pd.id=p.paddler_id
				WHERE (p.date_of_payment BETWEEN '$from' AND '$to') AND p.paddler_id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	function totalAmount($id)
	{
		$sql="SELECT SUM(amount) as amt FROM payments WHERE paddler_id='$id'";
		$query=$this->db->query($sql);
		return $query;
	}
	function paymentPerMonth($id,$mon,$yr)
	{
		$year=date('Y');
		$sql="SELECT SUM(amount) as amt FROM payments WHERE paddler_id='$id' AND MONTH(date_of_payment)='$mon' AND YEAR(date_of_payment)='$yr'";
		$query=$this->db->query($sql);
		return $query;
	}
}
?>