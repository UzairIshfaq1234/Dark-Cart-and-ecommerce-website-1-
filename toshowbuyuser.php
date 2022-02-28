<?php
session_start();

include("connectionlogin.php");
$checkeidt = $_SESSION['gmail'];

$exitsouserdata = "SELECT * FROM `userprofiledeatils` WHERE gmail='$checkeidt'";
$result = mysqli_query($conn, $exitsouserdata);
$exitsouserdata = mysqli_num_rows($result);
// echo $exitsouserdata;
// ########################################################################################33
// ########################################################################################33

if ($exitsouserdata == 1) {
    $sql = "SELECT * FROM `userprofiledeatils`";
    $result = mysqli_query($conn, $sql);
    $gettingrows = mysqli_num_rows($result);

    if ($gettingrows > 0) {
        $snow = 1;

        for ($i = 0; $i < $gettingrows; $i++) {
            $data = mysqli_fetch_assoc($result);

            if ($data['gmail'] == "$checkeidt") {

                $fullname121 = $data['fullname'];
                $userpic = $data['profilepic'];
                function name($fullname121)
                {
                    echo $fullname121;
                }
                function picture($userpic)
                {
                    echo $userpic;
                }
            }
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Selling Item </title>
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
        margin-left: 200px;
        transition: all;
    transition-duration: 1s;
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

    .getstratbtn3 {
        border: 3px solid #FE4C6F;
        background-color: transparent;
        border-radius: 5px;
        width: 150px;
        height: 40px;
        margin-top: 25px;
        margin-bottom: 20px;

        transition: all;
        transition-duration: 1s;

    }

    .hoveingeffect:hover {
        font-weight: bolder;
        background-color: #FE4C6F;
        color: white;
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

    .profiopic3 {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-top: 5px;
    }

    .divlogoutimg {
        display: flex;
        align-items: center;
    flex-wrap: nowrap;

    }

    .outstock1 {
        font-weight: bolder;
        margin-top: 30px;
        color: #FE4C6F;

    }

    .outofstock2 {
        width: 100px;
        height: 100px;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    .avtived{
        font-family: 'Varela Round', sans-serif;
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
                        <a class="nav-link  avtived" href="toshowbuyuser.php">Accessiories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mycolor2" href="editprofile.php">Edit Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  mycolor2" href="displayingactiveorderuser.php">Order Details</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mycolor2 " aria-current="page" href="welcomehome.php">Profile</a>

                    </li>

                    <div class="divlogoutimg">
                        <a class="nav-link mycolor2 mycolorsdo2" href="logout.php">logout</a>
                        <img src="user-pic/<?php picture($userpic) ?>" alt="" class="profiopic3">


                    </div>

                </ul>

            </div>
        </div>
    </nav>
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

    for ($i = 0; $i < $gettingrows; $i++) {
        $data = mysqli_fetch_assoc($result);


        $productid1 = $data['productid'];
        $productpicture1 = $data['productpicture'];
        $productname1 = $data['productname'];
        $productversion1 = $data['productversion'];
        $price1 = $data['price'];
        $productdescription1 = $data['productdescription'];
        $status21 = $data['status'];


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
                <h2 class='priceitem'>Rs $price1</h2>
            </div>
                <p class='version'>$productversion1 </p>
                <h6 class='discription'>About Product</h6>
                <p class='productdetails'>$productdescription1</p>
            ";
        if ($status21 == 'In_Stock') {
            echo "
            <a href='orderform2.php?productid=$productid1' class='getstrat3'><button class='getstratbtn3 hoveingeffect'>Order Now</button></a>
            ";
        } else {
            echo "

            <img src='useriamges/out.png' alt='' class='outofstock2'>

            ";
        }


        echo "

  
            </div>
    
        </div>



    </div>";
    }


    // <h4 class='outstock1'>OUT OF STOCK</h4>


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