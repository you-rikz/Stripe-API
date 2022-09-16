<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIPZFvHMSH2Gbw6l3asWNGna3llfF8bpmOeiKyq1YD64YspmTE1dK5bl1LCs1fy1OItFYpa0s4xtmncX8wrgiF00p1YlfPi1'
);
$result = $stripe->products->all(['limit' => 3]);
var_dump($result);
