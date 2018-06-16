<?php
require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "LoginSqlModel.php");

class LoginModel {
  use BaseModel;

  var $id = ""; // id
  var $pw = ""; // password
  var $message = ""; 
  function __construct(){
    $this->id = isset($_POST["id"]) ? $_POST["id"] : "";
    $this->pw = isset($_POST["pw"]) ? $_POST["pw"] : "";
  }

  function error_check(){
    echo "error_check() start";
    $err = isset($_GET["err"]) ? $_GET["err"] : "";
    if($err == "1"){
      echo "error_check";
      $this->message = "ログインに失敗しました";
    }
  }

  function main(){
    $obj = new LoginSqlModel();
    // echo $this->id."<br/>";
    $res = $obj->get_users($this->id);
    // echo print_r($res, true);
    if(count($res) === 0){
      header('location: ./login.php?err=1');
      exit();
    }
  }

}

?>
