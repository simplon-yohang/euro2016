<?php
namespace Group;

use Equipe\Equipe;
include_once("equipes.php");


class Group  {

  public $id_equipes;
  public $tab_equipes=[] ;
  

  function __construct($id_equipes,$equipes) {
    $this->id_equipes=$id_equipes;


    for ($i=0; $i <count($equipes) ; $i++) {
      $equipe=new Equipe($equipes[$i]);
      array_push($this->tab_equipes,$equipe);
    }
  }
}

?>
