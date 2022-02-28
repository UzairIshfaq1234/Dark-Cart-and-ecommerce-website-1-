<?php

// session_start();
// if (!isset($_SESSION['admin']) ||  $_SESSION['admin'] == false ||   $_SESSION['admin'] != true) {
//   header("location: adminlogin.php");
//   exit;
// } 
// else{


$user_data_inserted = false;
$user_data_not_inserted=false;
include("connectionlogin.php");
$updateitem=$_GET['updatedid'];

if(isset($_POST['changestatus']))
{
    
    $itemstatus11 = $_POST['itemstatus'];
    // echo $updateitem; 
    // echo    $itemstatus11;
    
    $exitsouserdata = " UPDATE `product_item` SET `status` = '$itemstatus11' WHERE `product_item`.`productid` = $updateitem;";
    $result = mysqli_query($conn, $exitsouserdata);

    if($result)
    {
        $user_data_inserted = true;
    }
    else{
        $user_data_not_inserted=true;
    }
   


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selling Item </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Varela Round', sans-serif;

    }

    .my_styelenav {
        background-color:black;
        font-family: 'Varela Round', sans-serif;
        font-weight: bolder;

        color: white;
    }

    .mycolor {
        color: black;
        font-weight: bolder;
    }

    .mycolor2 {
        color: white;
        font-weight: bolder;
    }

    .my_styelenav a:hover {
        color: black;
        font-weight: bolder;
    }

    .container-login100 {
        background-color: black;
    }

    .mycolorsdo2 {
        margin-left: 620px;
    }

    /* ###################################################################################3 */
    .productimage {
        width: 250px;
        height: 250px;
        margin-top: 30px;
        margin-left: 20px;
    }

    .firsthead {
        font-family: 'Varela Round', sans-serif;
        font-weight: bolder;
        margin-top: 30px;
        margin-left: 25px;
    }

    .productimage1 {
        width: 100%;
    }

    .diplayitem {
        /* height: 500px; */
        box-shadow: 0px 0px 4px grey;
        margin-left: 25px;
        margin-top: 20px;
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;


    }

    .displaycontent {
        display: flex;
    }





    .dataproduct {
        margin-top: 20px;
        margin-left: 30px;
    }

    .discription {
        font-weight: bolder;
        margin-top: 10px;
    }

    .productdetails {
        width: 700px;
    }

    .priceing {
        display: flex;
        flex-direction: column;
        justify-content: center;

    }

    .priceitem {
        color: black;
        text-shadow: 1px 1px 5px solid #FE4C6F;
        /* padding-left: 100px; */
        margin-top: 10px;
        margin-bottom: 10px;
font-family:Verdana, Geneva, Tahoma, sans-serif;
    }

    .head12 {
        font-size: 60px;
    }

    .info {
        margin-left: 3px;
        font-size: 30px;
        font-family: 'Varela Round', sans-serif;


    }
    .itemactionfor
    {
        display: flex;
    }
    .statusitems
    {
        border: 3px solid #FE4C6F;
        border-radius: 5px;
        margin-bottom:60px;
        margin-top: 22px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 5px;

    }
    .itemstatus1
    {
        font-size: 18px;
        font-weight:bold;
    }
    .itemstatus2
    {
        border-radius: 5px;

        font-size: 17px;
        border: 2px solid #FE4C6F;
        padding-left: 10px;
    }
.exrtasub
{
    margin-top: -4px;
    background-color: #FE4C6F;
    border: none;
}
.itemstatusdisplay
{
    font-size: 14px;
    font-family: 'Varela Round', sans-serif;
    font-weight: bold;
    margin-bottom: 15px;
    margin-top: 10px;

}
.exrtasub1
{
    margin-top: 45px;
    background-color: #FE4C6F;
    margin-left: 20px;
    border: none;
}
.avtived{
color: aqua;   

font-weight: bolder;
    }
</style>

<body>
    <!-- ##################################N A V - BAR - STRAT######################################3 -->

    <nav class="navbar navbar-expand-lg my_styelenav">
        <div class="container-fluid">
            <a class="navbar-brand mycolor2" href="#">DARKCODERZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active avtived " aria-current="page" href="sellingitem.php">Selling-item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  mycolor2" href="uploaditem.php">Upload Item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mycolor2" href="adminuseractiveorders.php">Active Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mycolor2  " href="adminusercompletedorder.php">Completed Orders</a>
                    </li>

                    <div class="divlogoutimg">
                        <a class="nav-link mycolor2 mycolorsdo2" href="adminlogout.php">logout</a>

                    </div>

                </ul>

            </div>
        </div>
    </nav>
    <?php
    if ($user_data_inserted) {
        echo "
    <div class='alert alert-success style12 alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your Status is successfully Updated!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }
    if ($user_data_not_inserted) {
        echo "
    <div class='alert alert-danger style123 alert-dismissible fade show' role='alert'>
        <strong>Alert!</strong> Your Status is not Updated!<br>Enter Correct Information!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }

    ?>
    <!-- ##################################N A V - BAR - END######################################3 -->

    <!-- ##################################display strat######################################3 -->
    <div class="topheadimg">
        <img src="https://i.gadgets360cdn.com/large/samsung_galaxyx_a01_core_1595334669634.jpg?downsize=950:*" alt="" class="productimage1">

    </div>


    <div class="firsthead">
        <h1 class="head12">Buy Now!</h1>
        <p class="info">We trust Our Quality!</p>

    </div>
    <?php
    include("connectionlogin.php");

    $sql = "SELECT * FROM `product_item`";
    $result = mysqli_query($conn, $sql);
    $gettingrows = mysqli_num_rows($result);

    for ($i = 0; $i < $gettingrows; $i++) 
    {
        $data = mysqli_fetch_assoc($result);


        $productid1 = $data['productid'];
        $productpicture1 = $data['productpicture'];
        $productname1 = $data['productname'];
        $productversion1 = $data['productversion'];
        $price1 = $data['price'];
        $status21 = $data['status'];

        $productdescription1 = $data['productdescription'];


        echo
        " 
        <div class='diplayitem'>
        <div class='displaycontent'>
            <div class='imagedisplay'>
                <img src='sellingitempics/$productpicture1' alt='' class='productimage'>
            </div>
            <div class='dataproduct'>
                <h4 class='itemhead'> $productname1</h4>
                
        <div class='priceing'>
                <h2 class='priceitem'>Rs:$price1</h2>
            </div>
                <p class='version'>$productversion1 </p>
                <h6 class='discription'>About Product</h6>
                <p class='productdetails'>$productdescription1</p>

                <div class='itemactionfor'>
                

                <div class='statusitems'>
                <form action='sellingitem.php?updatedid=$productid1' method='POST'>

                <label for='itemstatus' class='form-label itemstatus1'>Status</label>

                <select class='form-select itemstatus2' name='itemstatus' id='itemstatus' required>
                    <option selected disabled value=''>Status</option>
                    <option value='In_Stock'>In Stock</option>
                    <option value='Out_of_Stock'>Out of Stock</option>
                </select>

                <button class='btn btn-primary exrtasub' type='submit' name='changestatus'>Change Status</button>

    
                </form>

                <h6 class='itemstatusdisplay'>Current-Status: <span class='itemdispayite'>$status21</span></h6>
    
                </div>

                <div>

                <a href='deleteitemforever.php?deleteid1=$productid1' class='itemdelete'><button class='btn btn-primary exrtasub1' name='delete12'>Delete Item</button>
                </a>

                </div>

                </div>

     

                





            </div>
    
   
        </div>


    </div>";
    }




    ?>




    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>

</html>