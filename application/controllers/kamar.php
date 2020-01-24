<?php
class kamar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('model_kamar'); 
        $this->load->model('model_tipekamar'); 
        $this->load->model('model_gambar');
        chek_session();
    }


    function index() 
    {
        $data['record'] = $this->model_kamar->daftar_kamar();
        $this->template->load('template','jeniskamar/lihat_data',$data);
    } 
     
    function post() 
    {
       $idkamar= $this->uri->segment(3);
        if(isset($_POST['submit'])){
            // proses barang
            $no_kamar       =   $this->input->post('no_kamar');
            $harga_kamar       =   $this->input->post('harga_kamar');
            $fasilitas_kamar       =   $this->input->post('fasilitas_kamar');
            $status_kamar       =   $this->input->post('status_kamar');
            $idtipe       =   $this->input->post('idtipe');
           // $harga      =   $this->input->post('harga');
            $data       = array('no_kamar'=>$no_kamar,
                                'harga_kamar'=>$harga_kamar,
                                'fasilitas_kamar'=>$fasilitas_kamar,
                                'status_kamar'=>$status_kamar,
                                'idtipe'=>$idtipe,
                                //'harga'=>$harga
                            );
             if($idkamar!=0){
                $this->model_kamar->edit($data,$idkamar);
             }else{  
                $this->model_kamar->post($data);
             }               
           
            redirect('kamar');
        }
        else{
            $this->load->model('model_kamar');
           
            //$this->load->view('barang/form_input',$data);
            $data['tipekamar']=$this->model_tipekamar->tampilkan_data_paging();
            if($idkamar!=0){
                $data['kamar']=$this->model_kamar->get_one($idkamar)->row_array();

                $this->template->load('template','jeniskamar/form_edit', $data);
             }else{  
                
                $this->template->load('template','jeniskamar/form_input', $data);
             }  
         
        }
    }
    
    
    // function edit()
    // {
    //    if(isset($_POST['submit'])){
    //         // proses barang
    //         $id         =   $this->input->post('id_kamar');
    //         $no_kamar       =   $this->input->post('no_kamar');
    //         $harga_kamar       =   $this->input->post('harga_kamar');
    //         $fasilitas_kamar       =   $this->input->post('fasilitas_kamar');
    //         $status_kamar       =   $this->input->post('status_kamar');
    //         $idtipe       =   $this->input->post('idtipe');
    //        // $harga      =   $this->input->post('harga');
    //         $data       = array('no_kamar'=>$no_kamar,
    //                             'harga_kamar'=>$harga_kamar,
    //                             'fasilitas_kamar'=>$fasilitas_kamar,
    //                             'status_kamar'=>$status_kamar,
    //                             'idtipe'=>$idtipe,
    //                           //  'harga'=>$harga
    //                         );
    //         $this->model_kamar->edit($data,$id);
    //         redirect('kamar');
    //     }
    //     else{
    //         $id=  $this->uri->segment(3);
    //         $this->load->model('model_kamar');
    //         $data['tipekamar']   =  $this->model_kamar->tampilkan_data()->result();
    //         $data['record']     =  $this->model_kamar->get_one($id)->row_array();
    //         //$this->load->view('barang/form_edit',$data);
    //         $this->template->load('template','jeniskamar/form_edit',$data);
    //     }
    // }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_kamar->delete($id);
        redirect('kamar');
    }

    // GAMBAR

    
    function gambar() 
    {
        $data['id_kamar']=$this->uri->segment(3);
        $data['record'] = $this->model_gambar->daftar_gambar( $data['id_kamar']);
        $this->template->load('template','gambar/kamar_gambar',$data);
    } 
     
    function gambaradd() 
    {
        $id_kamar = $this->input->post('id_kamar');

				
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['file_name'] = 'nama_kamar_gambar'.time();
        
        $this->load->library('upload', $config);

    if($this->upload->do_upload('nama_kamar_gambar')){
        $image=$this->upload->data();

        $data = array(
            'id_kamar' => $id_kamar,
            'nama_kamar_gambar' => $image['file_name']
        );
        $this->model_gambar->post($data);
        redirect('kamar/gambar/'.$id_kamar);
        } else if ( ! $this->upload->do_upload('nama_kamar_gambar')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('gambar/gambaradd1', $error);
        }
        // redirect('kamar/gambar/'.$id_kamar);
        
    } 
     
    function gambardelete() 
    {
        $id_gambar=$this->uri->segment(3);
        $id_kamar=$this->uri->segment(4);
        $this->model_gambar->delete($id_gambar);
        redirect('kamar/gambar/'.$id_kamar);

        
    } 
    // GAMBAR
}