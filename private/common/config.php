<?php
ini_set('mbstring.internal_encoding' , 'UTF-8');

// FILE_PATH
define("PUBLIC_PATH", BASE_PATH);
define("PRIVATE_PATH", BASE_PATH. "private/");
define("TEMPLATE_PATH", PRIVATE_PATH. "view/");
define("MODEL_PATH", PRIVATE_PATH. "model/");
define("SQL_PATH", MODEL_PATH. "sql/");

define("SALT", "rl");

?>
