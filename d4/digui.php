<?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2017/12/23
 * Time: 16:04
 */
$str="dfcghjk";
function reversr_r($str){
    if(strlen($str)>0){
        reversr_r(substr($str,1));
        echo reversr_r($str,0,1)."&nbsp;";
        return;
    }
}
reversr_r($str);

?>