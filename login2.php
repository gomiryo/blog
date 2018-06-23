<?php
require("./global.php");
require(MODEL_PATH. "LoginModel.php");

$obj = new LoginModel();
$obj->main();

?>
