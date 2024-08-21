<?php

class ShopingCart {
    public $cartItems = [];
    public $amount;

    public function addItem($item): void {
        $this->cartItems[] = $item;
        $this->amount++;
    }
}