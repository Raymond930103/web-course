<?php
define('USD_TO_TWD', 30);

$usd = 2500;
$twd = $usd * USD_TO_TWD;

echo "{$usd}美金換成新臺幣為{$twd}新臺幣";
?>