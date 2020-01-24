<?php
class status extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_status');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination'); 
        $config['base_url']   = base_url().'index.php/status/index/';
        $config['total_rows'] = $this->model_status->tampilkan_data()->num_rows();
        $config['per_page']   = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['record']     = $this->model_status->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','status/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses status
            $this->model_status->post();
            redirect('status');
        }
        else{
            //$this->load->view('status/form_input');
            $this->template->load('template','status/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses status
            $this->model_status->edit();
            redirect('status');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_status->get_one($id)->row_array();
            //$this->load->view('status/form_edit',$data);
            $this->template->load('template','status/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_status->delete($id);
        redirect('status');
    }
}