<?php

class CartItem
{
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function increaseQuantity()
    {
        if($this->quantity < $this->product->getAvailableQuantity()){
            $this->quantity++;
        }
    }

    public function decreaseQuantity()
    {
        if($this->quantity > 1){
            $this->quantity--;
        }
        
    }

    
}
