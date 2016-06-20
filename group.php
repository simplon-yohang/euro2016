<?php

class Group  {
public $test="test";
public $groupes[];
  public function view ($json) {

    for ($i=0; $i < count($json->groups); $i++) {
      $groupe=$json->groups[$i]->id;
      $groupe=array_push()$this->groupes[];
      ?>
      <h2><a href=''><?php echo "Groupe:".$groupes;?></a></h2>
      <?php
      for ($z=0; $z <count($json->groups[$i]->teams) ; $z++) {
        $equipes=$json->groups[$i]->teams[$z];
        ?>
        <li >
<?php echo $equipes;?>
</li>
        <?php
      }
    }
return $this->groupes;
  }
}
  ?>
