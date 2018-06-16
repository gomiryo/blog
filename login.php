<?php
require("./global.php");
require(MODEL_PATH. "LoginModel.php");

$obj = new LoginModel();
$obj->error_check();

require(TEMPLATE_PATH. "login.tmpl");
?>
