<?php
class Group extends CI_Model {

    function __construct()
  	{
  		parent::__construct();
  	}
		
		private $id;
    private $name;
    private $organization;
    private $address;
    private $city;
    private $state;
    private $zip;
    
    public function create($data)
    {
      $this->set_values($data);
      $group = array(
        'name' => $this->name,
        'organization' => $this->organization,
        'address' => $this->address,
        'city' => $this->city,
        'state' => $this->state,
        'zip' => $this->zip,
      );
      $this->db->insert('groups', $group);
      return $this->db->insert_id();
    }
    
    
    private function set_values($data)
    {
        $this->name = $this->encode($data["name"]);
        $this->organization = $this->encode($data["organization"]);
        $this->address = $this->encode($data["address"]);
        $this->city = $this->encode($data["city"]);
        $this->state = $this->encode($data["state"]);
        $this->zip = (int)$this->encode($data["zip"]);
    }
    
    private function encode($userinput) 
    {
      $clean = urlencode($userinput);
      return $clean;
    }
}
?>
