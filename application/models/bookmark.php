<?php
class bookmark extends CI_Model {
    function get_all_manufacturers()
    {
        return $this->db->query("SELECT * FROM Manufacturers")->result_array();
    }
    function add_manufacturer($manufacturer)
    {
        $query = "INSERT INTO Manufacturers(Name,url created_at, updated_at) VALUES (?,?,?)";
        $values = array($manufacturer['name'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }
    function saverecords($data)
	{
        $this->db->insert('bookmark',$data);
        return true;
	}
	/*View*/
    function display_records()
  {
    $query=$this->db->get("bookmark");
    return $query->result();
  }
}
?>