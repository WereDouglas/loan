<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {

        parent::__construct();
       // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
    }

    public function index() {
        $this -> session -> sess_destroy();
        
        $query = $this->Md->show('student');
        if ($query) {
            $data['students'] = $query;
        } else {
            $data['students'] = array();
        }
        $query = $this->Md->show('university');
        if ($query) {
            $data['unis'] = $query;
        } else {
            $data['unis'] = array();
        }
         $query = $this->Md->query('SELECT DISTINCT course FROM course ');
        if ($query) {
            $data['courses'] = $query;
        } else {
            $data['courses'] = array();
        }
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
        
        
        $this->load->view('index',$data);
    }

    public function projects() {
        
         $query = $this->MD->show('project');
        if ($query) {
            $data['projects'] = $query;
        } else {
            $data['projects'] = array();
        }
        

        $this->load->view('projects',$data);
    }

    public function services() {
        
        $query = $this->MD->show('service');
        if ($query) {
            $data['services'] = $query;
        } else {
            $data['services'] = array();
        }
        $this->load->view('services',$data);
    }

    public function profile() {
        
         $query = $this->MD->show('profile');
        if ($query) {
            $data['profiles'] = $query;
        } else {
            $data['profiles'] = array();
        }
        $this->load->view('profile' ,$data);
    }

    public function contact() {
        $this->load->view('contact');
    }

    public function project() {
        $this->load->view('project');
    }

}
