<?php
echo date('H:i:s d.m.Y');
echo '<br/>';
echo getenv('REMOTE_ADDR'); 
echo '<br/>';
define('ST_T', microtime());//начало
echo '<br/>';
printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец

?>
