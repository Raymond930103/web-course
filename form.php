<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="conten-language" content="zh-TW"/>
        <meta http-equiv="Content-Type" content="text/html; charset= UFT-8"/>
        <meta name="author" content="作者姓名">
        <meta name="description" content="網站描述">
        <title> HTML＿表單</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    </head>

<body>

    <form name="HTML_form" method="post" action="" />
    <label for="u_name">  帳號：</label>
    <input type="text" name="u_name" id="u_name" value=""/><br>
    
    <label for="password"> 密碼：</label>
    <input type="text" name="password" id="password" value=""/><br>
    
    <label for="message">簡介：</label>
    <textarea name="message" id="message" rows="10" cols="30">
        自我介紹...
    </textarea><br>
    
    <label for="birthday">生日:</label>
    <input type="date" id="birthday" name="birthday" min="1900-01-01" max="2099-12-31"><br>
    
    血型：
    <input type="radio" name="blood" id="A">
    <label for="A">A</label>
    <input type="radio" name="blood" id="B">
    <label for="B">B</label>
    <input type="radio" name="blood" id="O">
    <label for="O">O</label>
    <input type="radio" name="blood" id="AB">
    <label for="AB">AB</label><br>

    興趣： 
    <input type="checkbox" name="hobby[]" id="reading" value="reading">
    <label for="reading">閱讀</label>
    <input type="checkbox" name="hobby[]" id="movie" value="movie">
    <label for="movie">看電影</label>
    <input type="checkbox" name="hobby[]" id="music" value="music">
    <label for="music">聽音樂</label>
    <input type="checkbox" name="hobby[]" id="sport" value="sport">
    <label for="sport">運動</label><br>

    <label for="city">居住城市</label>
    <select name="city" id="city" size="1">
        <option value="臺北市">臺北市</option>
        <option value="臺中市">臺中市</option>
        <option value="臺南市">臺南市</option>
        <option value="高雄市">高雄市</option>
        <option value="臺東縣">臺東縣</option>
    </select>

    <br><input type="submit" value="送出" />
    <input type="reset" value="重設" />
</form>
<?php
echo "hello world";
?>
</body>
</html>

