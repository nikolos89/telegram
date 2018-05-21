<?php
echo rand(1,1000000000); 

echo date('H:i:s d.m.Y');

echo getenv('REMOTE_ADDR'); 

define('ST_T', microtime());//начало

echo '<p>Контент страницы, скрипты и т.п.</p>';

printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец


?>
