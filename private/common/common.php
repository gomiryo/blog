<?php

// log出力
function cLog($txt){
  $fine_name = "log".date("Ymd").".log";
  $file_path = PRIVATE_PATH. "log/".$file_name;
  $str = "[".date("Y/m/d H:i:s")."]". $txt;
  file_get_contents($file_path, $str, FILE_APPEND);
}

?>
