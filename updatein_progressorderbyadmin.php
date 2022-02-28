<?php

// session_start();
// if (!isset($_SESSION['admin']) ||  $_SESSION['admin'] == false ||   $_SESSION['admin'] != true) {
//   header("location: adminlogin.php");
//   exit;
// } 
// else{


$user_data_inserted = false;
$user_data_not_inserted = false;
include("connectionlogin.php");
$updateitem = $_GET['updatedid'];

if (isset($_POST['changestatus'])) {

    $itemstatus11 = $_POST['itemstatus'];
    echo $updateitem; 
    // echo    $itemstatus11;

    if ($itemstatus11 == 'Completed') {
        echo  $itemstatus11;
        // echo 0;
        // echo $updateitem;

        $exitsouserdata = " UPDATE `orders` SET `orderstatus` = '$itemstatus11' WHERE `orders`.`ordertrackid` =$updateitem;
        ";
        $result = mysqli_query($conn, $exitsouserdata);

        if ($result) {
            $exitsouserdata2 = " UPDATE `orders` SET `orderstatusbydigit` = 1 WHERE `orders`.`ordertrackid` =$updateitem;
            ";
            $result = mysqli_query($conn, $exitsouserdata2);
            header("location:adminuseractiveorders.php");
        } else {
            $user_data_not_inserted = true;
        }
    }

    if ($itemstatus11 == 'In_Progress') {
        echo  $itemstatus11;
        // echo 0;
        // echo $updateitem;

        $exitsouserdata = " UPDATE `orders` SET `orderstatus` = '$itemstatus11' WHERE `orders`.`ordertrackid` =$updateitem;
        ";
        $result = mysqli_query($conn, $exitsouserdata);

        if ($result) {
            $exitsouserdata2 = " UPDATE `orders` SET `orderstatusbydigit` =0 WHERE `orders`.`ordertrackid` =$updateitem;
            ";
            $result = mysqli_query($conn, $exitsouserdata2);
            header("location:adminuseractiveorders.php");
        } else {
            $user_data_not_inserted = true;
        }
    }


    // if ($itemstatus11 == 'In_Progress') {
    //     echo    $itemstatus11;
    //     echo 1;
    // }

    // $exitsouserdata = " UPDATE `product_item` SET `status` = '$itemstatus11' WHERE `product_item`.`productid` = $updateitem;";
    // $result = mysqli_query($conn, $exitsouserdata);

    // if($result)
    // {
    //     $user_data_inserted = true;
    // }
    // else{
    //     $user_data_not_inserted=true;
    // }



}
?>