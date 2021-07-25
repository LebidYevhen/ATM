<?php

require_once 'interfaces/CardInterface.php';

class Card implements CardInterface
{
   private $cardNumber;

   public function __construct(int $cardNumber)
   {
      $this->cardNumber = $cardNumber;
   }

   public function getNumber(): int
   {
      return $this->cardNumber;
   }
}
