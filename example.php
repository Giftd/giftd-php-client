<?php

require_once __DIR__ . "/GiftdApiClient.php";

define("DEBUG", (getenv('APPLICATION_ENV') == 'development'));

// change $userId and $apiKey
$userId = 61;
$apiKey = "acde75fb2667dfb385f905057557679e";

// $token comes from user input (e.g. $token = $_POST['token'])
$token = 94117386;

// total amount and external ID comes from your CMS
$amountTotal = 100500;
$externalId = 5194;

$giftdClient = new Giftd_Client($userId, $apiKey);

if ($card = $giftdClient->checkByToken($token)) {
    if ($card->token_status == Giftd_Card::TOKEN_STATUS_OK) {

        //charging the whole available amount from $card
        $chargedCard = $giftdClient->charge($token, 1, $amountTotal, $externalId);

        echo "
        Successfully charged {$chargedCard->charge_details->amount} rub. from card #{$chargedCard->id}. \n
        {$chargedCard->charge_details->amount_left} rub. left. \n
        ";
    } else {
        echo "Token is already used!\n";
    }

} else {
    echo "Invalid token passed!\n";
}