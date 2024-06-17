<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Generic extends CI_Model 

{

	function __construct()

	{

		parent::__construct();

	}

    


    public function getalldata($table)

	{

		$this->db->order_by("id", "desc");

		$data = $this->db->get($table);

		return $data->result();

	}

    public function insert($table,$data)
	{   
		return $this->db->insert($table,$data);
	}


    public function get_databy_id($id, $table)

    {
     $this->db->where('id',$id);
    $data = $this->db->get($table);
    return $data->result();
    
    }

    public function update($table,$data,$id){
        $this->db->where('id', $id);
      return $this->db->update($table,$data);
    }



    public function deletedata($id,$table){
        $this->db->where('id', $id);
      return $this->db->delete($table);
        
    }

   





}
