<?php
class model_reservasi extends ci_model{
    
    function daftar_reservasi()
    {
        $this->db->select('r.*, k.*, c.*, tk.namatipe');
        $this->db->from('reservasi r');
        $this->db->join('kamar k','k.id_kamar=r.id_kamar');
        $this->db->join('customer c','c.idcustomer=r.idcustomer');
        $this->db->join('tipekamar tk','tk.idtipe=k.idtipe');
        $result=$this->db->get();
        return $result;
    }

    function post($data)
    {
        $this->db->insert('reservasi',$data);

    }
    
    function get_one($id)
    {
        $this->db->select('r.*, k.*, c.*, tk.namatipe');
        $this->db->from('reservasi r');
        $this->db->join('kamar k','k.id_kamar=r.id_kamar');
        $this->db->join('customer c','c.idcustomer=r.idcustomer');
        $this->db->join('tipekamar tk','tk.idtipe=k.idtipe');
        $this->db->where('id_reservasi',$id);
        $result=$this->db->get();
        return $result;
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_reservasi',$id);
        $this->db->update('reservasi',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_reservasi',$id);
        $this->db->delete('reservasi');
    }

    function update_checkin($id, $status)
    {
        $this->db->set('status_reservasi', $status);
        $this->db->where('id_reservasi',$id);
        $this->db->update('reservasi');
    }

    
    function ReservasiId($id)
    {
        $this->db->select('r.*, k.*, c.*, tk.namatipe');
        $this->db->from('reservasi r');
        $this->db->join('kamar k','k.id_kamar=r.id_kamar');
        $this->db->join('customer c','c.idcustomer=r.idcustomer');
        $this->db->join('tipekamar tk','tk.idtipe=k.idtipe');
        $this->db->where('id_reservasi',$id);
        $result=$this->db->get();
        return $result;
    }
 

}