<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2017/12/7
 * Time: 17:35
 */

if (isset($_POST['$sub'])){
    isset($_POST['$num']);
    var_dump($num);
    switch($num){
        case 10:
            echo 123;
            break;

    }
}
$a='10';
$b=$a+'1bc';
echo $b;
?>


<meta charset="UTF-8">
<form action="01-test.php" method="post">
    数据：<input type="text " name="num">
    <input type="submit" name="sub" >
</form>
