<?php
// 熊クラス
class Kuma extends Animal{
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

  // コンストラクタ
  function __construct(){
    $this->name = "熊";
    $this->nakigoe = "ガオー！";
  }
}
?>
