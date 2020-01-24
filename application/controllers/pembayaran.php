<?php
class pembayaran extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pembayaran');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination'); 
        $config['base_url']   = base_url().'index.php/pembayaran/index/';
        $config['total_rows'] = $this->model_pembayaran->tampilkan_data()->num_rows();
        $config['per_page']   = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     = $this->pagination->create_links();
        $halaman            = $this->uri->segment(3);
        $halaman            = $halaman==''?0:$halaman;
        $data['record']     = $this->model_pembayaran->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','pembayaran/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses pembayaran
            $this->model_pembayaran->post();
            redirect('pembayaran');
        }
        else{
            //$this->load->view('pembayaran/form_input');
            $this->template->load('template','pembayaran/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses pembayaran
            $this->model_pembayaran->edit();
            redirect('pembayaran');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_pembayaran->get_one($id)->row_array();
            //$this->load->view('pembayaran/form_edit',$data);
            $this->template->load('template','pembayaran/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_pembayaran->delete($id);
        redirect('pembayaran');
    }
}