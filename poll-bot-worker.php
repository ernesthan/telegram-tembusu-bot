<?php

set_time_limit(0);

require_once 'config.php';
require_once 'PollBot.php';

$bot = new PollBot(BOT_TOKEN, 'PollBotChat');
$bot->runLongpoll();
