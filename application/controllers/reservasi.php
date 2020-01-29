<?php
class reservasi extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('model_reservasi'); 
        $this->load->model('model_kamar');
        $this->load->model('model_customer');
        chek_session();
    }


    function index() 
    {
        $data['record'] = $this->model_reservasi->daftar_reservasi();
        $this->template->load('template','reservasi/lihat_data',$data);
    } 
     
    function post() 
    {
       $id_reservasi= $this->uri->segment(3);
        if(isset($_POST['submit'])){
            // proses barang
            $tgl_reservasi_masuk    =   $this->input->post('tgl_reservasi_masuk');
            $tgl_reservasi_keluar   =   $this->input->post('tgl_reservasi_keluar');
            $lama                   =   $this->input->post('lama');
            $id_kamar               =   $this->input->post('id_kamar');
            $idcustomer             =   $this->input->post('idcustomer');
            $status_reservasi       =   $this->input->post('status_reservasi');
           // $harga      =   $this->input->post('harga');
            $data       = array('tgl_reservasi_masuk'=>$tgl_reservasi_masuk,
                                'tgl_reservasi_keluar'=>$tgl_reservasi_keluar,
                                'lama'=>$lama,
                                'id_kamar'=>$id_kamar,
                                'idcustomer'=>$idcustomer,
                                'status_reservasi'=>$status_reservasi,
                                //'harga'=>$harga
                            );
             if($id_reservasi!=0){
                $this->model_reservasi->edit($data,$id_reservasi);
             }else{  
                $this->model_reservasi->post($data);
             }               
           
            redirect('reservasi');
        }
        else{
            $this->load->model('model_reservasi');
            $this->load->model('model_kamar');
            $this->load->model('model_customer');
          
            //$this->load->view('barang/form_input',$data);
            $data['kamar']=$this->model_kamar->daftar_kamar();
            $data['customer']=$this->model_customer->tampilkan_data_paging();
            if($id_reservasi!=0){
                $data['reservasi']=$this->model_reservasi->get_one($id_reservasi)->row_array();

                $this->template->load('template','reservasi/form_edit', $data);
             }else{  
                
                $this->template->load('template','reservasi/form_input', $data);
             }  
         
        }
    }
    function status() 
    {
       $id['id_reservasi'] 		= $this->uri->segment(3);
       $up['status_reservasi'] 	= $this->uri->segment(4);
       $this->model_reservasi->update_checkin($id,$up);
       $this->session->set_flashdata('in','OK');

    }

    function new_reservasi_in(){
      $id['id_reservasi'] 		= $this->uri->segment(3);
      $up['status_reservasi'] 	= $this->uri->segment(4);
      $this->db->update("reservasi",$up,$id);
      $query = $this->model_reservasi->ReservasiId($id['id_reservasi'] );
      foreach ($query->result_array() as $value) {
          $id_kamar['id_kamar'] = $value['id_kamar'];
      }
      $up2['status_kamar'] 	= $this->uri->segment(4);
      $this->db->update("kamar",$up2,$id_kamar);     
      $this->session->set_flashdata('in','OK');
      redirect('reservasi');
    }

    function new_reservasi_out(){
        $data['id_reservasi'] 		= $this->uri->segment(3);
        $data['record']=  $this->model_reservasi->get_one(  $data['id_reservasi'] )->row_array();
        // $data['reservasi']=  $this->model_reservasi->ReservasiId($id['id_reservasi']);

        // foreach ($query->result_array() as $value) {
        //     $data['id_reservasi'] 			= $value['id_reservasi'];
        //     $data['tgl_reservasi_masuk']	= $value['tgl_reservasi_masuk'];
        //     $data['tgl_reservasi_keluar'] 	= $value['tgl_reservasi_keluar'];
        //     $data['id_kamar'] 				= $value['id_kamar'];
        //     $data['lama'] 			    	= $value['lama'];
        //     $data['harga_kamar'] 			= $value['harga_kamar'];
        //     $data['status_kamar'] 			= $value['status_kamar'];
        //     $data['waktu'] 					= $value['waktu'];
        // }
        $data['status_reservasi']	= $this->uri->segment(4);

        $this->load->view('reservasi/reservasi_out',$data);
        }

    function new_reservasi_out_simpan(){
        $id['id_reservasi'] 		= $this->input->post("id_reservasi");
        $up['status_reservasi'] 	= $this->input->post("status_reservasi");
        $this->db->update("reservasi",$up,$id);


        //Update Status Kamar
        $id_kamar['id_kamar'] 	= $this->input->post("id_kamar");
        $up2['status_kamar'] 	= 0;
        $this->db->update("kamar",$up2,$id_kamar);


        //Insert into reservasi pembayaran
        $in['tgl_pembayaran'] 		= date('Y-m-d');
        $in['nominal_pembayaran'] 	= $this->input->post("total_bayar");
        $in['uang_bayar'] 			= $this->input->post("uang_bayar");
        $in['kembalian'] 			= $this->input->post("kembalian");
        $in['id_reservasi'] 		= $this->input->post("id_reservasi");
        $this->db->insert("reservasi_pembayaran",$in);
            
                    
        $this->session->set_flashdata('out','OK');
        redirect("reservasi");

    }
}