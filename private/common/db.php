<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'user04db');
define('DB_USER', 'user04');
define('DB_PASSWORD', 'User04@Pass');

// 文字化け対策
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET CHARACTER SET 'utf8'");

// PHPのエラーを表示するように設定
error_reporting(E_ALL & ~E_NOTICE);

// データベースの接続
function db_conn(){
  try {
    $cs = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
    $dbh = new PDO($cs, DB_USER, DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
  }
  return $dbh;
}

// クエリ実行
function db_query($dbh, $sql, $param=array()){
  $smt = $dbh->prepare($sql);
  //$smt = $dbh->prepare("test test");
  $smt->execute($param);
  // echo $smt->errorInfo();
  $res = $smt->fetchAll();
  // echo print_r($res, true);
  return $res;
}


?>

