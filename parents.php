<?php
require_once("db_controller.php");

class Parents{
private $parents = array();
//hooc the DAO HERE

public function getAllParents(){
$query = "SELECT * FROM parent";
$dbcontroller = new DBController();
$this->parents = $dbcontroller()->executeSelectQuery($query);
return $this->parents;

}
}

?>