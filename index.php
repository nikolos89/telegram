<?php
// листинг bot.php
//задаём наш токен, полученный при создании бота и указываем путь к API телеграма
//https://api.telegram.org/bot598570912:AAH-WFkt5H5ueSkqahGMT6EHXLmZpqoZakA/setWebhook?url=https://212.8.247.69/tg/index.php
//https://api.telegram.org/bot598570912:AAH-WFkt5H5ueSkqahGMT6EHXLmZpqoZakA/setWebhook
//https://api.telegram.org/bot598570912:AAH-WFkt5H5ueSkqahGMT6EHXLmZpqoZakA/getUpdates
//https://api.telegram.org/bot598570912:AAH-WFkt5H5ueSkqahGMT6EHXLmZpqoZakA/setWebhook?url=https://teleg123.herokuapp.com


define('BOT_TOKEN', '598570912:AAH-WFkt5H5ueSkqahGMT6EHXLmZpqoZakA');
define('API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/');

include_once './functions.php';

//принимаем запрос от бота(то что напишет в чате пользователь)
$content = file_get_contents('php://input');
//превращаем из json в массив
$update = json_decode($content, TRUE);
//получаем id чата
$chat_id = $update['message']['chat']['id'];

//получаем текст запроса
$text = $update['message']['text'];

//запись в лог
teleToLog($update);

//обработка запроса
getUserRequest($text, $chat_id);

?>
