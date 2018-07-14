<?php
require("../global.php");
require(MODEL_PATH. "PageModel.php");
require(MODEL_PATH. "SessionCheckModel.php");

$obj = new PageModel();
$obj->main();

require(TEMPLATE_PATH. "page/page.tmpl");
?>
