<?php
require("./global.php");
require(MODEL_PATH. "PageModel.php");

session_start();

echo print_r($_SESSION,true);

$obj = new PageModel();
$obj->main();

require(TEMPLATE_PATH. "page.tmpl");
?>
