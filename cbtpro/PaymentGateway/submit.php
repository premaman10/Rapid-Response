<?php

require('config.php');

\Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];

$charge = \Stripe\Checkout\Session::create([
    'amount' => 999,
    'currency' => 'inr',
    'description' => 'Nex Payment',
    'source' => $token,
]);

echo "<pre>";
print_r($charge);
