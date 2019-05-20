<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Apply_now extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();

        $this->load->library('form_validation');
//        $this->form_validation->CI =& $this;
        $this->load->model('apply_model','apply');
        $this->load->model('crud_model', 'crud');

    }

    public function  index()
    {

        $this->load->view('header');
        $this->load->view('other_header');
        $this->load->view('job/apply');
        $this->load->view('footer');


    }

    public function form()
    {
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('form_validation');
        if($this->input->post())
        {

//            print_r($this->input->post());
//            exit;
            $job_id = $this->input->post('job_id');
            $this->form_validation->set_rules('firstname', 'firstname','required' );
            $this->form_validation->set_rules('lastname', 'lastname', 'required');
            $this->form_validation->set_rules('email', 'email');
            $this->form_validation->set_rules('phone', 'phone');
            $this->form_validation->set_rules('country', 'country');
            $this->form_validation->set_rules('city', 'city');
            $this->form_validation->set_rules('address', 'address');
            $this->form_validation->set_rules('joblocation', 'joblocation');
            $this->form_validation->set_rules('jobtype', 'jobtype');
            $this->form_validation->set_rules('jobrole', 'jobrole');
            $this->form_validation->set_rules('qualification', 'qualification');
            $this->form_validation->set_rules('experience', 'experience');
            $this->form_validation->set_rules('careerlevel', 'careerlevel');
            $this->form_validation->set_rules('passportno', 'passportno');







            if ($this->form_validation->run()) {


                $insert['firstname']=  $this->input->post('firstname');
                $insert['lastname'] = $this->input->post('lastname');
                $insert['email'] = $this->input->post('email');
                $insert['phone'] = $this->input->post('phone');
                $insert['country']= $this->input->post('country');
                $insert['city'] = $this->input->post('city');
                $insert['address']= $this->input->post('address');
                $insert['joblocation'] = $this->input->post('joblocation');
                $insert['jobtype']= $this->input->post('jobtype');
                $insert['jobrole'] = $this->input->post('jobrole');
                $insert['qualification']= $this->input->post('qualification');
                $insert['experience'] = $this->input->post('experience');
                $insert['careerlevel']= $this->input->post('careerlevel');
                $insert['passportno'] = $this->input->post('passportno');




                $rand = md5(rand());
                $cv=$rand. str_replace(" ","",$_FILES['cv']['name']);
                $cvtmp=$_FILES['cv']['tmp_name'];


                $image=$rand. str_replace(" ","",$_FILES['image']['name']);
                $imagetmp=$_FILES['image']['tmp_name'];


                $image=$rand. str_replace(" ","",$_FILES['image']['name']);
                $imagetmp=$_FILES['image']['tmp_name'];



                if($job_id == "0")
                {



                    if($_FILES['image']['name'] !="")
                    {
                        $insert['image']= $image;
                    }
                    if($_FILES['image']['name'] !="")
                    {
                        $insert['image']= $image;
                    }
                    if($_FILES['cv']['name'] !="")
                    {
                        $insert['cv']= $cv;
                    }

                    $insert['publish_status'] = "1";
                    $insert['delete_status'] = "0";
                    $insert['created'] = date('Y-m-d:H:i:s');
                    $result = $this->apply->insert_package($insert);

                    if($result)
                    {
                        //code to add tags



                        //code to upload package files
                        $folder_path = 'uploads/package/';
                        $DIR = mkdir($folder_path . $result, 0777, true);

                        if(isset($DIR))
                        {
                            $new_path = $folder_path.$result."/";

                            move_uploaded_file($cvtmp,$new_path.$cv);
                            move_uploaded_file($imagetmp,$new_path.$image);
                            move_uploaded_file($imagetmp,$new_path.$image);
                        }

                        else{
                            $new_path = $folder_path.$result."/";

                            move_uploaded_file($cvtmp,$new_path.$cv);
                            move_uploaded_file($imagetmp,$new_path.$image);
                            move_uploaded_file($imagetmp,$new_path.$image);
                        }




                        if($result)
                        {
                            $this->session->set_flashdata('success','Your Application Submitted Successfully');
                            redirect('apply_now/form');
                        }
                        else{
                            $this->session->set_flashdata('error','Unable to Apply. please,try again');
                            redirect('apply_now/form');
                        }

                    }
                }

                else{

                    $image_new = $_FILES['image']['name'];
                    $image_new = $_FILES['image']['name'];
                    $cv_new = $_FILES['cv']['name'];


                    $folder_path = 'uploads/package/'.$job_id;

                    if(! is_dir($folder_path))
                    {
                        mkdir($folder_path, 0777, true);
                    }
                    $new_path = $folder_path."/";


                    if($image_new !="")
                    {


                        $filename = $detail['image'];
                        @unlink($new_path.$filename);
                        move_uploaded_file($imagetmp,$new_path.$image);
                        $insert['image']= $image;
                    }
                    if($image_new !="")
                    {

                        $filename1 = $detail['image'];
                        @unlink($new_path.$filename1);
                        move_uploaded_file($imagetmp,$new_path.$image);
                        $insert['image']= $image;
                    }
                    if($cv_new !="")
                    {

                        $filename2 = $detail['cv'];
                        @unlink($new_path.$filename2);
                        move_uploaded_file($cvtmp,$new_path.$cv);

                        $insert['cv']= $cv;
                    }

                    $results = $this->apply->update_package($insert, $job_id);

                    if($results)
                    {
                        //code to create package log

                        $log['module_title'] =  $insert['package_name'];
                        $log['action_id'] = "2";
                        $this->create_package_log($log);

                        //code to add tags
                        $this->add_tags($job_id, $new_tags);





                        $this->session->set_flashdata('success','Apply is Updated Successfully');
                        redirect('apply_now/form');
                    }
                    else{
                        $this->session->set_flashdata('error','Unable to Update Apply');
                        redirect('apply_now/form');
                    }

                }

            }
        }










        $data['scripts'] = array('themes/js/form-validator');

        $data['title'] = "Add/Edit Jobs";




        $this->load->view('header', $data);
        $this->load->view('other_header');
        $this->load->view('job/apply');
        $this->load->view('footer');



    }















}