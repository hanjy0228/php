<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2017/12/7
 * Time: 16:49
 */
//$pass="hhh";
//$mpass=md5($pass);
////md5(md5($pass)+$salt);
//echo $mpass;

if (isset($_POST['sub'])){
    $str=$_POST['addres'];
    $dizhi=base64_decode($str);
    echo $dizhi;
}
?>

<meta CHARSET="UTF-8">
<form action="05.php" method="post">
    地址：<input type="text" name="addres">
    <input type="submit" name="sub">
</form>
