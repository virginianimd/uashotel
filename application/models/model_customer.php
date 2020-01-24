<?php
class Model_customer extends CI_Model{
    
//     function tampil_data()
//   {
//     $query= "SELECT b.barang_id, b.nama_barang, kb.nama, kb.harga
//             FROM barang as b, customer_barang as kb
//             WHERE b.idcustomer=kb.idcustomer"; 
//      return $this->db->query($query);
//   } 
    
  function tampilkan_data()
  {    
    return $this->db->get('customer');
  }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from customer");
  }     
     
    function post(){
        $data=array(
           'nama'=>  $this->input->post('nama'),
           'notelp' => $this->input->post('notelp'),
           'email' => $this->input->post('email'),
           'alamat' => $this->input->post('alamat'),
           'kota' => $this->input->post('kota'),
           'negara' => $this->input->post('negara'),
           'nopasspor' => $this->input->post('nopasspor')

                    );
        $this->db->insert('customer',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'nama'   =>  $this->input->post('nama'),
           'notelp'  =>  $this->input->post('notelp'),
           'email'  =>  $this->input->post('email'),
           'alamat'  =>  $this->input->post('alamat'),
           'kota'  =>  $this->input->post('kota'),
           'negara'  =>  $this->input->post('negara'),
           'nopasspor'  =>  $this->input->post('nopasspor')

                    );
        $this->db->where('idcustomer',$this->input->post('id'));
        $this->db->update('customer',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('idcustomer'=>$id);
        return $this->db->get_where('customer',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('idcustomer',$id);
        $this->db->delete('customer');
    }
}