<?php

$deleteitamfully=$_GET['deleteid1'];
include("connectionlogin.php");

if(isset($_GET['deleteid1']))
{
    // $deleteitamfully
    // DELETE FROM `product_item` WHERE `product_item`.`sno` = 13
    $deleteitem = " DELETE FROM `product_item` WHERE `product_item`.`productid` = $deleteitamfully;";
    $result = mysqli_query($conn, $deleteitem);

    if($result)
    {
        header("location:sellingitem.php");
    }
    else{
        header("location:sellingitem.php");
    }




}

?>

