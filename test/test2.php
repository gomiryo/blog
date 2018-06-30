<?php

class calc{
  function plus($b, $c){
    echo "func\n";
    return $b + $c;
  }
  function minus($b, $c){
    echo "func\n";
    return $b - $c;
  }
}

$obj = new calc();

echo "step1\n";
$d = $obj->plus(2, 4);
echo "step2\n";
$e = $obj->plus(3, 2);

echo $d + $e;

?>
