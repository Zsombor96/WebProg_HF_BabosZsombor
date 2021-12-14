<?php

namespace ProductNamespace {
    include "loader.php";

    use CartNamespace\Cart;
    use CartItemNamespace\CartItem;

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    public function __construct(int $id, string $title, float $price, int $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getAvailableQuantity()
    {
        return $this->availableQuantity;
    }

    public function setAvailableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;

        return $this;
    }

    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        $item = $cart->addProduct($this, $quantity);
        return $item;
    }

    public function removeFromCart(Cart $cart)
    {
        $cart->removeProduct($this);
    }

    
}
