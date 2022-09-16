<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LgIPZFvHMSH2Gbw6l3asWNGna3llfF8bpmOeiKyq1YD64YspmTE1dK5bl1LCs1fy1OItFYpa0s4xtmncX8wrgiF00p1YlfPi1');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/Stripe_API';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LgIlQFvHMSH2GbwMvUlG9QC',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);