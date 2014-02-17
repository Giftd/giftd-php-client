<?php

require_once __DIR__ . "/GiftdApiClient.php";

// change $userId and $apiKey
$userId = 61;
$apiKey = "acde75fb2667dfb385f905057557679e";

// $token comes from user input (e.g. $token = $_POST['token'])
$token = 21772422;

// total amount and external ID comes from your CMS
$amountTotal = 100500;
$externalId = 5192;

$giftdClient = new Giftd_Client($userId, $apiKey, "https://api.giftd.local/v1/");

if ($card = $giftdClient->checkByToken($token)) {
    //charging the whole available amount from $card
    $chargedCard = $giftdClient->charge($token, 1, $amountTotal, $externalId);

    echo "
        Successfully charged {$chargedCard->charge_details->amount} rub.
        from card #{$chargedCard->id}.
        {$chargedCard->charge_details->amount_left} rub. left.
    ";
} else {
    echo "Wrong token passed!";
}