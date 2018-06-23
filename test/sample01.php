<?php

define("RINGO", "りんご");
define("SAKANA", "魚");
define("NIKU", "肉");

class animal{
  // プロパティ
  var $hair = ""; // 毛
  protected $width = ""; // 幅
  var $type = ""; // 性格
  var $height = ""; // 高さ
  var $nakigoe = "ギャース！"; // 鳴き声
  protected $status = "普通"; //状態
  var $name = "動物"; //名前

  // 食べるメソッド・関数
  public function taberu($val="食べ物"){
    echo $this->name. "が". $val. "を食べた。";
  }

  // 鳴くメソッド
  public function naku(){
    echo $this->name. "が". $this->nakigoe. "と鳴いた\n"; 
  }

  // 状態を返す(ゲッター)
  public function get_status(){
    return $this->status;
  }

  // 状態を戻る(セッター)
  public function set_status($val){
    $this->status = $val;
  }

  protected function status_good(){
    $this->status = "良い";
  }

  protected function status_bad(){
    $this->status = "悪い";
  }

}

// 熊クラス
class Kuma extends Animal{
  // 食べる
  function taberu($val){
    if($val === "りんご"){
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

// 猫クラス
class Neko extends Animal{
  // 食べる
  function taberu($val){
    if($val === "魚"){
      echo $this->name. "は". $val. "を食べた\n";
    }else{
      echo $this->name. "は". $val. "を食べなかった\n";
    }
  }

  function __construct(){
    $this->name = "猫";
    $this->nakigoe = "にゃー！";
  }
}

// 犬クラス
class Inu extends Animal{
  // 食べる
  function taberu($val){
    if($val === "肉"){
      echo $this->name. "は". $val. "を食べた\n";
    }else{
      echo $this->name. "は". $val. "を食べなかった\n";
    }
  }

  function __construct(){
    $this->name = "犬";
    $this->nakigoe = "わん！";
  }
}

// タマ
class Tama extends Neko{
  function __construct(){
    $this->name = "タマ";
  }

  // 鳴くメソッドをオーバーライドして、
  // 処理を上書きしている
  function naku(){
    echo $this->name. "は（鳴きませんでした）\n";
  }
}

// オブジェクト化,インスタンス化
$kuma = new Kuma();
$kuma->naku();
$kuma->taberu(RINGO);
echo "状態は".$kuma->get_status()."\n";
$kuma->taberu(SAKANA);
echo "状態は".$kuma->get_status()."\n";
$kuma->taberu(NIKU);
echo "状態は".$kuma->get_status()."\n";

$neko = new Neko();
$neko->naku();
$neko->taberu(RINGO);
$neko->taberu(SAKANA);
$neko->taberu(NIKU);

$inu = new Inu();
$inu->naku();
$inu->taberu(RINGO);
$inu->taberu(SAKANA);
$inu->taberu(NIKU);

$tama = new Tama();
$tama->naku();


?>
