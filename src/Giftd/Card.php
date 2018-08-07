<?php

namespace Giftd;

/**
 * @property integer $id
 * @property string $status
 * @property string $status_str
 * @property float $amount_available
 * @property integer $card_id,
 * @property string $card_title
 * @property string $owner_name
 * @property string $owner_gender
 * @property bool $amount_total_required
 * @property float|null $min_amount_total
 * @property float|null $discount_percent
 * @property string $charge_type
 * @property integer $created
 * @property integer $expires
 * @property string $token_status
 * @property bool $is_available
 * @property string $serial_number
 * @property string $token
 * @property ChargeDetails|null $charge_details
 */
class Card
{
    const CHARGE_TYPE_ONETIME = 'onetime';
    const CHARGE_TYPE_MULTIPLE = 'multiple';

    const TOKEN_STATUS_OK = 'ok';
    const TOKEN_STATUS_USED = 'used';

    public $id;
    public $status;
    public $status_str;
    public $amount_available;
    public $card_id;
    public $card_title;
    public $owner_name;
    public $owner_gender;
    public $amount_total_required;
    public $min_amount_total;
    public $discount_percent;
    public $charge_type;
    public $created;
    public $expires;
    public $token_status;
    public $charge_details;
    public $token;
    public $cannot_be_used_on_discounted_items;
    public $is_free;
    public $is_available;
    public $serial_number;
    public $gift_campaign_id;
    public $gift_campaign_title;
    public $crm_user_key;
}
