// alert("test");

$(function(){

});

// 削除処理
function blog_posts_edit(id){
}


function blog_posts_delete(id){
  var data = {
     "id": id
    ,"mode": "del"
  };

  $.ajax({
    type:"get",
    url:"./blog_posts_delete.php",
    data: {"id" : id},
    contentType: 'application/json',
    dataType: "json",
    scriptCharset: 'utf-8',
    success: function(json_data) {
        // alert("成功");
        location.reload();
      },
      error: function() {
        alert("失敗");
      }
  });

}

