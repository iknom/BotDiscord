<?php

require_once 'vendor/autoload.php';

use Discord\Discord;
use Discord\Parts\Channel\Message;

$discord = new Discord([
    'token' => 'MTExMzU0NTE3MTU0MDM5NDA4NQ.GyYdf5.mxGFPTSxxv-QITrchCcxCKTE3WmC17hRJI-L0g'
]);

$discord->on('ready', function ($discord) {
    echo "Bot is ready.", PHP_EOL;

    $discord->on('message', function ($message, $discord) {
        if ($message->content == 'ping') {
            $message->channel->sendMessage('Pong!');
        }
    });
});

$discord->run();