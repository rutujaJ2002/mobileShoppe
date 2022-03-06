<?php
//require mysql connection
    require("database/DBcontroller.php");


    //require product class
    require("database/Product.php");

    // require Cart Class
    require ('database/Cart.php');


    //DBcontroller object
    $db=new DBcontroller();

    $product= new Product($db);
    $product_shuffle = $product->getData();

    // Cart object
    $Cart = new Cart($db );

?>