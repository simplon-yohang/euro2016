<?php


include "procedural.php";
echo "<h1>"."rencontres"."</h1>";

for ($z=0; $z <count($json->groups[0]->teams) ; $z++) {
for ($i=$z+1; $i < count($json->groups[0]->teams); $i++) {
  $equipes=$json->groups[0]->teams[$z];
$equipes2=$json->groups[0]->teams[$i];
   echo"<p><form><input>".$equipes."</input>"."vs".$equipes2."<p>";



}
}
print_r($json->groups[0]->teams);
?>
