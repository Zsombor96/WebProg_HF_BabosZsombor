<?php

class ShoppingCart
{
    private array $items = [];
    
    public function getItems()
    {
        return $this->items;
    }

    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    private function getItem (Product $product)
    {
        foreach($this->items as $item){
            if($item->getProduct() == $product){
                return $item;
            }
        }

        return null;
    }
    
    public function addProduct(Product $product, int $quantity): CartItem
    {
        $cartItem = $this->getItem($product);

        if($cartItem){
            $cartItem->increaseQuantity();
            return $cartItem;
        }

        $cartItem = new CartItem($product, $quantity);
        array_push($this->items, $cartItem);
        return $cartItem;        
    }

    public function removeProduct(Product $product)
    {
        $cartKey = null;

        foreach($this->items as $key=>$item){
            if($item->getProduct() == $product){
                $cartKey = $key;
            }
        }
        if($cartKey !== null){
            unset($this->items[$cartKey]);
        }
    }

    public function getTotalQuantity(): int
    {
        $total = 0;

        foreach($this->items as $item){
            $total += $item->getQuantity();
        }

        return $total;
    }

    public function getTotalSum(): float
    {
        $totalSum = 0.0;

        foreach($this->items as $item){
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }

        return $totalSum;
    }

    
}