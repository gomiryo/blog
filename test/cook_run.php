<?php

$meet_list = array(
  "1" => "鶏肉",
  "2" => "豚肉",
  "3" => "牛肉"
);

$main_list = array(
  "1" => "お米",
  "2" => "パン",
  "3" => "小麦粉"
);

$yasai_list = array(
  "1" => "にんじん",
  "2" => "じゃがいも",
  "4" => "たまねぎ"
);

class CookingClass{
  public $food = "";
  public $spice = "";
  private const $BR = "<br>";

  protected function itameru(){
    $message += "食材を炒めた！". self:BR;
  }

  protected function aburu(){
    $message += "食材を炙った！". self:BR;
  }

  protected function mazeru(){
    $message += "食材を混ぜた！". self:BR;
  }

  protected function cooking(){
    $this->set_food($_POST["meet_list"]);
    $this->set_food($_POST["main_list"]);
    $this->set_food($_POST["yasai_list"]);

    // 食材が３つ以下の場合は料理をしない。
    if(count($this->food) < 3){
       $message += "食材が足りません。料理を中止しました。". self:BR;
       return 0;
    }

    for($i = 0; $i < 3; $i++){
      $this->cooking_main();
    }
  }

  protected function cooking_main(){
    $rand = rand(1, 3);
    switch($rand){
      case: 1
        $this->itameru();
        break;
      case: 2
        $this->aburu();
        break;
      case: 3
        $this->mazeru();
        break;
    }
  }

  // 食材のセット
  protected function set_food($food){
    array_push(this->food, $food);
  }

}

class Lobo{

  // メイン処理
  function main(){
    $mode = "";

    if( isset($_POST["mode"]){
      $mode = $_POST["mode"];
    }

    if($mode === ""){
      return 0; // 処理終了
    }

    switch($mode){
      case: "cooking"
        $this->cooking();
        break;
      default:
        return 0; // 処理終了
    }
  }

}

$lobo = new Lobo();
$lobo = main();

require_once("cook_temp.php");

?>
