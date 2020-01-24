<?php
class model_kamar extends ci_model{
    
    function daftar_kamar()
    {
        $this->db->select('k.*, kk.namatipe');
        $this->db->from('kamar k');
        $this->db->join('tipekamar kk','kk.idtipe=k.idtipe');
        $result=$this->db->get();
        return $result;
    }

    function post($data)
    {
        $this->db->insert('kamar',$data);

    }
    
    function get_one($id)
    {
        $param  =   array('id_kamar'=>$id);
        return $this->db->get_where('kamar',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kamar',$id);
        $this->db->update('kamar',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_kamar',$id);
        $this->db->delete('kamar');
    }
}