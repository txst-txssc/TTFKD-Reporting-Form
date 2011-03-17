<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form extends CI_Controller {
	  
  function __construct()
	{
		parent::__construct();
	}
	  
	function index()
	{
		$this->load->model('group');

		//$data['result'] = $this->group->getId();
		//$data['page_title'] = "Texas Tobacco Free Kids Day";

		$this->load->view('report/index');
  }
  
  function create()
  {
    if ($this->form_validation->run('report') == FALSE)
    {
      $this->load->view('report/index');
    }
    else
    {
      // Create a Group
      $group = $this->group->create($_POST['group']);  
      $group_id = $group;
      
      // Create a Sponsor
      $sponsor = $this->sponsor->create($_POST['sponsor'], $group_id);  
      $sponsor_id = $sponsor;
      
      // Create a Report
      $report = $this->report->create($_POST['event'], $group_id);
      
      $this->load->view('report/success');
    	
    }
  }
  
}