<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$handle = file_get_contents("competition.json");
$json=json_decode($handle);
?>
<h1><?php echo $json->name; ?></h1>
<?php
for ($i=0; $i < count($json->groups); $i++) {
  $groupes=$json->groups[$i]->id;
  ?>
  <h2><a href=''><?php echo "Groupe:".$groupes;?></a></h2>
  <?php
  for ($z=0; $z <count($json->groups[$i]->teams) ; $z++) {
    $equipes=$json->groups[$i]->teams[$z];
    ?>
    <li ><?php echo $equipes;?></li>
    <?php
  }
}
 ?>
  </body>
</html>
