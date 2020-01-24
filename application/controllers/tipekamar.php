<?php
class tipekamar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_tipekamar');
        chek_session();
    }
    
    function index(){
       
        $data['record']     = $this->model_tipekamar->tampilkan_data_paging();
        $this->template->load('template','tipekamar/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses tipe
            $this->model_tipekamar->post();
            redirect('tipekamar');
        }
        else{
            //$this->load->view('tipe/form_input');
            $this->template->load('template','tipekamar/form_input');
        }
    }
    
    function edit()
    {
        if(isset($_POST['submit'])){
            // proses tipe
            $this->model_tipekamar->edit();
            redirect('tipekamar');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->model_tipekamar->get_one($id)->row_array();
            //$this->load->view('tipe/form_edit',$data);
            $this->template->load('template','tipekamar/form_edit',$data);
        }
    }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_tipekamar->delete($id);
        redirect('tipekamar');
    }
}