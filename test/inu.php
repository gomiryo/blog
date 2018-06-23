<?php
// 犬クラス
class Inu extends Animal{
  // 食べるメソッド
  function taberu($val="食べ物"){

    // 食べない時
    if($val != SAKANA){
      echo $this->name. "は". $val. "を食べなかった\n";
      $this->status_bad();
    }

    // 食べる時
    echo $this->name. "は". $val. "を食べた\n";
    $this->status_good();
  }

  function __construct(){
    $this->name = "犬";
    $this->nakigoe = "わん！";
  }
}
?>
