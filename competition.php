<?php

class Competition {

  public $url;
  public $groupe;
  public $teams;
  public $json;

  function __construct($url) {
    $handle = file_get_contents($url);
    $json=json_decode($handle);
    echo "<h1>".$json->name."</h1>";
    $teams=new Group();
     $teams->view($json);
print_r($teams->groupes);
  }
}

?>
