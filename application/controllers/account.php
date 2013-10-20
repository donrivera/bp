<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->library('template');
		$this->load->model('payment','',TRUE);
		$this->load->model('payment_type','',TRUE);
		$this->load->model('paddler','',TRUE);
		$this->load->model('gender_code','',TRUE);
		$this->load->model('balance','',TRUE);
		$this->load->model('due','',TRUE);
	}
	function index()
	{
		$ptype=$this->payment_type->view()->result();
		$gcs=$this->gender_code->view()->result();
		$data=array('title'=>'Accounts','gcs'=>$gcs,'ptype'=>$ptype);
		$this->template->load('admin', '/account/home', $data);
	}
	function viewByGender()
	{
		$gcode=$this->input->post('gender');
		$pcode=$this->input->post('payment');
		//$year=$this->input->post('year');
		$query=$this->paddler->viewByGender($gcode)->result();
		$data=array('title'=>'Accounts','queries'=>$query,'pcode'=>$pcode);
		$this->template->load('admin', '/account/view_by_gender', $data);
	}
	function viewById()
	{
		$id=$this->uri->segment(3);
		$pcode=$this->uri->segment(4);
		$query=$this->due->view($id)->result();
		$data=array('title'=>'Accounts','queries'=>$query,'pcode'=>$pcode);
		$this->template->load('admin', '/account/view_by_id', $data);
		
	}
	function payment()
	{
		$pts=$this->payment_type->view()->result();
		$pds=$query=$this->paddler->viewName()->result();
		$data = array('title' => 'Add Payment','pts'=>$pts,'pds'=>$pds);
		$this->template->load('admin', '/payment/add', $data);
	}
	function insertPayment()
	{
		$session=$this->session->userdata('logged_in');
		//echo var_dump($session);
		$dtl=array(
					'paddler_id'		=>$this->input->post('paddler_id'),
					'payment_type'		=>$this->input->post('payment_type'),
					'amount'			=>$this->input->post('amount'),
					'date_of_payment'	=>$this->input->post('date_of_payment'),
					'date_encoded'		=>date("Y-m-d"),
					'received_by'		=>$session['id']
					);
		
		$this->payment->add($dtl);
		redirect('account', 'refresh');
		
	}
}
