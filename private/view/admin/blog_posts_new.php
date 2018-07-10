<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/mui-0.9.39/css/mui.css" />
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../css/mui-0.9.39/js/mui.min.js"></script>
  <script src="../js/admin/blog_posts_new.js"></script>
  <title>管理画面</title>
</head>
<body style="background-color:#efe; color:999; font-size:20px;">
  <h1>管理画面｜記事編集画面</h1>
  <a href="./blog_posts_list.php">一覧へ</a>
  <form name="form1" method="post" action="./blog_posts_new.php" >
    <input type="text" name="title" id="title" style="width:300px;" placeholder="タイトル" value=""><br>
    <textarea name="body" id="body" style="width:300px;" placeholder="記事本文" rows="5" ></textarea><br>
    <input type="hidden" name="mode" id="mode" value="new">
    <button type="button" id="submit_button1">送信</button>
    <br />
    <br />
    <div id="err_mes" style="color:red;"></div>
  </form>
</body>
</html>
