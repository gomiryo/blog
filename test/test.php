<?php

// グローバル変数
$str = "hello";
$name = "山田さん";

//挨拶関数の定義
// 第一引数:名前を入れる
// 第二引数:挨拶文を入れる
// 第三引数:感嘆詞を入れる
// 戻り値：完成された文
function aisatsu($n, $k, $s){
  $res = $n. "、". $k . $s ."\n";
  return $res;
}

$val = aisatsu($name, $str, "!!");

// echo "挨拶文は". $cs;




?>
