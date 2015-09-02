<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class University extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {
        
         $query = $this->Md->show('university');
 
        if ($query) {
             $data['unis'] = $query;
        } else {
            $data['unis'] = array();
        }
        $this->load->view('view-university',$data);
    }
      public function add() {
          
        // $query = $this->MD->show('metar');
        //  var_dump($query);
        $this->load->view('add-university');
    }
     public function students() {
           $this->load->helper(array('form', 'url')); 
           
           $university = urldecode( $this->uri->segment(3));
           echo $university;
          $query = $this->Md->query("SELECT * FROM COURSE RIGHT JOIN studentinfo ON course.studentID = studentinfo.id  WHERE course.university= '".$university."'  ");
 
        if ($query) {
             $data['students'] = $query;
        } else {
            $data['students'] = array();
        }
        $this->load->view('university-students',$data);
    }

      public function save() {
       
        $this->load->helper(array('form', 'url')); 
       
         $file_element_name = 'imgfile';
        
        $config['upload_path'] = 'uploads';
        
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = FALSE;
             
        $this->load->library('upload', $config);
       // $this->upload->initialize($config);
        if (!$this->upload->do_upload($file_element_name))
        {
         $status = 'error';
         echo   $msg = $this->upload->display_errors('', '');
        }
        else
        {
       
        $data = $this->upload->data();            
        $name = $this->input->post('name');
        $location = $this->input->post('location');
        $detail = $this->input->post('detail');
        $type = $this->input->post('type');
        $created = date('Y-m-d');  
        $file = $data['file_name'];
        
        $university = array('logo' => $file, 'name' => $name, 'location' => $location,'detail' => $detail, 'type' => $type,'created' => date('Y-m-d H:i:s'));
        $file_id= $this->MD->save($university, 'university');                 
       
            if($file_id)
            {
               $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                information submitted	</strong>									
						</div>');
         redirect('/university', 'refresh');
               
            }
            else
            {
                unlink($data['full_path']);
              $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                               Error submitting	</strong>									
						</div>');
         redirect('/university', 'refresh');
            }
        }
        @unlink($_FILES[$file_element_name]);            
        
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
