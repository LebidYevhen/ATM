<?php

interface  ATMInterface
{

   public function withdrawMoney($amount): bool;
   public function depositMoney($amount): float;
   public function getBalance();
   public function acceptCard(CardInterface $card, int $cardPin, array $accounts): bool;
}
