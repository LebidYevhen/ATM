<?php

require_once 'data.php';
require_once 'classes/ATM.php';
require_once 'classes/Card.php';

$atm = new ATM();

if (isset($_POST['login_submit']) && !empty($_POST['card_number']) && !empty($_POST['card_pin'])) {
   $card = new Card($_POST['card_number']);
   if ($atm->acceptCard($card, $_POST['card_pin'], $accounts)) {
      echo 'Your balance is: ' . $atm->getBalance();
   }
   echo '<br>Case 1: Withdrawing the correct amount (200)...';
   $atm->withdrawMoney(200);
   echo 'Your new balance is: ' . $atm->getBalance();
   echo '<br>Case 2: Withdrawing more then balance... ';
   $atm->withdrawMoney(10000);
   echo '<br>Deposit money (200)...';
   $atm->depositMoney(200);
   echo 'Your new balance is: ' . $atm->getBalance();
} elseif (isset($_POST['exit'])) {
   echo '<br>' . $atm->returnCard();
} elseif (isset($_POST['login_page'])) {
   header('Location: index.php');
} else {
   header("refresh:1; url=index.php");
   echo 'Card number or card pin is incorrect. Please try again...';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ATM page</title>
</head>

<body>

   <form action="" method="post">
      <?php
      if (isset($_POST['exit'])) {
         echo $toLoginPageSubmit;
      } else {
         echo $exitSubmit;
      }
      ?>
   </form>

</body>

</html>