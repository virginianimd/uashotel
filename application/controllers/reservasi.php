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
                                'status_reservasis'=>$status_reservasi,
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
          
            //$this->load->view('barang/form_input',$data);
            $data['kamar']=$this->model_kamar->tampilkan_data_paging();
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
  }

// <?php
// class reservasi extends CI_Controller{
  
//   function __construct() {
//       parent::__construct();
//       $this->load->model('model_reservasi'); 
//       chek_session();
//   }


//   function index() 
//   {
//       $data['record'] = $this->model_reservasi->daftar_kamar();
//       $this->template->load('template','reservasi/lihat_data',$data);
//   } 
  
//   function post() 
//   {
//       if(isset($_POST['submit'])){
//           // proses reservasi
//           $customer   =   $this->input->post('customer');
//           $checkin    =   $this->input->post('checkin');
//           $checkout   =   $this->input->post('checkout');
//           $tipepaket  =   $this->input->post('tipepaket');
//           $metode     =   $this->input->post('metode');
//           $pembayaran =   $this->input->post('pembayaran');
//           $total_bayar=   $this->input->post('total_bayar');
//           $pesan      =   $this->input->post('pesan');
//         // $harga    =   $this->input->post('harga');
//           $data       = array('idcustomer'=>$customer,
//                               'checkin'=>$checkin,
//                               'checkout'=>$checkout,
//                               'checkin'=>$checkin,
//                               'idpaket'=>$tipepaket,
//                               'idmetode'=>$pembayaran,
//                               'total_bayar'=>$total_bayar,
//                               'pesan'=>$pesan,
//                               //'harga'=>$harga
//                           );
//           $this->model_reservasi->post($data);
//           redirect('reservasi');
//       }
//       else{
//           $this->load->model('model_customer');
//           $data['customer']=  $this->model_customer->tampilkan_data_customer()->result();
//           $this->load->model('model_tipepaket');
//           $data['tipepaket']=  $this->model_tipepaket->tampilkan_data_tipepaket()->result();
//           //$this->load->view('reservasi/form_input',$data);
//           $this->template->load('template','reservasi/form_input',$data);
//       }
//   }
  
  
//   function edit()
//   {
//     if(isset($_POST['submit'])){
//           // proses reservasi
//           $id         =   $this->input->post('id');
//           $customer   =   $this->input->post('customer');
//           $checkin    =   $this->input->post('checkin');
//           $checkout   =   $this->input->post('checkout');
//           $tipepaket  =   $this->input->post('tipepaket');
//           $metode     =   $this->input->post('metode');
//           $pembayaran =   $this->input->post('pembayaran');
//           $total_bayar=   $this->input->post('total_bayar');
//           $pesan      =   $this->input->post('pesan');
//         // $harga      =   $this->input->post('harga');
//           $data       = array('idcustomer'=>$customer,
//                               'checkin'=>$checkin,
//                               'checkout'=>$checkout,
//                               'checkin'=>$checkin,
//                               'idpaket'=>$tipepaket,
//                               'idmetode'=>$pembayaran,
//                               'total_bayar'=>$total_bayar,
//                               'pesan'=>$pesan,
//                             //  'harga'=>$harga
//                           );
//           $this->model_reservasi->edit($data,$id);
//           redirect('reservasi');
//       }
//       else{
//           $id=  $this->uri->segment(3);
//           $this->load->model('model_customer');
//           $this->load->model('model_tipepaket');
//           $data['customer']   =  $this->model_customer->tampilkan_data_customer()->result();
//           $data['tipepaket']   =  $this->model_tipepaket->tampilkan_data_tipepaket()->result();
//           $data['record']     =  $this->model_reservasi->get_one($id)->row_array();
//           //$this->load->view('reservasi/form_edit',$data);
//           $this->template->load('template','reservasi/form_edit',$data);
//       }
//   }
  
  
//   function delete()
//   {
//       $id=  $this->uri->segment(3);
//       $this->model_reservasi->delete($id);
//       redirect('reservasi');
//   }
// }