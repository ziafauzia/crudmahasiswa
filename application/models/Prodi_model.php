<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi_model extends CI_Model
{
    public $table = 'prodi';
    public $id = 'prodi.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
       $this->db->from($this->table);
       $query = $this->db->get();
       return $query->result_array();
    }
    public function getById($id)
    {
       $this->db->from($this->table);
       $this->db->where('id',$id);
       $query = $this->db->get();
       return $query->row_array();
    }
    public function update($where, $data, $file_name)
    {
        $data['gambar'] = $file_name;
        $this->db->update($this->table, $data, $where);
        // Add error handling here if needed
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function insert($data, $file_name)
   {
      $data['gambar'] = $file_name;
      $this->db->insert($this->table, $data);
      // Add error handling here if needed
      if ($this->db->insert_id() > 0) {
         return true;
      } else {
         return false;
      }
   }
    public function delete($id)
    {
        
      $this->db->where($this->id, $id);
      $this->db->delete($this->table);
      return $this->db->insert_id();
    }

}