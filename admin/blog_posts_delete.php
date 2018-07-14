<?php
require("../global.php");
require(MODEL_PATH. "admin/AdminBlogPostsModel.php");
require(MODEL_PATH. "SessionCheckModel.php");

$obj = new AdminBlogPostsModel();
$obj->delBlogPosts();
?>
