<?php
include_once("compet.php");
include_once("equipes.php");
include_once("groupe.php");
include_once("header.php");

$competition =new Competition ([["suisse","france","espagne","allemagne","italie","pologne"],"A"]);
for ($i=0; $i <count($competition->données) ; $i++) {
echo $competition->données[$i];
echo "<br>";
}
print_r($competition->données);
print_r($competition);
?>
