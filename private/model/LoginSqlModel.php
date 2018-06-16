<?php

class LoginSqlModel {
  public $data = array();
  private $dbh = "";

  function __construct(){
    // DB CONNECTION
    $this->dbh = db_conn();
  }

  function get_users(){
    $sql = "select * from users";
    return db_query($this->dbh, $sql);
  }

}

?>
