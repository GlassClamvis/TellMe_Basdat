<?php 
class m_data_admin extends CI_model{
    
    function getAll(){
        $this->db->select('*');
        $this->db->from('tm_pegawai');
        $this->db->join('tm_staff','tm_pegawai.tm_staff_id=tm_staff.tm_staff_id');
        $this->db->join('tm_login','tm_pegawai.tm_pegawai_id=tm_login.tm_pegawai_id');
        $query = $this->db->get();
        return $query;
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
    function edit_data($where,$table){
        $query = $this->db->get_where($table,$where);
        return $query;
    }
    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function max_data(){
        $query = $this->db->query("SELECT MAX(tm_pegawai_id) as max_id FROM tm_pegawai"); 
         $row = $query->row_array();
        $max_id = $row['max_id']; 

        // $this->db->select_max('tm_pegawai_id');
        // $query = $this->db->get('tm_pegawai');
        return $max_id;
    }

    function jum_admin(){   
        $this->db->select('*');
        $this->db->from('tm_pegawai');
        $this->db->where('tm_staff_id = 1');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
    function jum_teknisi(){   
        $this->db->select('*');
        $this->db->from('tm_pegawai');
        $this->db->where('tm_staff_id = 2');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
    function jum_dosen(){   
        $this->db->select('*');
        $this->db->from('tm_pegawai');
        $this->db->where('tm_staff_id = 3');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
    function jum_mahasiswa(){   
        $this->db->select('*');
        $this->db->from('tm_mahasiswa');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }
}