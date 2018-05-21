<?php
function calc()
{
global $action, $result, $first, $second;
switch($action)
 {
   case "sum": $result = $first+$second; break;
   case "min": $result = $first-$second; break;
   case "mult": $result = $first*$second; break;
   case "dev": 
   if (!$second)             /* если второе число равно "0" или вообще не введено */
   {
     exit("Извините, программа не может выполнить действие: на ноль делить нельзя");
   }
   $result=$first/$second; break;
   case "procent": $result = $first*($second/100); break;
   case "stepen": $result = pow($first, $second); break;
   case "koren": $result = pow($first,0.5); break;
 }
?>                             //заканчиваем оператор switch
 Результат Вашего действия равен <b>
 <? echo $result; ?>           //вывод результата
 </b>
 </font>
 <?
}                    //конец функций calc()


if ($action) calc(); else show();
?>
