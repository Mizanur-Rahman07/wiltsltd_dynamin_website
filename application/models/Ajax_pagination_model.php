
<?php
class Ajax_pagination_model extends CI_Model
{
 function count_all()
 {
  $query = $this->db->get("tbl_task");
  return $query->num_rows();
 }

 function fetch_details($limit, $start)
 {
  $output = '';
  $this->db->select("*");
  $this->db->from("tbl_task");
  $this->db->order_by("task_name", "ASC");
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query->num_rows();
 }
}

