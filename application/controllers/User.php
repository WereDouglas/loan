<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {
        
         $query = $this->Md->show('user');
 
        if ($query) {
             $data['user'] = $query;
        } else {
            $data['user'] = array();
        }
        $this->load->view('view-user',$data);
    }
      public function add() {
          
        // $query = $this->MD->show('metar');
        //  var_dump($query);
        $this->load->view('add-user');
    }

      public function save() {
       
        $this->load->helper(array('form', 'url')); 

            $name = $this->input->post('name');
            
            $email = $this->input->post('email');
            $social = $this->input->post('social');
            $password = $this->input->post('password');
            $password = $password;
            $key = $email;
            //check($value,$field,$table)
            $get_result = $this->Md->check($email, 'email', 'user');
            if (!$get_result) {               

              echo 'invalid user';
                return;
            }
            

            $password = $this->encrypt->encode($password, $key);
            $created = date('Y-m-d');
            $file = $data['file_name'];
            $user = array('name' => $name,'email' => $email, 'password' => $password, 'created' => date('Y-m-d H:i:s'));
            $id = $this->Md->save($user, 'user');
            if ($id) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                information submitted	</strong>									
						</div>');
                $query = $this->Md->show('user');

                if ($query) {
                    $data['user'] = $query;
                } else {
                    $data['user'] = array();
                }

                $this->load->view('view-user', $data);
                return;
            }
        
    }
      public function authenticate() {

        if ($this->session->userdata('name') != "") {
          //  echo $this->session->userdata('name');
            $this->load->view('administration');
            return;
        }

        $this->load->helper(array('form', 'url'));
        $email = $this->input->post('email');
        $password_now = $this->input->post('password');

        $key = $email;
        $get_result = $this->Md->check($email, 'email', 'user');
        if (!$get_result) {
          // echo 'here';
            //$this->session->set_flashdata('msg', 'Welcome'.$email);
            //get($field,$value,$table)
            $result = $this->Md->get('email', $email, 'user');
           // var_dump($result);
            foreach ($result as $res) {
                $key = $email;
                $password = $this->encrypt->decode($res->password, $key);

                if ($password_now == $password) {

                    $newdata = array(
                        'id' => $res->id,
                        'name' => $res->name,
                        'email' => $res->email,                     
                        'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);
 
                   $this->load->view('administration');
                   return;
                } else {
                    $this->session->set_flashdata('msg', 'Login Invalid user');
                    //  redirect('/student/authenticate', 'refresh');
                    echo $this->session->userdata('name');
                     $this->load->view('login-admin');
                   return;
                }
            }
        } else {
            $this->session->set_flashdata('msg', 'Invalid email ');
            $this->load->view('login-admin');
            // return;
        }
    }

  

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);


        $query = $this->MD->get('id', $id, 'service');

        if ($query) {
            $data['service'] = $query;
        } else {
            $data['service'] = array();
        }      

        $this->load->view('admin/edit-service', $data);
    }

    public function update() {
        
        $this->load->helper(array('form', 'url'));
         $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');
       
        
    // function update($id, $data,$table)
            $service = array('title' => $title, 'description' => $description);
            $this->MD->update($id,$service, 'service');
            $this->session->set_flashdata('msg', '<div class="alert alert-info"> <strong>
                                                  Information updated	</strong>									
						</div>');

            redirect('/service/edit/'.$id, 'refresh');
            return;
       
    }

    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);
         
           $this->MD->remove_table($id,'service','image');
           //delete($id,$table);
           //remove($id,$table,$column)
       
        $query = $this->MD->delete($id, 'service');
        
        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/project', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/project', 'refresh');
        }
    }
     public function image() {
        $id = $this->uri->segment(3);
        $query = $this->MD->remove($id);
        $query = $this->MD->delete($id, 'image');
        
        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('action', $msg);
            redirect('/project', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('action', $msg);
           redirect('/project', 'refresh');
        }
    }


 
}
