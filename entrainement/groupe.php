<?php
include_once("equipes.php");

class Groupe  {
  public $equipes=[] ;
  public $nom;
  function __construct($equipes,$nom) {
    $this->nom=$nom;
    for ($i=0; $i <count($equipes) ; $i++) {
      $equipe=new Equipes($equipes[$i]);
      array_push($this->equipes,$equipe);
    }
  }


}

?>
