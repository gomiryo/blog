<?php
define("RINGO", "りんご");
define("SAKANA", "魚");
define("NIKU", "肉");

require("animal.php");
require("kuma.php");
require("neko.php");
require("inu.php");
require("tama.php");

// オブジェクト化,インスタンス化
$kuma = new Kuma();
$kuma->naku();
$kuma->taberu(RINGO);
echo "状態は".$kuma->get_status()."\n";
$kuma->taberu(SAKANA);
echo "状態は".$kuma->get_status()."\n";
$kuma->taberu(NIKU);
echo "状態は".$kuma->get_status()."\n";

$neko = new Neko();
$neko->naku();
$neko->taberu(RINGO);
$neko->taberu(SAKANA);
$neko->taberu(NIKU);

$inu = new Inu();
$inu->naku();
$inu->taberu(RINGO);
$inu->taberu(SAKANA);
$inu->taberu(NIKU);

$tama = new Tama();
$tama->naku();

?>
