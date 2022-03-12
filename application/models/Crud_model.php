<?php
class Crud_model extends CI_Model 
{
	
  function saverecords($data)
	{
        $this->db->insert('crud',$data);
        return true;
	}
	/*View*/
  function display_records()
  {
    return $this->db->query( "SELECT * FROM crud")->result_array();
    
  }
	
}