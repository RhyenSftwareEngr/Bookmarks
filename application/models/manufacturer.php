<?php
class Manufacturer extends CI_Model {
    function get_all_manufacturers()
    {
        return $this->db->query("SELECT * FROM Manufacturers")->result_array();
    }
    function get_manufacturer_by_id($manufacturer_id)
    {
        return $this->db->query("SELECT * FROM Manufacturers WHERE id = ?", array($manufacturer_id))->row_array();
    }
    function add_manufacturer($manufacturer)
    {
        $query = "INSERT INTO Manufacturers(name, created_at, updated_at) VALUES (?,?,?)";
        $values = array($manufacturer['name'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s")); 
        return $this->db->query($query, $values);
    }
    function show_result(){

    
        $query = $this->db->query("SELECT * FROM Manufacturers");

        $row = $query->row_array();
        
       
                
                echo $row['name'];
                // echo $row['body'];
      
    
    }
}
?>