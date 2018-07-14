<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/mui-0.9.39/css/mui.css" />
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../css/mui-0.9.39/js/mui.min.js"></script>
  <script src="../js/admin/blog_posts_list.js"></script>
  <title>管理画面</title>
</head>
<body style="background-color:#efe; color:999; font-size:20px;">
  <h1>管理画面｜記事管理画面</h1>
  <a href="./blog_posts_new.php">記事作成</a>｜<a href="./index.php">戻る</a>
  <table border="2">
    <tr>
      <th>ID</th>
      <th>題名</th>
      <th>本文</th>
      <th>作成日付</th>
      <th>更新日付</th>
      <th>操作</tr>
    </tr>

    <? foreach($obj->blog as $val): ?>
    <tr>
      <td><?=$val["blog_id"]?></td>
      <td><?=$val["title"]?></td>
      <td><?=$val["body"]?></td>
      <td><?=$val["crt_date"]?></td>
      <td><?=$val["upd_date"]?></td>
      <td><button type="button" style="height:30px; width:60px; font-size:18px;" onClick="blog_posts_edit(<?=$val["blog_id"]?>)">編集</button>｜<button type="button" style="height:30px; width:60px; font-size:18px;" onClick="blog_posts_delete(<?=$val["blog_id"]?>)">削除</button></td>
    </tr>
    <? endforeach; ?>
  </table>

  <?php for ($x=1; $x <= $obj->pagination ; $x++) { ?>
    <a href="?page=<?php echo $x ?>"><?php echo $x; ?></a>
  <?php } // End of for ?>

</body>
</html>
