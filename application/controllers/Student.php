<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    function __construct() {

        parent::__construct();
        // error_reporting(E_PARSE);
        $this->load->model('Md');
        $this->load->library('session');
        $this->load->library('encrypt');
        date_default_timezone_set("Africa/Nairobi");
    }

    public function index() {
        // $query = $this->MD->show('metar');
        //  var_dump($query);

        $query = $this->Md->show('student');
        if ($query) {
            $data['students'] = $query;
        } else {
            $data['students'] = array();
        }
        $this->load->view('view-applicant', $data);
    }

    public function register() {


        $this->load->view('register');
    }

    public function profile() {
        $this->load->view('student-profile');
    }

    public function save() {

        $this->load->helper(array('form', 'url'));

        $file_element_name = 'imgfile';

        $config['upload_path'] = 'uploads';

        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = FALSE;

        $this->load->library('upload', $config);
        // $this->upload->initialize($config);
        if (!$this->upload->do_upload($file_element_name)) {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
            $this->session->set_flashdata('msg', '<div class="alert alert-error">                                                  
                                                <strong>' . $msg . ' </strong>									
						</div>');
            $this->load->view('student-profile');
            return;
        } else {

            $data = $this->upload->data();

            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $oname = $this->input->post('oname');
            $gender = $this->input->post('gender');
            $contact = $this->input->post('contact');
            $email = $this->input->post('email');
            $social = $this->input->post('social');
            $password = $this->input->post('password');
            $password = $password;
            $key = $email;
            //check($value,$field,$table)
            $get_result = $this->Md->check($email, 'email', 'student');
            if (!$get_result) {

                $query = $this->Md->get('email', $email, 'student');

                if ($query) {
                    $data['profile'] = $query;
                } else {
                    $data['profile'] = array();
                }

                $this->load->view('student-qualification', $data);
                return;
            }



            $password = $this->encrypt->encode($password, $key);
            $created = date('Y-m-d');
            $file = $data['file_name'];
            $student = array('image' => $file, 'fname' => $fname, 'lname' => $lname, 'oname' => $oname, 'social' => $social, 'gender' => $gender, 'contact' => $contact, 'email' => $email, 'password' => $password, 'created' => date('Y-m-d H:i:s'));
            $id = $this->Md->save($student, 'student');
            if ($id) {
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                                information submitted	</strong>									
						</div>');
                $query = $this->Md->get('id', $id, 'student');

                if ($query) {
                    $data['profile'] = $query;
                } else {
                    $data['profile'] = array();
                }

                $this->load->view('student-qualification', $data);
                return;
            } else {
                unlink($data['full_path']);
                $this->session->set_flashdata('msg', '<div class="alert alert-error">
                                                   
                                                <strong>
                                               Error submitting	</strong>									
						</div>');
                $this->load->view('student-profile');
                return;
            }
        }
        @unlink($_FILES[$file_element_name]);
        $this->load->view('student-qualification');
    }

    public function address() {

        $this->load->helper(array('form', 'url'));
        
        $id = $this->input->post('id');
        $IDtype = $this->input->post('IDtype');
        $IDnumber = $this->input->post('IDnumber');
        $GN = $this->input->post('GuaranteeName');
        $GC = $this->input->post('GuaranteeContact');
        $GN2 = $this->input->post('GuaranteeName2');
        $GC2 = $this->input->post('GuaranteeContact2');
        $residence = $this->input->post('autocomplete');
        $country = $this->input->post('country');
        $physical = $this->input->post('physical');
        $region = $this->input->post('administrative_area_level_1');
        $city = $this->input->post('locality');
        
        if ($id!=""){
              $query = $this->Md->get('id', $id, 'student');
            if ($query) {
                $data['profile'] = $query;
            } else { 
                $data['profile'] = array();
            }
            $this->load->view('student-contact', $data);
            return; 
            
        }
        
        if ($GN==""&&$GN2==""){
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                <strong> Your are missing vital information in your form</strong>									
						</div>');
            $query = $this->Md->get('id', $id, 'student');

            if ($query) {
                $data['profile'] = $query;
            } else {
                $data['profile'] = array();
            }
            $this->load->view('student-qualification', $data);
            return;
            
            
        }
        //check($value,$field,$table)

        $student = array('IDtype' => $IDtype, 'IDnumber' => $IDnumber, 'GuaranteeName' => $GN, 'GuaranteeContact' => $GC, 'GuaranteeName2' => $GN2, 'GuaranteeContact2' => $GC2, 'residence' => $residence, 'country' => $country, 'physical' => $physical, 'region' => $region, 'city' => $city);
        $this->MD->update($id, $student, 'student');
 
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                <strong> information submitted	</strong>									
						</div>');
            $query = $this->Md->get('id', $id, 'student');

            if ($query) {
                $data['profile'] = $query;
            } else {
                $data['profile'] = array();
            }
            $this->load->view('student-contact', $data);
            return;
            // $this->load->view('student-contact',$data);
       
        
        
    }
    
    public function course() {

        $this->load->helper(array('form', 'url'));
        
       // $id = $this->input->post('id');
        $studentID = $this->input->post('id');
        $university = $this->input->post('university');
        $stdNo = $this->input->post('stdNo');
        $course = $this->input->post('course');
        $duration = $this->input->post('duration');
        $fees = $this->input->post('fees');
        $disabled = $this->input->post('disabled');
      
        
        if ($studentID==""){
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                <strong> Your are missing vital information in your form</strong>									
						</div>');
           
            $this->load->view('student-profile');
            return;           
            
        }
        //check($value,$field,$table)

        $course = array('studentID' => $studentID, 'university' => $university, 'stdNo' => $stdNo, 'course' => $course, 'duration' => $duration, 'fees' => $fees, 'disabled' => $disabled);
        $this->Md->save($course, 'course');
 
            $this->session->set_flashdata('msg', '<div class="alert alert-error">
                <strong> information submitted	</strong>									
						</div>');
            $query = $this->Md->get('id', $studentID, 'student');

            if ($query) {
                $data['profile'] = $query;
            } else {
                $data['profile'] = array();
            }
            echo 'Done';
        //    $this->load->view('student-contact', $data);
            //return;
            // $this->load->view('student-contact',$data);
       
        
        
    }
    
       public function upload() {
           
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $targetPath = getcwd() . '/uploads/';
            $targetFile = $targetPath . $fileName;
            move_uploaded_file($tempFile, $targetFile);
            $id = $this->input->post('id');
// if you want to save in db,where here
// with out model just for example
// $this->load->database(); // load database
// $this->db->insert('file_table',array('file_name' => $fileName));
            $name = $fileName;
            $image = array('image' => $name, 'studentID' =>$id, 'created' => date('Y-m-d H:i:s'),'valid'=>'False');
            $this->Md->save($image, 'application');
            echo '<div class="alert alert-info">
                                                   
                                                <strong>
                                                  application  submitted	</strong>									
						</div>';
        }
    }

    public function contact() {


        $this->load->view('student-contact');
    }
     public function view() {
         
        $this->load->helper(array('form', 'url'));
        $studentID = $this->uri->segment(3);


       $query = $this->Md->get('id', $studentID, 'student');

            if ($query) {
                $data['profile'] = $query;
            } else {
                $data['profile'] = array();
            }

             $query = $this->Md->get('studentID', $studentID, 'application');

            if ($query) {
                $data['application'] = $query;
            } else {
                $data['application'] = array();
            }
                $query = $this->Md->get('studentID', $studentID, 'course');

            if ($query) {
                $data['course'] = $query;
            } else {
                $data['course'] = array();
            }

        $this->load->view('view-student', $data);
    }

    public function edit() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);


        $query = $this->Md->get('id', $id, 'profile');

        if ($query) {
            $data['profile'] = $query;
        } else {
            $data['profile'] = array();
        }

        $this->load->view('admin/edit-profile', $data);
    }

    public function update() {

        $this->load->helper(array('form', 'url'));
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $description = $this->input->post('description');

        // function update($id, $data,$table)
        $profile = array('title' => $title, 'description' => $description);
        $this->MD->update($id, $profile, 'profile');
        $this->session->set_flashdata('msg', '<div class="alert alert-info"> <strong>
                                                  Information updated	</strong>									
						</div>');

        redirect('/profile/edit/' . $id, 'refresh');
        return;
    }

    public function delete() {
        $this->load->helper(array('form', 'url'));
        $id = $this->uri->segment(3);

        $this->MD->remove_table($id, 'profile', 'image');
        //delete($id,$table);
        //remove($id,$table,$column)

        $query = $this->MD->delete($id, 'profile');

        if ($this->db->affected_rows() > 0) {
            $msg = '<span style="color:red">Information Deleted </span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/profile', 'refresh');
        } else {
            $msg = '<span style="color:red">action failed</span>';
            $this->session->set_flashdata('msg', $msg);
            redirect('/profile', 'refresh');
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
