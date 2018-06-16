<?php
require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "LoginSqlModel.php");

class LoginModel {
  use BaseModel;

  var $id = ""; // id
  var $pw = ""; // password

  function __construct(){
    $this->id = isset($_POST["id"]) ? $_POST["id"] : "";
    $this->pw = isset($_POST["pw"]) ? $_POST["pw"] : "";

  }

  function main(){
    $obj = new LoginSqlModel();
    $res = $obj->get_users();
    foreach($res as $val){
      echo print_r($val, true);
    }
  }


}

?>
