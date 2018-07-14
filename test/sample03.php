<?php
session_start();

// 初期化
class Rpg{
  var $lv = 1;
  var $hp = 100;
  var $exp = 10;
  var $mes = "修行をしてください";

  function run(){

    $this->session_start();

    $e = rand(1, 9);
    $this->exp += $e;

    if($this->exp > 100){
      $this->mes = "Level up!";
      $this->exp = 0;
      $this->lv += 1;
    }else{
      $this->mes = $e."exp get!";
    }

    $this->session_end();
  }

  private function session_start(){
    var_dump($_SESSION);
    if( session_status() === PHP_SESSION_ACTIVE){
      $this->lv = $_SESSION["lv"];
      $this->hp = $_SESSION["hp"];
      $this->exp = $_SESSION["exp"];
    }
  }

  private function session_end(){
    $_SESSION["lv"] = $this->lv;
    $_SESSION["hp"] = $this->hp;
    $_SESSION["exp"] = $this->exp;
    var_dump($_SESSION);
  }

}

$rpg = new Rpg();
$rpg->run();

?>
<html>
  <body>
    LV:<?=$rpg->lv?><br>
    HP:<?=$rpg->hp?><br>
    EXP:<?=$rpg->exp?><br>
    mes:<?=$rpg->mes?><br>
    <form action="sample03.php" method="post">
      <input type="hidden" value="exp">
      <input type="submit" value="修行">
    </form>
  </body>
</html>
