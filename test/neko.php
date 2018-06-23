<?php
// 猫クラス
class Neko extends Animal{
  // 食べる
  function taberu($val="食べ物"){
    if($val === SAKANA){
      echo $this->name. "は". $val. "を食べた\n";
      $this->status_good();
    }else{
      echo $this->name. "は". $val. "を食べなかった\n";
      $this->status_bad();
    }
  }

  function __construct(){
    $this->name = "猫";
    $this->nakigoe = "にゃー！";
  }
}
?>
