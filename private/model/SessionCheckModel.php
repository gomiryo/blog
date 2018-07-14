<?php

$SessionCheckModel = new SessionCheckModel();
$SessionCheckModel->main();

class SessionCheckModel{

  function main(){
    session_start();
    if( !isset($_SESSION['status']) ){
      header("location: ". PUBLIC_PATH. "login.php?err=2");
      exit;
    }
  }
}

?>
