<?php
require("./global.php");
require(MODEL_PATH. "LoginModel.php");
// require(TEMPLATE_PATH. "login.tmpl");

$obj = new LoginModel();
$obj->main();

?>
