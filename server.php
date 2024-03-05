<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "592962e1bb29a45416b6", // Replace with 'key' from dashboard
    "a48f7825e31afe8908a8", // Replace with 'secret' from dashboard
    "1760139", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for($i = 0; $i < 10; $i++){
    $pusher->trigger('price-btcusd', 'new-price', array(
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000)

    ));
    sleep(1);
}