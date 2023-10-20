<?php
define("USD_to_TWD", 30);
define("Pi" , 3.14159);
define("egg", 500);

$usd = 2500;
$twd = $usd * USD_to_TWD;

$radius = 25;
$area = 2 * $radius *Pi;

$dozen = floor(egg / 12);
$left = egg % 12;

echo "1. {$usd}美金換成新臺幣約為{$twd}新臺幣<br>";
echo "2. 半徑長{$radius}的圓面積為{$area}<br>";
echo "3. ",egg,"顆蛋有{$dozen}打還剩{$left}顆<br>";
?>