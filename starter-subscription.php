<?php
require_once('vendor/autoload.php');

$stripe = new \Stripe\StripeClient("sk_test_51LgIPZFvHMSH2Gbw6l3asWNGna3llfF8bpmOeiKyq1YD64YspmTE1dK5bl1LCs1fy1OItFYpa0s4xtmncX8wrgiF00p1YlfPi1");

$product = $stripe->products->create([
  'name' => 'Iphone',
  'description' => '$12/Month subscription',
]);
echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

$price = $stripe->prices->create([
  'unit_amount' => 1200,
  'currency' => 'aud',
  'recurring' => ['interval' => 'month'],
  'product' => $product['id'],
]);
echo "Success! Here is your premium subscription price id: " . $price->id . "\n";

?>