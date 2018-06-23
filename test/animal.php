<?php

class animal{
  // プロパティ
  protected $hair = ""; // 毛
  protected $width = ""; // 幅
  protected $type = ""; // 性格
  protected $height = ""; // 高さ
  protected $nakigoe = "ギャース！"; // 鳴き声
  protected $status = "普通"; //状態
  protected $name = "動物"; //名前

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

  // ステータスを良い
  protected function status_good(){
    $this->status = "良い";
  }

  // ステータスを悪い
  protected function status_bad(){
    $this->status = "悪い";
  }

}


?>
