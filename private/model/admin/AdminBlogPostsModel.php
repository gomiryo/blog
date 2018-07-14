<?php

require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "BlogPostsSqlModel.php");

class AdminBlogPostsModel{
  var $mode = "";

  function main(){
    $this->mode = isset($_POST["mode"]) ? $_POST["mode"] : "none";

    switch($this->mode){
      case "new":
        $this->setBlogPosts();
        break;
      case "del":
        $this->delBlogPosts();
        break;
      case "upd":
        $this->delBlogPosts();
        break;
      default:
        return 0;
    }
  }

  // 新規作成
  function setBlogPosts(){
    // echo "setBlogPosts() start";
    $obj = new BlogPostsSqlModel();
    $obj->setBlogPosts();

  }

  // 削除
  function delBlogPosts(){
    echo "setBlogPosts() start";
  }
  // 更新
  function updBlogPosts(){
    echo "updBlogPosts() start";
  }

}

?>
