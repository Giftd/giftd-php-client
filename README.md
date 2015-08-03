Giftd API PHP Client
================

This repository contains a PHP Client for the API of [Giftd.ru](https://giftd.ru) project.

### Requirements

- PHP version >= 5.2.0

- php-cURL extension

Take a look at example.php to find usage examples.

### Basic usage example

    <?php
    $giftdClient = new Giftd_Client($userId, $apiKey);
    $result = $giftdClient->query('gift/check', array('token' => '1234-5678'));
    echo isset($result['data']['amount_available']) ? $result['data']['amount_available'] : "Gift card not found"/
    ?>

### Support

Please send your comments and questions to support@giftd.ru.