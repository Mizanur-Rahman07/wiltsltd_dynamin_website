<?php
class Announcements_model extends CI_Model{


  public function createModel($ann){
    $this->db->insert('tbl_announcements', $ann);
    return $id = $this->db->insert_id();
    }

    
    function getRow($id)
    {
      $this->db->where('announcements_id', $id);
      $row = $this->db->get('tbl_announcements')->row_array();
      return $row;
    }

    function update($id, $ann)
    {
      $this->db->where('announcements_id', $id);
      $this->db->update('tbl_announcements', $ann);
      return $id;
    }


}
