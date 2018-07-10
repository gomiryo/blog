// alert("test");

var err_mes = "";

$(function(){

  function check_title(){
    var val = document.getElementById("title").value;
    if(val == "") return "タイトルを入力してください<br>\n";  
    return "";  
  }

  function check_body(){
    var val = document.getElementById("body").value;
    if(val == "") return "本文を入力してください<br>\n";
    return "";  
  }

  function blog_posts_submit(){
    var mes = "";
    mes += check_title();
    mes += check_body();
    // エラーの時はsubmit中断
    if(mes != "") return mes;

    // submit処理
    document.form1.submit();
  }

  // bind
  $('#submit_button1').click(function(){
    $('#err_mes').html(""); // 初期化 
    var mes = blog_posts_submit();
    $('#err_mes').html(mes); 
  });

});
