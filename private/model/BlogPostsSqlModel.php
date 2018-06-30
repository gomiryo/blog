<?php
class BlogPostsSqlModel {
  public $data = array();
  private $dbh = "";

  function __construct(){
    // DB CONNECTION
    $this->dbh = db_conn();
  }

  // ブログ記事数を取得
  function get_blog_count(){
    $sql = "select count(*) as cnt from blog_posts;";
    $param = array();
    $res = db_query($this->dbh, $sql, $param);
    return $res[0]["cnt"];
  }

  // ブログ記事データの取得
  function get_blog_posts($start, $end){
    $sql  = " select ";
    $sql .= " blog_posts.title, ";
    $sql .= " blog_posts.body, ";
    $sql .= " blog_posts.crt_date, ";
    $sql .= " blog_posts.id as blog_id, ";
    $sql .= " users.handle ";
    $sql .= " from blog_posts ";
    $sql .= " left outer join users on ";
    $sql .= " blog_posts.user_id = users.id ";
    $sql .= " order by blog_posts.crt_date desc ";
    $sql .= " limit :start, :end; ";
    $stmt = $this->dbh->prepare($sql);
    $stmt->bindValue(':start', $start, PDO::PARAM_INT);
    $stmt->bindValue(':end', $end, PDO::PARAM_INT);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($res);

    //$param = array($start, $end);
    //$param = array(10);
    //$res = db_query($this->dbh, $sql, $param);
    return $res;
  }

}

?>
