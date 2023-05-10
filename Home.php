<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->library('session');
        $this->load->helper('url_helper');
    }

    public function nav(){

        $this->load->view('front/nav');
    }

    public function index(){

        $this->load->view('front/index');
    }

    

    public function add(){

        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
        $config['file_name'] = uniqid();
        $config['max_size'] = '100000';
        $config['max_width'] = '100000';
        $config['max_height'] = '100000';
        $config['overwrite'] = true;

        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('image')){
            $data['error'] = $this->upload->display_error();
            $this->session->set_flashdata('error','Data Error....!');
            redirect(base_url('home/index',$data));
        }
        else{
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'number' => $this->input->post('number'),
            'password' => $this->input->post('password'),
            'image' => $this->upload->data('file_name')
        );

        $ins = $this->db->insert('img',$data);
        if($ins){
            $this->session->set_flashdata('success','Data Added Successfull.....');
            redirect(base_url('Home/index'));
        }else{
            $this->session->set_flashdata('erroe','Data Error Successfull.....');
            redirect(base_url('Home/index'));
        }
        }
        }
        
        public function select()
        {
            $data['abc'] = $this->db->get('img')->result_array();
            $this->load->view('front/select',$data);

        }

        public function edit($id)
        {
           $this->load->helper('form');
           $this->load->library('form_validation');
    

          $query = $this->db->get_where('img', array('id' => $id))->row_array();
        
          $this->form_validation->set_rules('name', 'Name', 'required');
 
          if ($this->form_validation->run() === FALSE)
          {
          $data['img'] = $this->db->get_where('img',array('id' => $id))->row();
          
          $this->load->view('front/edit',$data);
         
 
          }
        else
        {
           $imagename =$query['image'];
           if($_FILES['image']['name'] != "")
          {
                  $config['upload_path']          = './uploads/';
                  $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc';
                  $config['file_name'] = uniqid();
                  $config['max_size']             = 100000;
                  $config['max_width']            = 100000;
                  $config['max_height']           = 100000;

                  $this->load->library('upload', $config);

                  if ( ! $this->upload->do_upload('image'))
                  {
                          
                      $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

                      $error = array('error' => $this->upload->display_errors());

                      $this->load->view('upload', $error);
                  }
                  else
                  {
            $imagename =  $this->upload->data('file_name');
                      
                  }
          }
             $data = array(
             	'image' => $imagename,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'number' => $this->input->post('number'), 
				'password' => $this->input->post('password')
				
			);
           

            $this->db->where('id',$id);
            $this->db->update('img', $data);
            redirect(base_url('Home/select'));

           }
     }

     public function delete($id){
        $this->db->where('id',$id);
        $del = $this->db->delete('img');

        
        if($del){
        $this->session->set_flashdata('success','Data Deleted Successfull....!');
        redirect(base_url('Home/select'));
        }else{
            $this->session->set_flashdata('error','Data Error Successfull....!');
        redirect(base_url('Home/index'));
        }

    }


}