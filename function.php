<?php
function teleToLog($log) {
  $myFile = 'log.txt';
  $fh = fopen($myFile, 'a') or die('can\'t open file');
  if ((is_array($log)) || (is_object($log))) {
    $updateArray = print_r($log, TRUE);
    fwrite($fh, $updateArray."\n");
  } else {
    fwrite($fh, $log . "\n");
  }
  fclose($fh);
}

function getUserRequest($text, $chat_id) {
  //список приветствий, который понимает бот
  $hello = array();
  $hello[] = 'привет';
  $hello[] = 'хай';
  $hello[] = 'здорова';
  $hello[] = 'здравствуйте';
  $hello[] = 'здрасьте';
  $hello[] = 'йо';

  // варианты ответов бота
  $bot_hello = array();
  $bot_hello[] = 'И тебе привет';
  $bot_hello[] = 'Привет от голоса';
  $bot_hello[] = 'Доброго времени суток';
  $bot_hello[] = 'Привет привет';

  if (in_array(mb_strtolower($text), $hello)) {
    //пользователь поздоровался.
    //случайная фраза привет от бота
    $bot_resp = $bot_hello[rand(0, (count($bot_hello) - 1))];
    $data = array(
      'text' => $bot_resp,
      'chat_id' => $chat_id,
    );
    requestToTelegram($data);
  }
}

?>
