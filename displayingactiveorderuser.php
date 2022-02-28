<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User Order Deatils Page!</title>
</head>
<style>
    .firstbox {
        box-shadow: 0px 0px 4px grey;
        margin-top: 20px;
        margin-left: 20px;
        display: flex;
        border-radius: 5px;

    }

    .orderitemimage {
        width: 200px;
        height: 210px;
        margin-top: 50px;
        margin-left: 20px;
    }

    .heading2 {
        font-size: 40px;
    }

    .head21 {
        color: rgb(128, 209, 6);
    }

    .itemname {
        margin-top: 30px;
    }

    .versions {
        font-weight: bold;
        font-family: 'Varela Round', sans-serif;
        margin-right: 50px;

    }

    .version1 {
        font-weight: lighter;
    }

    .dataitems {
        margin-left: 40px;
    }

    .moredat1 {
        display: flex;

    }

    .takeaddress {

        width: 700px;
    }

    .gonr23 {
        display: flex;
      
    }

    .status {
        color: rgb(22, 192, 98);
        margin-top: 10px;
        font-weight: bolder;
        font-family: 'Varela Round', sans-serif;
        margin-left: 40px;

    }

    .pricing {
        margin-left: 60px;
        font-weight: bolder;
        font-family: 'Varela Round', sans-serif;
        color: rgb(255, 255, 255);
        background-color: #000000;
        padding: 9px;
        border-radius: 5px;

    }
    .moredat12
    {
        display: flex;
        margin-bottom: 20px;

    }
    .btnback
    {
        text-decoration: none;
        color: white;
        background-color:black;
        padding: 9px;
        transition: all;
        transition-duration: 1s;
        font-weight: bold;
        font-family: 'Varela Round', sans-serif;
        border-radius: 4px;

    }
    .btnback:hover
    {
        background-color: white;
        color: #000000;
    }
    .coloror
    {
        color: red;
    }
    .hedo
    {
        margin-top: 30px;
    }
    .lino
    {
        border: 2px solid black;
    }
    .status1 {
        color: red;
        margin-top: 10px;
        font-weight: bolder;
        font-family: 'Varela Round', sans-serif;
        margin-left: 40px;

    }
</style>

<body>
    <div class="container mt-3 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex flex-row align-items-center">
                <h4 class="text-uppercase mt-1">DARK</h4> <span class="ml-2">CODERZ</span>
            </div> <a href="toshowbuyuser.php" class="cancel com-color btnback">return to website</a>
        </div>
        <hr class="lino">
        <div class="d-flex justify-content-between align-items-center mb-5">

            <h4 class="text-uppercase mt-1 heading2">IN PROGRESS <span class="head21">ORDERS</span></h4>

        </div>
        <hr class="lino">
        <!-- #######################################################################################################
####################################################################################################### -->

        <?php


        session_start();

        include("connectionlogin.php");
        $needusergmail = $_SESSION['gmail'];

        // ##############################################################################
        // ##############################################################################
        $sql1 = "SELECT * FROM `orders`";
        $result1 = mysqli_query($conn, $sql1);
        $gettingrows1 = mysqli_num_rows($result1);

        for ($i = 0; $i < $gettingrows1; $i++) {
            $data = mysqli_fetch_assoc($result1);


            $userordername1 = $data['userordername'];
            $gmailorder1 = $data['gmailorder'];
            $ordertrackid1 = $data['ordertrackid'];

            $productid123 = $data['productid'];

            $quantityitem1 = $data['quantityitem'];
            $totalprice1 = $data['totalprice'];
            $cnicorder1 = $data['cnicorder'];
            $phonenumber1 = $data['phonenumber'];
            $phonenumber21 = $data['phonenumber2'];
            $orderdate1 = $data['orderdate'];
            $addressorder1 = $data['addressorder'];
            $cityorder1 = $data['cityorder'];
            $zipcodeorder1 = $data['zipcodeorder'];
            $countryorder1 = $data['countryorder'];
            $orderstatus1 = $data['orderstatus'];
            $orderstatusbydigit1 = $data['orderstatusbydigit'];

            $productversion12 = $data['productversion1'];
            $producttitle112 = $data['producttitle1'];
            $productpicture12 = $data['productpicture1'];





            if ($gmailorder1 == $needusergmail) {
                if ($orderstatusbydigit1 == 0) {
                    echo "
                    <div class='firstbox'>
            <div class='imageitem'>
                <img src='sellingitempics/$productpicture12' alt='' class='orderitemimage'>
            </div>

            <div class='dataitems'>
                <div class='moredata12'>
                    <h4 class='itemname'>$producttitle112</h4>
                    <p class='versions'>Order Tracking Id: <span class='version1'>$ordertrackid1</span></p>
                </div>
                <div class='moredat1'>
                    <p class='versions1 versions'>Version: <span class='version12 version1'>      $productversion12</span></p>
                    <p class='versions1 versions'>Phone No: <span class='version12 version1'>  $phonenumber1</span></p>
                    <p class='versions1 versions'>Date of Order: <span class='version12 version1'> $orderdate1</span></p>
                </div>
                <div class='divmore3'>
                    <h5 class='address12'>ADDRESS</h5>
                    <p class='takeaddress'> $addressorder1</p>
                </div>
                <div class='moredat1'>
                    <p class='versions1 versions'>City: <span class='version12 version1'>$cityorder1</span></p>
                    <p class='versions1 versions'>Contact No: <span class='version12 version1'> $phonenumber21</span></p>
                    <p class='versions1 versions'>Cnic: <span class='version12 version1'>    $cnicorder1 </span></p>
                </div>
                <div class='gonr23'>
                    <div class='dataidk'>
                        <p class='versions1 versions'>Quantity: <span class='version12 version1'> $quantityitem1</span></p>
                        <p class='versions1 versions'>Country: <span class='version12 version1'>  $countryorder1 </span></p>
                    </div>
                    <div class='inprograes'>
                        <h4 class='status'>$orderstatus1</h4>
                    </div>
                    <div class='price'>
                        <h5 class='pricing'>RS: $totalprice1 </h5>
                    </div>

                    
                </div>
                <div class='moredat12'>
                <p class='versions1 versions'>UserName:<br> <span class='version12 version1'>$userordername1</span></p>
                <p class='versions1 versions'>Gmail Used:<br> <span class='version12 version1'>$gmailorder1</span></p>
                <p class='versions1 versions'>Postal/Zip Code:<br> <span class='version12 version1'>$zipcodeorder1 </span></p>
            </div>
                
            </div>
        </div>
                    
                    
                    ";
                }
            }
        }




        ?>
