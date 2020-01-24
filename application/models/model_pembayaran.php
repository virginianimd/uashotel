<?php
class Model_pembayaran extends CI_Model{
    
//     function tampil_data()
//   {
//     $query= "SELECT k.idkamar, k.idtipe, s.idtipe, s.namametode
//             FROM kamar as k, status as s
//             WHERE k.idmetode=s.idmetode"; 
//      return $this->db->query($query);
//   } 
    
  function tampilkan_data()
  {    
    return $this->db->get('metodepembayaran');
  }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from metodepembayaran");
  }     
     
    function post(){
        $data=array(
           'namametode'=>  $this->input->post('namametode')
                    );
        $this->db->insert('metodepembayaran',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'namametode'=>  $this->input->post('namametode')
                    );
        $this->db->where('idmetode',$this->input->post('id'));
        $this->db->update('metodepembayaran',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('idmetode'=>$id);
        return $this->db->get_where('metodepembayaran',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('idmetode',$id);
        $this->db->delete('metodepembayaran');
    }
}