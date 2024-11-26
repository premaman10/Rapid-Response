<?php

require('stripe-php/init.php');


$secret_key   = "sk_test_51M2ZjtSDJ8V7HNXa8UbDmOD8tiRnTV75GkTECxbALkVVsU05TLvooPMHy8VWzB6fNKy5oMK1ewqJLrjkRV8sr2ZE0047vjlfKl";


$publishable_key = "pk_test_51M2ZjtSDJ8V7HNXa0no3Q1ugSPqOrMXyJwbwQfHf2nj4fM6Pr6wXLQKxBHctpjIzN7VMDYkGM5nK5eZt0ZolwZYB00oLKn6zMH";

\Stripe\Stripe::setApiKey($secret_key);