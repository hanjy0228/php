<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2017/12/7
 * Time: 14:25
 */
//php可以内嵌html,js
echo "123"
//三码一致 ：文件编码，浏览器解码，数据库编码，否则乱码
//文件编码：ANSI、unicode、utf-8
//浏览器解码：取决于当前浏览器安装的语言版本GBK/GB2312/GB1080/
//数据库编码：UTF-8 ，sentEncodeing()
?>
<meta charset="UTF-8">
<form action="01-test.php" method="post">
    数据：<input type="text " name="num">
    <input type="submit" name="sub" >
</form>
