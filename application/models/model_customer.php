<?php
class model_customer extends CI_Model{

  function tampilkan_data()
  {    
    return $this->db->get('customer');
  }
    
  function tampilkan_data_paging()
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

    function cari($id)
    {
        $query= $this->db->get_where('customer',array('nama'=>$id));
        return $query;
    }
}