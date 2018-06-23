<?php
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
?>
