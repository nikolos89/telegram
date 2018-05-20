<?php

/**
 * Basic telegram bot example
 * 
 */

require_once("telegram_bot.php");

class TestBot extends TelegramBot{

	/**
	 * Fill token after setting webhook
	 * 
	 */
	protected $token = "598570912:AAH-WFkt5H5ueSkqahGMT6EHXLmZpqoZakA";

	/**
	 * Fill you bot name if you want to use it in groups
	 * @example "@my_test_bot"
	 */
	protected $bot_name = "@pogoda55_omsk_bot";

	/**
	 * HTTP proxy URI (not socks)
	 * @example "tcp://122.183.137.190:8080"
	 */
	public $proxy = "tcp://95.110.224.30:18332";


}

?>
