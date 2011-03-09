<?php
class Sponsor extends CI_Model {

    function __construct()
  	{
  		parent::__construct();
  	}
		
		private $id;
		private $group_id;
    private $name;
    private $email;
    private $phone;
    
    
    public function create($data, $group_id)
    {
      $this->set_values($data, $group_id);
      $sponsor = array(
        'group_id' => $this->group_id,
        'name' => $this->name,
        'email' => $this->email,
        'phone' => $this->phone,
      );
      $this->db->insert('sponsors', $sponsor);
      return $this->db->insert_id();
    }
    
    
    private function set_values($data, $group_id)
    {
        $this->group_id = $group_id;
        $this->name = $this->encode($data["name"]);
        $this->email = $this->encode($data["email"]);
        $this->phone = (int)$this->encode($data["phone"]);
    }
    
    private function encode($userinput) 
    {
      $clean = urlencode($userinput);
      return $clean;
    }
}
?>
