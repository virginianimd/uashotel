<?php
class Model_tipekamar extends CI_Model{
    
    function tampil_data()
  {
    $query= "SELECT k.idkamar, k.idtipe, tk.idtipe, tk.namatipe
            FROM kamar as k,tipekamar as tk
            WHERE k.idtipe=tk.idtipe"; 
     return $this->db->query($query);
  } 
    
  function tampilkan_data()
  {    
    return $this->db->get('tipekamar');
  }
    
  function tampilkan_data_paging()
  {
      return $this->db->query("select * from tipekamar");
  }     
     
    function post(){
        $data=array(
           'namatipe'=>  $this->input->post('namatipe')
                    );
        $this->db->insert('tipekamar',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'namatipe'=>  $this->input->post('namatipe')
                    );
        $this->db->where('idtipe',$this->input->post('idtipe'));
        $this->db->update('tipekamar',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('idtipe'=>$id);
        return $this->db->get_where('tipekamar',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('idtipe',$id);
        $this->db->delete('tipekamar');
    }
}