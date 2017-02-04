Giftd API PHP Client
================

This repository contains a PHP Client for the API of [Giftd.tech](https://giftd.tech) project.

Check out the full [API documentation](https://giftd.tech/api).

### Requirements

- PHP version >= 5.3.3

- php-cURL extension

Take a look at example.php to find usage examples.

### Basic usage example
```php
<?php
$currentBasketTotal = 900;
$promoCodeFromUser = '1234-5678-9876-4321';

$giftdUserId = 1234;
$giftdApiKey = '7815696ecbf1c96e6894b779456d330e'
$apiClient = new Giftd\ApiClient($giftdUserId, $giftdApiKey);
$card = $apiClient->checkByToken($, $currentBasketTotal);
if ($card) {
  if ($card->is_available) {
    echo "Available amount for {$card->token}: {$card->amount_available}; minimum amount total: {$card->min_amount_total}";
    // You may do $apiClient->charge($promoCodeFromUser, $card->amount_available) after user finishes the order;
  } else {
    echo "No amount available on the gift card";
  }
} else {
  echo "Wrong token passed, gift card not found!";
}
?>
```
### Support

Please send your questions and suggestions to support@giftd.tech.