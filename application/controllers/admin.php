<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
		$this->load->model('user','',TRUE);
		$this->load->model('paddler','',TRUE);
		$this->load->model('payment','',TRUE);
		$this->load->model('payment_type','',TRUE);
		$this->load->model('paddler_code','',TRUE);
		$this->load->model('gender_code','',TRUE);
		$this->load->model('civil_code','',TRUE);
		$this->load->model('status_code','',TRUE);
	}
	public function index()
	{
		$data = array('title' => 'Admin Area',);
		$this->template->load('admin', '/admin/index', $data);
	}
	
	
	public function addPayment()
	{
		$pts=$this->payment_type->view()->result();
		$pds=$query=$this->paddler->viewName()->result();
		$data = array('title' => 'Add Payment','pts'=>$pts,'pds'=>$pds);
		$this->template->load('admin', '/payment/add', $data);
	}
	public function insertPayment()
	{
		$session=$this->session->userdata('logged_in');
		echo var_dump($this->input->post());
		
		$dtl=array(
					'paddler_id'		=>$this->input->post('paddler_id'),
					'payment_type'		=>$this->input->post('payment_type'),
					'amount'			=>$this->input->post('amount'),
					'date_of_payment'	=>$this->input->post('date_of_payment'),
					'date_encoded'		=>date("Y-m-d"),
					'received_by'		=>$session['id']
					);
		
		$this->payment->add($dtl);
		redirect('admin/account', 'refresh');
		
	}
	function logout()
	{
		
		//$this->session->unset_userdata('logged_in');
		//session_destroy();
		$this->session->unset_userdata('logged_in');
		//session_destroy();
		redirect('home', 'refresh');
	}
}