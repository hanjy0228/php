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
    $arr=array(1,2);
//    unset($ss);
    unset($arr);
    print_r($arr);
//    echo $ss;
}
else {
//    echo "erro";

}
?>

<meta charset="utf-8">

<form action="03-test.php" method="post">
    数据：<input type="text" name="num">
    <input type="submit" name="sub" value="提交">
</form>
