<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {

	 function __construct() {

        parent::__construct();
       // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }
	public function index()
	{
  
		$this->load->view('admin/index');
	}
        public function image()
	{
  
		$this->load->view('image');
	}
        public function login()
	{
  
		$this->load->view('login-admin');
	}
       public function report()
        {
                  $query = $this->Md->query("SELECT sum(amount) as sum from remittance");
        if ($query) {
            $data['remittance'] = $query;
        } else {
            $data['remittance'] = array();
        }
         $query = $this->Md->query("SELECT sum(amount) as sum from refund");
        if ($query) {
            $data['refund'] = $query;
        } else {
            $data['refund'] = array();
        }
          $query = $this->Md->query("SELECT *  from studentinfo WHERE gender='Male'");
        if ($query) {
            $data['male'] = $query;
        } else {
            $data['male'] = array();
        }
         $query = $this->Md->query("SELECT * from studentinfo WHERE gender='Female'");
        if ($query) {
            $data['female'] = $query;
        } else {
            $data['female'] = array();
        }
        
  
		$this->load->view('admin-report',$data);
	}
        public function authenticate()
	{
  
		$this->load->view('administration');
	}
         public function applicant()
	{  
		$this->load->view('view-applicant');
	}
         public function addfund()
	{  
		$this->load->view('add-fund');
	}
        public function fund()
	{  
		$this->load->view('view-fund');
	}
       
         public function user()
	{
              $query = $this->MD->show('role');
      //  var_dump($query);
        if ($query) {
             $data['roles'] = $query;
        } else {
            $data['roles'] = array();
        }

        $this->load->view('user', $data);
			}
         public function station()
	{
		$this->load->view('station');
	}
         public function element()
	{
		$this->load->view('element');
	}
        public function instrument()
	{
		$this->load->view('instrument');
	}
        public function archive()
	{
		$this->load->view('archive');
	}
         public function schedule()
	{
		$this->load->view('schedule');
	}
        public function reports()
	{
        
        $query = $this->Md->query("SELECT sum(amount) as sum from remittance");
        if ($query) {
            $data['remittance'] = $query;
        } else {
            $data['remittance'] = array();
        }
         $query = $this->Md->query("SELECT sum(amount) as sum from refund");
        if ($query) {
            $data['refund'] = $query;
        } else {
            $data['refund'] = array();
        }
         $query = $this->Md->query("SELECT *  from studentinfo WHERE gender='Male'");
        if ($query) {
            $data['male'] = $query;
        } else {
            $data['male'] = array();
        }
         $query = $this->Md->query("SELECT * from studentinfo WHERE gender='Female'");
        if ($query) {
            $data['female'] = $query;
        } else {
            $data['female'] = array();
        }
        
        
        
		$this->load->view('reports',$data);
	}
         public function form()
	{
		$this->load->view('form');
	}
         public function form4()
	{
		$this->load->view('form4');
	}
         public function dekadal()
	{
		$this->load->view('dekadal');
	}
          public function form5()
	{
		$this->load->view('form5');
	}
         public function summary()
	{
		$this->load->view('summary');
	}
         public function metar()
	{
		$this->load->view('metar');
	}
          public function rainfall()
	{
		$this->load->view('rainfall');
	}
         public function climatological()
	{
		$this->load->view('climatological');
	}
}
