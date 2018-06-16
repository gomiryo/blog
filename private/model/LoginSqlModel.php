<?php

class LoginSqlModel {
  public $data = array();
  private $dbh = "";

  function __construct(){
    // DB CONNECTION
    $this->dbh = db_conn();
  }

  function get_users($id){
    // echo $id;
    $sql = "select * from users where handle = ?;";
    $param = array($id);
    $res = db_query($this->dbh, $sql, $param);
    return $res;
  }

}

?>
