<?php

interface AccountInterface
{

   public function depositMoney($amount): float;
   public function withdrawMoney($amount): bool;
   public function getBalance(): float;
}
