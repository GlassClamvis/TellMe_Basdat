<?php 
class data_admin_model extends CI_model{
    function getAll(){
        $this->db->select('*');
        $this->db->from('tm_pegawai');
        $this->db->join('tm_staff','tm_pegawai.tm_staff_id=tm_staff.tm_staff_id');
        $query = $this->db->get();
        return $query;
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}