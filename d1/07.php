 <?php
/**
 * Created by PhpStorm.
 * User: HanJingYi
 * Date: 2017/12/7
 * Time: 17:41
 */
 echo "<table width='800' border='1' align='center'>";
 echo "<caption>change color</caption> ";
 for ($i=0;$i<100;$i++){
     if ($i%2==0){
         $color='red';
     }else{
         $color='green';
     }
     echo "<tr >";
     for ($j=0;$j<10;$j++){
        echo "<td> ".$i."</td>";
     }
     echo "</tr>";
 }


 echo "</table>"
 ?>