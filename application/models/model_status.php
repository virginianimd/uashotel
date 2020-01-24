<?php
class Model_status extends CI_Model{
    
//     function tampil_data()
//   {
//     $query= "SELECT k.idkamar, k.idtipe, s.idtipe, s.namastatus
//             FROM kamar as k, status as s
//             WHERE k.idstatus=s.idstatus"; 
//      return $this->db->query($query);
//   } 
    
  function tampilkan_data()
  {    
    return $this->db->get('status');
  }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("select * from status");
  }     
     
    function post(){
        $data=array(
           'namastatus'=>  $this->input->post('namastatus')
                    );
        $this->db->insert('status',$data);
    }
    
    
    function edit()
    {
        $data=array(
           'namastatus'=>  $this->input->post('namastatus')
                    );
        $this->db->where('idstatus',$this->input->post('id'));
        $this->db->update('status',$data);
    }
    
    function get_one($id)
    {
        $param  =   array('idstatus'=>$id);
        return $this->db->get_where('status',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('idstatus',$id);
        $this->db->delete('status');
    }
}