<?php
define("USD_to_TWD", 30);
define("Pi" , 3.14159);


$usd = 2500;
$twd = $usd * USD_to_TWD;

$radius = 25;
$area = 2*$radius*Pi;

$egg = 500;
$dozen = floor($eggs/12);
$left /= $eggs;

echo "1. {$usd}美金換成新臺幣為{$twd}新臺幣<br>";
echo "2. 半徑長{$radius}的圓面積為{$area}<br>";
echo "3. {$egg}顆蛋有{$dozen}打,還剩{$left}";
?>