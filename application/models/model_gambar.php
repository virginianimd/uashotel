<?php
class model_gambar extends ci_model{
    
    function daftar_gambar($idkamar)
    {
        $this->db->select('*');
        $this->db->from('kamar_gambar');
        $this->db->where('id_kamar',$idkamar);
        $result=$this->db->get();
        return $result;
    }

    function post($data)
    {
        $this->db->insert('kamar_gambar',$data);

    }
    
    function get_one($id)
    {
        $param  =   array('id_kamar_gambar'=>$id);
        return $this->db->get_where('kamar_gambar',$param);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kamar_gambar',$id);
        $this->db->update('kamar_gambar',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_kamar_gambar',$id);
        $this->db->delete('kamar_gambar');
    }
}