<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database_model extends CI_Model
{

  /**
   * Menampilkan semua data
   */
  public function show_all_data($table)
  {
    return $this->db->get($table);
  }

  /**
   * Menampilkan data berdasarkan data 
   * yang dipilih
   */
  public function show_where_data($table, $where, $data)
  {
    return $this->db->get_where($table, [$where => $data]);
  }

  /**
   * Input data ke dalam database
   */
  public function insert_data($table, $data)
  {
    return $this->db->insert($table, $data);
  }
}

/* End of file Database_model.php */
/* Location: ./application/models/Database_model.php */