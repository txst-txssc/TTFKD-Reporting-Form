<?php
class Report extends CI_Model {

    function __construct()
  	{
  		parent::__construct();
  	}
		
		private $id;
    private $group_id;
    private $name;
    private $date;
    private $location;
    private $description;
    private $adults_reached;
    private $youth_reached;
      
    
   public function create($data, $group_id)
    {
      $this->set_values($data, $group_id);
      $report = array(
        'group_id' => $this->group_id,
        'name' => $this->name,
        'date' => $this->date,
        'location' => $this->location,
        'description' => $this->description,
        'adults_reached' => $this->adults_reached,
        'youth_reached' => $this->youth_reached,
      );
      $this->db->insert('reports', $report);
      return $this->db->insert_id();
    }


    private function set_values($data, $group_id)
    {
        $this->group_id = $group_id;
        $this->name = $this->encode($data["name"]);
        $this->date = $this->make_date($data["date"]);
        $this->location = $this->encode($data["location"]);
        $this->description = $this->encode($data["description"]);
        $this->adults_reached = (int)$this->encode($data["adults_reached"]);
        $this->youth_reached = (int)$this->encode($data["youth_reached"]);
    }
      
    private function encode($userinput) 
    {
      $clean = htmlentities($userinput, ENT_QUOTES);
      return $clean;
    }
    
    private function make_date($userinput)
    {    
      $date = $userinput;//$date = 'dd-mm-yyyy' format
      $list = explode('-', $date);
      $mk = mktime(0, 0, 0, $list[0], $list[1], $list[2]);
      $clean = strftime('%Y-%m-%d',$mk);
      return $clean;
    }
}
?>
