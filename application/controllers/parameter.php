<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Parameter extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->library('template');
		$this->load->model('payment_type','',TRUE);
		$this->load->model('balance','',TRUE);
		$this->load->model('paddler','',TRUE);
	}
	function index()
	{	
		//$paddlers=$this->paddler->viewName()->result();
		$data=array('title'=>'Configuration',);
		$this->template->load('admin', '/param/home', $data);
	}
	function viewPayment()
	{
		$query=$this->payment_type->view()->result();
		$data=array('title'=>'View Payment','queries'=>$query);
		$this->template->load('admin', '/param/view_payment', $data);
	}
	function addPayment()
	{
		$data=array('title'=>'Add Payment Type',);
		$this->template->load('admin', '/param/add_payment', $data);
	}
	function insertPayment()
	{
		echo var_dump($this->input->post());
	}
	
}