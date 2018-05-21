<?php
$d = date('H') + 3;
$i = date('i');
$s = date('s');
$r = ':';
$rr = ' ';
$dis = $d . $r. $i . $r . $s . $rr . date('d.m.Y')

echo $dis;
echo '<br/>';
echo getenv('REMOTE_ADDR'); 
echo '<br/>';
define('ST_T', microtime());//начало
echo '<br/>';
printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец

?>
