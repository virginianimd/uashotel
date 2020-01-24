<?php
class Model_jeniskamar extends CI_Model{
    
    function tampil_data()
  {
    $query= "SELECT k.idkamar, k.idjenis, jk.namajenis, jk.hargakamar
            FROM kamar as k, jeniskamar as jk
            WHERE k.idjenis=jk.idjenis"; 
     return $this->db->query($query);
  } 
    
  function tampilkan_data()
  {    
    return $this->db->get('jeniskamar');
  }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from jeniskamar");
  }     
     
    function post(){
        $data=array(
           'namajenis'=>  $this->input->post('namajenis'),
           'hargakamar' => $this->input->post('hargakamar'),
           'stokkamar' => $this->input->post('stokkamar'),
           'fotokamar' => $this->input->post('fotokamar')
                    );
        $this->db->insert('jeniskamar',$data);
    }
    
    
    function edit()
    {
        $data=array(
          'namajenis'=>  $this->input->post('namajenis'),
          'hargakamar' => $this->input->post('hargakamar'),
          'stokkamar' => $this->input->post('stokkamar'),
          'fotokamar' => $this->input->post('fotokamar')
                    );
        $this->db->where('idjenis',$this->input->post('id'));
        $this->db->update('jeniskamar',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('idjenis'=>$id);
        return $this->db->get_where('jeniskamar',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('idjenis',$id);
        $this->db->delete('jeniskamar');
    }
}