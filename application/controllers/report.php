<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Report extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        $this->load->library('template');
		$this->load->model('payment','',TRUE);
		$this->load->model('balance','',TRUE);
		$this->load->model('paddler','',TRUE);
	}
	function index()
	{	
		$paddlers=$this->paddler->viewName()->result();
		$data=array('title'=>'Reports','paddlers'=>$paddlers);
		$this->template->load('admin', '/report/home', $data);
	}
	function reportById()
	{
		$id=$this->input->post('paddler_id');
		$from=$this->input->post('start_date');
		$to=$this->input->post('end_date');
		$query=$this->payment->searchReportById($id,$from,$to)->result();
		$data=array('title'=>'Reports','queries'=>$query);
		$this->template->load('admin', '/report/view_payment', $data);
	}
	
}