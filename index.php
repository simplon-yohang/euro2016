<?php
require "header.php";
require "group.php";
require "competition.php" ;
use Competition\Competition;

$competition=new Competition("competition.json");
// print_r($competition);


if (isset($_POST['groupe'])){}
else {}
function view($competition) {

  echo "<h1>".$competition->nom_competition ."</h1>";
  for ($i=0; $i <count($competition->groupes) ; $i++) {
echo "<div class= 'pool'>";
    echo "<a href=''>".$competition->groupes[$i]->id_equipes."</a>";
echo "</br>";
for ($a=0; $a <count($competition->groupes[$i]->tab_equipes) ; $a++) {
echo $competition->groupes[$i]->tab_equipes[$a]->nom_equipe;
echo "</br>";
}
echo "</div>";
  }


}

view($competition);
?>
