<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2017/12/7
 * Time: 15:07
 */
if(isset($_POST['sub'])){
//echo "success";
    $ss=$_POST['num'];
    $arr=arry(1,2);
//    unset($ss);
    print_r($arr);
//    echo $ss;
}
else {
    //echo "erro";

}
?>

<meta charset="utf-8">

<form action="03-test.php" method="post">
    数据：<input type="text" name="num">
    <input type="submit" name="sub" value="提交">
</form>
