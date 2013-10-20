<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member extends CI_Controller 
{
	function __construct()
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
		$query=$this->paddler->view()->result();
		$data=array('title'=>'Paddlers','queries'=>$query);
		$this->template->load('admin', '/paddler/home', $data);
	}
	public function add()
	{
		$pcs=$this->paddler_code->view()->result();
		$ccs=$this->civil_code->view()->result();
		$gcs=$this->gender_code->view()->result();
		$scs=$this->status_code->view()->result();
		$data = array('title' => 'Add Paddler','pcs'=>$pcs,'ccs'=>$ccs,'gcs'=>$gcs,'scs'=>$scs,);
		$this->template->load('admin', '/paddler/add', $data);
	}
	public function insert()
	{
		//echo var_dump($this->input->post());
		
		$dtl=array(
					'fname'				=>$this->input->post('fname'),
					'lname'				=>$this->input->post('lname'),
					'gender'			=>$this->input->post('gender'),
					'tel_no'			=>$this->input->post('tel_no'),
					'blood_type'		=>$this->input->post('blood_type'),
					'address'			=>$this->input->post('address'),
					'registration_date'	=>$this->input->post('registration_date'),
					'status'			=>$this->input->post('status'),
					'paddler_type'		=>$this->input->post('paddler_type'),
					'civil_status'		=>$this->input->post('civil_status')
					);
		$this->paddler->add($dtl);
		redirect('member', 'refresh');
		
	}
	public function edit()
	{
		$pcs=$this->paddler_code->view()->result();
		$ccs=$this->civil_code->view()->result();
		$gcs=$this->gender_code->view()->result();
		$scs=$this->status_code->view()->result();
		$id=$this->uri->segment(3);
		$query=$this->paddler->edit($id)->result();
		$data=array('title'=>'Edit Paddler','queries'=>$query,'pcs'=>$pcs,'ccs'=>$ccs,'gcs'=>$gcs,'scs'=>$scs,);
		$this->template->load('admin', '/paddler/edit', $data);
	}
	public function update()
	{
		$id=$this->input->post('id');
		$dtl=array(
					'fname'				=>$this->input->post('fname'),
					'lname'				=>$this->input->post('lname'),
					'gender'			=>$this->input->post('gender'),
					'tel_no'			=>$this->input->post('tel_no'),
					'blood_type'		=>$this->input->post('blood_type'),
					'address'			=>$this->input->post('address'),
					'registration_date'	=>$this->input->post('registration_date'),
					'status'			=>$this->input->post('status'),
					'paddler_type'		=>$this->input->post('paddler_type'),
					'civil_status'		=>$this->input->post('civil_status')
					);
		$this->paddler->update($dtl,$id);
		redirect('member', 'refresh');
	}
	
	
}