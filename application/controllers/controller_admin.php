<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper("url");
        $this->load->helper("text");
    }

    public function index(){
	    $this->load->model("Model_table_post_admin");
	    $config['total_rows'] = $this->Model_table_post_admin->count_table_data();
        $config['base_url'] = base_url()."home/index";
        $config['per_page'] = 3;
        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
        $start=$this->uri->segment(3);
        $this->load->library('pagination', $config);
        $data['data']= $this->Model_table_post_admin->listdata($config['per_page'],$start);
        $data['subview'] = 'admin/index';
        $this->load->view("admin/layout/main", $data);
			
		}
        
    public function delete() {
        $this->load->model('Model_table_post_admin');
        $id = $this->input->get('id');
        if($this->Model_table_post_admin->delete($id)){
            redirect(base_url() . "home");
        }
        
    }
    public function edit(){
        $this->load->model('Model_table_post_admin');
        $id = $this->input->get('id');
        $data['dl']=$this->Model_table_post_admin->getById($id);
        $data['subview'] = 'admin/edit_artilcle';
        $this->load->view("admin/layout/main", $data);
        if ($this->input->post("ok")) {
            $data_update = array(
                "tit" => $this->input->post("username"),
                "con" => $this->input->post("pass"),  
            );
            $this->Model_table_post_admin->update($data_update, $this->input->post("stt"));
            redirect(base_url() . "home");
        }
    }
    
    public function insert(){
        if ($this->input->post("ok")) {
            $config['upload_path']='upload/';
            $config['allowed_types']='gif|jpg|jpeg|png';
            $this->load->library("upload",$config);
            $this->upload->initialize($config);
            $img='file';
                
            if($this->upload->do_upload($img)){
                echo "string";
                echo 'Upload Ok';
                $check = $this->upload->data();
                $this->load->library("image_lib");
                $config['image_library'] = 'gd2';
                $config['source_image'] = 'upload/'.$check['file_name'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width']     = 150;
                $config['height']   = 120;
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
            }
            else{
                echo $this->upload->display_errors();
            }
        }
        $data['subview'] = 'admin/add_article';
        $this->load->view('admin/layout/main',$data);
        if ($this->input->post("ok")) {
            
        $this->load->model("Model_table_post_admin");
         $data_insert = array(
               "tit" => $this->input->post("username"),
               "con" => $this->input->post("pass"),
               "img" => $check['file_name'],
        );
        $this->Model_table_post_admin->insert($data_insert);
           
        redirect(base_url() . "home");
        }
    }
	
}