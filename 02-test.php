<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2017/12/7
 * Time: 14:47
 */
//php变量当前文件下有效

//php数据类型
//四个标量类型：int,float,string,bool
//两个复合类型：array，object
//两个特殊类型：resource,null

//var_dump查看数据类型

echo $num;
//$num=123;
function aa(){
    echo 123;
}

aa();

?>

<p>biaoti</p>

<?php
 for($i=0;$i<9;$i++){
     echo $i;
 }
?>

<a href="#">aaa</a>

<?php
echo $num;
?>

<?php//调试查看数据类型

     $name="aaabbb";
     var_dump($name);
     die();
     echo 123;
?>
