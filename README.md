# Basic Telergam Bot (php)
This is a simple example of telegram bot using php without any dependencies. Can work with HTTP proxy.

## Installation
Your site have to use https protocol.

1. Copy files on your site
2. Open in browser file bot.php
3. Open dialog with @BotFather (https://t.me/BotFather) in your telegram client
  1. Send /newbot command
  2. Enter your bot title
  3. Enter your bot name (ex: @test_bot)
  4. Copy token to clipboard
4. Paste token to form in browser and submit form
5. Edit test_bot.php, paste token and bot name
6. Talk to your bot

## New in version 1.1
1. sendAudio() method - sends audio file with audioplayer (20Mb max)
2. HTTP proxy support.

## Customizing bot
### Create commands you want in TestBot class

```php
protected $commands = [
  "/start" => "cmd_start",
  "/help" => "cmd_help",
  "/hi" => "cmd_hi"
];
```

### Create methods for commands

```php
function cmd_hi(){
  $this->api->sendMessage( "Hi, @" . $this->result["message"]["from"]["username"] . "." );
}
```
