<?php

require_once 'classes/Account.php';

$accounts = [
   [
      12345 => new Account(1000),
      'card_pin' => 1,
   ],
   [
      123 => new Account(10000),
      'card_pin' => 1,
   ]
];


$exitSubmit = '<input type="submit" name="exit" value="Exit">';
$toLoginPageSubmit = '<input type="submit" name="login_page" value="Go to login page">';
