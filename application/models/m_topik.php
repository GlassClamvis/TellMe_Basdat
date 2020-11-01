<?php

class m_topik extends CI_Model
{
    public function tampil_pegawai()
    {
        return $this->db->get('tm_pegawai');
    }
    public function tampil_level()
    {
        return $this->db->get('tm_level');
    }

    public function tampil_topik()
    {
        return $this->db->get('tm_topik');
    }

    function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tampil_sub_topik()
    {
        return $this->db->get('td_sub_topik');
    }
    public function data_topik($a)
    {
        $b = $this->db->query("SELECT tm_topik.tm_topik_id,
        tm_topik.tm_topik_nama,
        tm_topik.tm_pegawai_id,
        tm_topik.tm_level_id,
        tm_level.tm_level_id,
        tm_level.tm_level_nama,
        tm_pegawai.tm_pegawai_id,
        tm_pegawai.tm_pegawai_nama
        FROM tm_topik,tm_level,tm_pegawai
        where tm_topik.tm_level_id=tm_level.tm_level_id and
         tm_topik.tm_pegawai_id=tm_pegawai.tm_pegawai_id
        and tm_topik.tm_topik_id='$a' ");
        return $b;
    }
    public function data_sub_topik($a)
    {
        $b = $this->db->query("SELECT td_sub_topik.td_sub_topik_id,
        td_sub_topik.td_sub_topik_title,
        td_sub_topik.td_sub_topik_content,
        td_sub_topik.tm_pegawai_id,
        td_sub_topik.tm_topik_id
        FROM td_sub_topik,tm_pegawai,tm_topik
        where td_sub_topik.tm_topik_id=tm_topik.tm_topik_id and
         td_sub_topik.tm_pegawai_id=tm_pegawai.tm_pegawai_id
        and td_sub_topik.td_sub_topik_id='$a' ");
        return $b;
    }
    public function content_topik()
    {
        $this->db->query("SELECT tm_topik.tm_topik_id,
        tm_topik.tm_topik_nama,
        tm_topik.tm_topik_create_at,
        tm_topik.tm_pegawai_id,
        tm_topik.tm_level_id,
        tm_level.tm_level_nama,
        tm_pegawai.tm_pegawai_nama
        FROM tm_topik 
        INNER JOIN tm_level ON tm_level.tm_level_id=tm_topik.tm_level_id
        INNER JOIN tm_pegawai ON tm_pegawai.tm_pegawai_id=tm_topik.tm_pegawai_id");
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_topik($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function detail_data_topik($tm_topik_id = NULL)
    {
        $query = $this->db->get_where('tm_topik', array('tm_topik_id' => $tm_topik_id))->row();
        return $query;
    }
    public function detail_data_sub_topik($td_sub_topik_id = NULL)
    {
        $query = $this->db->get_where('td_sub_topik', array('td_sub_topik_id' => $td_sub_topik_id))->row();
        return $query;
    }
}
