<?php
require("../global.php");
require(MODEL_PATH. "admin/AdminIndexModel.php");

$obj = new AdminIndexModel();
// $obj->error_check();

require(TEMPLATE_PATH. "admin/index.php");
?>
