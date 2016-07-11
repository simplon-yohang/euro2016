<?php
namespace Competition ;
use Group\Group;

class Competition {

  public $nom_competition;
  public $groupes=[] ;



  function __construct($url) {
    $données = file_get_contents($url);
    $données=json_decode($données);
    $this->nom_competition=$données->name;
    for ($i=0; $i <count($données->groups) ; $i++) {
      $groupe=new Group ($données->groups[$i]->id,$données->groups[$i]->teams);
      array_push($this->groupes,$groupe);
    }
  }
}


?>
