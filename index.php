<?php
/* Установка голландской локали */
setlocale(LC_ALL, 'nld_nld');

/* выводит: vrijdag 22 december 1978 */
echo strftime("%A %d %B %Y", mktime(0, 0, 0, 12, 22, 1978));

/* попытка использовать различные локали для немецкого языка */
$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu');
echo "Предпочитаемая немецкая локаль на этой системе: '$loc_de'";
echo '<br/>';
echo getenv('REMOTE_ADDR'); 
echo '<br/>';
define('ST_T', microtime());//начало
echo '<br/>';
printf('Страница сгенерирована за %.5f сек.', microtime()-ST_T);//конец

?>