<hr class="lino">
<div class="d-flex justify-content-between align-items-center mb-5 hedo ">

<h4 class="text-uppercase mt-1 heading2 ">COMPLETED <span class="head21 coloror">ORDERS</span></h4>

</div>
<hr class="lino">
<?php


session_start();

include("connectionlogin.php");
$needusergmail = $_SESSION['gmail'];

// ##############################################################################
// ##############################################################################
$sql1 = "SELECT * FROM `orders`";
$result1 = mysqli_query($conn, $sql1);
$gettingrows1 = mysqli_num_rows($result1);

for ($i = 0; $i < $gettingrows1; $i++) {
    $data = mysqli_fetch_assoc($result1);


    $userordername1 = $data['userordername'];
    $gmailorder1 = $data['gmailorder'];
    $ordertrackid1 = $data['ordertrackid'];

    $productid123 = $data['productid'];

    $quantityitem1 = $data['quantityitem'];
    $totalprice1 = $data['totalprice'];
    $cnicorder1 = $data['cnicorder'];
    $phonenumber1 = $data['phonenumber'];
    $phonenumber21 = $data['phonenumber2'];
    $orderdate1 = $data['orderdate'];
    $addressorder1 = $data['addressorder'];
    $cityorder1 = $data['cityorder'];
    $zipcodeorder1 = $data['zipcodeorder'];
    $countryorder1 = $data['countryorder'];
    $orderstatus1 = $data['orderstatus'];
    $orderstatusbydigit1 = $data['orderstatusbydigit'];

    $productversion12 = $data['productversion1'];
    $producttitle112 = $data['producttitle1'];
    $productpicture12 = $data['productpicture1'];





    if ($gmailorder1 == $needusergmail) {
        if ($orderstatusbydigit1 == 1) {
            echo "
            <div class='firstbox'>
    <div class='imageitem'>
        <img src='sellingitempics/$productpicture12' alt='' class='orderitemimage'>
    </div>

    <div class='dataitems'>
        <div class='moredata12'>
            <h4 class='itemname'>$producttitle112</h4>
            <p class='versions'>Order Tracking Id: <span class='version1'>$ordertrackid1</span></p>
        </div>
        <div class='moredat1'>
            <p class='versions1 versions'>Version: <span class='version12 version1'>      $productversion12</span></p>
            <p class='versions1 versions'>Phone No: <span class='version12 version1'>  $phonenumber1</span></p>
            <p class='versions1 versions'>Date of Order: <span class='version12 version1'> $orderdate1</span></p>
        </div>
        <div class='divmore3'>
            <h5 class='address12'>ADDRESS</h5>
            <p class='takeaddress'> $addressorder1</p>
        </div>
        <div class='moredat1'>
            <p class='versions1 versions'>City: <span class='version12 version1'>$cityorder1</span></p>
            <p class='versions1 versions'>Contact No: <span class='version12 version1'> $phonenumber21</span></p>
            <p class='versions1 versions'>Cnic: <span class='version12 version1'>    $cnicorder1 </span></p>
        </div>
        <div class='gonr23'>
            <div class='dataidk'>
                <p class='versions1 versions'>Quantity: <span class='version12 version1'> $quantityitem1</span></p>
                <p class='versions1 versions'>Country: <span class='version12 version1'>  $countryorder1 </span></p>
            </div>
            <div class='inprograes'>
                <h4 class='status1'>$orderstatus1</h4>
            </div>
            <div class='price'>
                <h5 class='pricing'>RS: $totalprice1 </h5>
            </div>

            
        </div>
        <div class='moredat12'>
        <p class='versions1 versions'>UserName:<br> <span class='version12 version1'>$userordername1</span></p>
        <p class='versions1 versions'>Gmail Used:<br> <span class='version12 version1'>$gmailorder1</span></p>
        <p class='versions1 versions'>Postal/Zip Code:<br> <span class='version12 version1'>$zipcodeorder1 </span></p>
    </div>
        
    </div>
</div>
            
            
            ";
        }
    }
}




?>

        <!-- #######################################################################################################
####################################################################################################### -->
  

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