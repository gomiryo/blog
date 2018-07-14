<!--
RPG
プレイヤー
敵
職業
フィールド
-->
<?php
class Human{
  //　プロパティ
  protected $name = '';
  protected $hp = '100';
  protected $mp = '50';
  public function get_name(){
    return $this->name;
  }
  public function set_name($val){
    $this->name = $val;
  }
  public function get_hp(){
    return $this->hp;
  }
  public function set_hp($val){
    $this->hp = $val;
  }
  //　攻撃
  protected function physicalAttack(){
    $attackPoint = mt_rand(10,30);
    return $attackPoint;
  }
  //　回復
  // protected function heal(){
  // }
}
// 戦士クラス
class Warrior extends Human {
  protected function guard(){
    return 50;
  }
  // コンストラクタ
  function __construct(){
    $this->name = '戦士';
    $this->hp = 100;
  }
  //　攻撃
  protected function physicalAttack(){
    $attackPoint = mt_rand(30,50);
    return $attackPoint;
  }
  //　防御･･･攻撃を無効化
  // protected function Guard(){
  // }
}
// ボスクラス
class Boss extends Human{
  // コンストラクタ
  function __construct(){
    $this->name = 'ボス';
    $this->hp = 200;
  }
  //　攻撃
  protected function physicalAttack(){
    $attackPoint = mt_rand(10,30);
    return $attackPoint;
  }
}
//　バトル判定クラス
class Judge extends Human{
  function main(){
    $warrior = new Warrior();
    $boss = new Boss();
    $warrior_name = $warrior->get_name();
    $boss_name = $boss->get_name();
    $warrior_hp = $warrior->get_hp();
    $boss_hp = $boss->get_hp();
    // 戦闘回数
    $count = 0;
    // 勝者
    $winner;
    echo "<h2>対戦スタート！</h2>";
    echo "<p>『".$warrior_name."』と『".$boss_name."』が戦います!</p>";
    while($warrior_hp > 0 && $boss_hp > 0){
      $count++;
      echo "<p>【".$count."ターン目】 <br>".$warrior_name."のHPは".$warrior_hp."です。".$boss_name."のHPは".$boss_hp."です。<br>";
      $attac_pt = $warrior->physicalAttack();
      $boss_hp -= $attac_pt;
      echo $warrior_name."の攻撃! <br>".$boss_name."に".$attac_pt."のダメージ!!<br>";
      $attac_pt = $boss->physicalAttack();
      $warrior_hp -= $attac_pt;
      echo $boss_name."の攻撃! <br>".$warrior_name."に".$attac_pt."のダメージ!!</p>";
    }
    //　勝者判定
    echo "<p>戦闘が終了しました。<br>結果は･･････<br>";
    if($warrior_hp > 0){
      echo $warrior_name."が勝ちました！</p>";
    }elseif($warrior_hp <= 0 && $boss_hp <= 0){
      echo "引き分けです。</p>";
    }else{
      echo $warrior_name."は負けました･･･。</p>";
    }
  }
}
$judge = new Judge();
$judge->main();
