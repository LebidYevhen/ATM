<?php

require_once 'interfaces/AccountInterface.php';

class Account implements AccountInterface
{

   private $balance;

   public function __construct($balance)
   {
      $this->balance = $balance;
   }

   public function depositMoney($amount): float
   {
      return $this->balance += $amount;
   }

   public function withdrawMoney($amount): bool
   {

      if ($this->balance < $amount) {
         return false;
      }
      $this->balance -= $amount;
      return true;
   }

   public function getBalance(): float
   {
      return $this->balance;
   }
}
