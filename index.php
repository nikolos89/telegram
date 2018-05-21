<?php
echo rand(1,1000000000); 
echo '<br/>';
echo date('H:i:s d.m.Y');
echo '<br/>';
echo getenv('REMOTE_ADDR'); 
echo '<br/>';
define('ST_T', microtime());//начало

echo '<p style="font-size:15px;">Контент страницы, скрипты и т.п.</p>';

printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец


?>
