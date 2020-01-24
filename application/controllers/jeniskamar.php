<?php
class jeniskamar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_jeniskamar');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination'); 
        $config['base_url']   = base_url().'index.php/jeniskamar/index/';
        $config['total_rows'] = $this->model_jeniskamar->tampilkan_data()->num_rows();
        $config['per_page']   = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['record']     = $this->model_jeniskamar->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','jeniskamar/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses jeniskamar
            $this->model_jeniskamar->post();
            redirect('jeniskamar');
        }
        else{
            //$this->load->view('jeniskamar/form_input');
            $this->template->load('template','jeniskamar/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses jeniskamar
            $this->model_jeniskamar->edit();
            redirect('jeniskamar');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_jeniskamar->get_one($id)->row_array();
            //$this->load->view('jeniskamar/form_edit',$data);
            $this->template->load('template','jeniskamar/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_jeniskamar->delete($id);
        redirect('jeniskamar');
    }
}