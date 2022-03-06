<?php
    ob_start();
    //include header file
    include("header.php");
?>

<?php
//include banner area
include('template/_banner-area.php');

//include top-sale file
include("template/_top-sale.php");

//include special price file
include("template/_special-price.php");

//include banner-ads file
include("template/_banner-ads.php");

//include new phones file
include("template/_new-phones.php");
?>

<?php
//include footer file
include("footer.php");
?>