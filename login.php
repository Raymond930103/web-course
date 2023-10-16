<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-language" content="zh-TW"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UFT-8"/>
        <meta name="author" content="作者姓名">
        <meta name="description" content="網站描述">
        <title> login_form </title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>

<body>
<?php
$u_name = $_POST[$u_name];
$password = $_POST[$password];
?>
<p>username:<?php echo $u_name;?></p>
<p>password:<?php echo $password;?></p>
</body>
</html>
