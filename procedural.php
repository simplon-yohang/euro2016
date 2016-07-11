<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
function load () {
$handle = file_get_contents("competition.json");
$json=json_decode($handle);
return $json;
}
$json =load();
?>
<h1><?php echo $json->name; ?></h1>
<?php
for ($i=0; $i < count($json->groups); $i++) {
  $id=$json->groups[$i]->id;
  ?>
  <h2><a href=''><?php echo "Groupe:".$id;?></a></h2>
  <?php
  for ($z=0; $z <count($json->groups[$i]->teams) ; $z++) {
    $equipes=$json->groups[$i]->teams[$z];
    ?>
    <li ><?php echo $equipes;?></li>
    <?php
  }
for ($z=0; $z <count($json->groups[$i]->teams) ; $z++) {
for ($a=$z+1; $a < count($json->groups[$i]->teams); $a++) {
  $equipes=$json->groups[$i]->teams[$z];
$equipes2=$json->groups[$i]->teams[$a];
   echo'<p><form action="test.php" method="get">'.$equipes."<input></input>"."vs"."".$equipes2."<input></input><button>validation du pronostic
</button></form><p>";

}
}
}
 ?>
  </body>
</html>
