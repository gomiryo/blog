<?php

// log出力
function cLog($txt){
  $file_name = "log_".date("Ymd").".log";
  $file_path = PRIVATE_PATH. "log/".$file_name;
  $str = "[".date("Y/m/d H:i:s")."] ". $txt;
  file_put_contents($file_path, $str, FILE_APPEND);
}

?>
