<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "Product.php";
        require_once "ShoppingCart.php";
        require_once "CartItem.php";

        $product1 = new Product(1, "Sonka", 10, 20);
        $product2 = new Product(2, "Sajt", 40, 10);
        $product3 = new Product(3, "Szobanövény", 200, 1);
        $cart = new Cart();
        $cartItem1 = $cart->addProduct($product1, 1);
        $cartItem2 = $product2->addToCart($cart, 1);
        echo "A kosár tartalma: "."<br>";
        echo $cart->getTotalQuantity()."<br>"; 
        echo "Mennyibe kerül a kosár tartalma: "."<br>";
        echo $cart->getTotalSum()."<br>"; 

        $cartItem2->increaseQuantity();
        $cartItem2->increaseQuantity();

        echo "A kosár tartalma: "."<br>";
        echo $cart->getTotalQuantity()."<br>"; 

        echo "Mennyibe kerül a kosár tartalma: "."<br>";
        echo $cart->getTotalSum()."<br>";

        $cart->removeProduct($product1);

        echo "A kosár tartalma: "."<br>";
        echo $cart->getTotalQuantity()."<br>"; 

        echo "Mennyibe kerül a kosár tartalma: "."<br>";
        echo $cart->getTotalSum()."<br>";
        ?>
    </body>
</html>
