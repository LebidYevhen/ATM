<?php

require_once 'interfaces/ATMInterface.php';

class ATM implements ATMInterface
{

   private $card;
   private $account;

   public function acceptCard(CardInterface $card, int $cardPin, array $accounts): bool
   {

      $this->card = $card;
      foreach ($accounts as $account) {
         if (isset($account[$card->getNumber()])) {
            if ($account['card_pin'] == $cardPin) {
               $this->account = $account[$card->getNumber()];
               return true;
            }
         }
      }
      return false;
   }

   public function withdrawMoney($amount): bool
   {
      if ($this->getBalance() < $amount) {
         echo 'Not enougt money';
         return false;
      }
      return $this->account->withdrawMoney($amount);
   }

   public function depositMoney($amount): float
   {
      return $this->account->depositMoney($amount);
   }

   public function getBalance()
   {
      return $this->account->getBalance();
   }

   public function returnCard()
   {
      return 'Take your card';
   }
}
