<?php
require("../global.php");
require(MODEL_PATH. "admin/AdminBlogPostsModel.php");
require(MODEL_PATH. "SessionCheckModel.php");

$obj = new AdminBlogPostsModel();
// $obj->error_check();

require(TEMPLATE_PATH. "admin/blog_posts_list.php");
?>
