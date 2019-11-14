<?php defined('BASEPATH') OR exit('No direct script access allowed');


// Please keep the translation  line length below 150 as only 160 character per sms or it will be multiple sms charges
// Available variable options for sales related sms:
// 1. {customer} for Customer Company/Contact Person
// 2. {sale_reference} for sale reference number
// 3. {grand_total} for sale grand total amount
//
// Payment related sms:
// 1. {payment_reference} for payment reference
// 2. {amount} for payment amount
//
// Delivery related sms:
// 1. {delivery_reference} for deliver reference
// 2. (received_by} for delivery received by field

$lang['sale_added']                     = "Dear {customer}, your order (Ref. {sale_reference}) has been received, please proceed to payment amounting {grand_total}. Thank you";
$lang['payment_received']               = "Dear {customer}, your payment (Ref. {payment_reference}, Amt: {amount}) has been received, we will be processing your order shortly. Thank you";
$lang['delivering']                     = "Dear {customer}, We are delivery your order (Ref. {delivery_reference}).";
$lang['delived']                        = "Dear {customer}, your order (Ref. {sale_reference}) has been received by {received_by}.";
