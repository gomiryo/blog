<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="./css/mui-0.9.39/css/mui.css" />
  <script src="./css/mui-0.9.39/js/mui.min.js"></script>
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
      <td>001</td>
      <td>記事１</td>
      <td>本文アイウエオ</td>
      <td>2018/06/09 12:12:12</td>
      <td>2018/08/08 14:14:14</td>
      <td><button type="button" style="height:30px; width:60px; font-size:18px;">編集</button>｜<button type="button" style="height:30px; width:60px; font-size:18px;" >削除</button></td>
    </tr>
    <? endforeach; ?>
  </table>
  
</body>
</html>
