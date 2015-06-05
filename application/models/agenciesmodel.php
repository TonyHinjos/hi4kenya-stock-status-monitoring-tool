<?php
class agenciesmodel extends CI_Model 
{

	
	function __construct()
    {
       parent::__construct();
        
    }

	
	
	function getAgency(){	
		$this->db->select('*');
		//$this->db->order_by("SUPPLY_CHAIN_AGENCY_ID", "asc");
		$this->db->from('supply_chain_agency');				
		$query = $this->db->get();		
		return $query->result();			
	}

	function getCommodity(){	
		$this->db->select('*');
		//$this->db->order_by("SUPPLY_CHAIN_AGENCY_ID", "asc");
		$this->db->from('commodities');				
		$query = $this->db->get();		
		return $query->result();			
	}
	
	function addAgency($agency=NULL){		
		$this->db->insert('supply_chain_agency', $agency);
		return $this->db->insert_id();						
	}
	
	function addcommodity($commodity=NULL){		
		$this->db->insert('commodities', $commodity);
		return $this->db->insert_id();						
	}


	function getAll() {
		$q = $this->db->get('members');
		 
		if($q->num_rows() > 0){
			foreach ($q->result() as $row){
				$data[] = $row;
			}

			return $data;
		}		
	}

//update model functions


	// Function To Fetch All Students Record
function show_students(){
$query = $this->db->get('supply_chain_agency');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Student Record
function show_student_id($data){
$this->db->select('*');
$this->db->from('supply_chain_agency');
$this->db->where('supply_chain_agency_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}
// Update Query For Selected Student
function update_student_id1($id,$data){
    $this->db->where('supply_chain_agency_id', $id);
    $this->db->update('supply_chain_agency', $data);
}
// Function To Fetch All Students Record
function show_commodities(){
$query = $this->db->get('commodities');
$query_result = $query->result();
return $query_result;
}
// Function To Fetch Selected Student Record
function show_commodities_id($data){
$this->db->select('*');
$this->db->from('commodities');
$this->db->where('commodity_id', $data);
$query = $this->db->get();
$result = $query->result();
return $result;
}

// Update Query For Selected Student
function update_commodity_id($id,$data){
    $this->db->where('commodity_id', $id);
    $this->db->update('commodities', $data);
}

}


?>

















































