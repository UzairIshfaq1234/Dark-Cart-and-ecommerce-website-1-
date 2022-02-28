<!-- INSERT INTO `orders` (`sno`, `userordername`, `gmailorder`, `ordertrackid`, `productid`, `quantityitem`, `cnicorder`, `phonenumber`, `phonenumber2`, `orderdate`, `addressorder`, `cityorder`, `zipcodeorder`, `countryorder`, `orderstatus`) VALUES ('1', 'userordername', 'gmailorder', 'ordertrackid', 'productid', '2', 'cnicorder', 'phonenumber', 'phonenumber2', 'orderdate', 'addressorder', 'cityorder', 'zipcodeorder', 'countryorder', 'In_Progress'); -->

<?php
session_start();
include("connectionlogin.php");
$orderusergamil112 = $_SESSION['gmail'];

$user_data_inserted = false;
$user_data_not_inserted = false;
$productid121 = $_GET['productid'];

// to get product information
$sql = "SELECT * FROM `product_item`";
$result = mysqli_query($conn, $sql);
$gettingrows = mysqli_num_rows($result);

for ($i = 0; $i < $gettingrows; $i++) {
    $data = mysqli_fetch_assoc($result);

    if ($data['productid'] == $productid121) {
        $productid1 = $data['productid'];
        $productpicture1 = $data['productpicture'];
        $productname1 = $data['productname'];
        $productversion1 = $data['productversion'];
        $price1 = $data['price'];

        // echo $productid1;

        function productid($productid1)
        {
            echo $productid1;
        }

        function picture($userpic)
        {
            echo $userpic;
        }
        function skill($userskills)
        {
            echo $userskills;
        }
    }
}

// echo    $productid1."<br>";
// echo    $productname1."<br>";

//#######################333








// echo $productid121 ."<br>";
// echo $orderusergamil112;
// echo $ordertrackid;


if (isset($_POST['placeorder'])) {
    $itemid = $_GET['itemid'];
    $sql = "SELECT * FROM `product_item`";
    $result = mysqli_query($conn, $sql);
    $gettingrows = mysqli_num_rows($result);

    for ($i = 0; $i < $gettingrows; $i++) {
        $data = mysqli_fetch_assoc($result);

        if ($data['productid'] == $itemid) {
            $productid1 = $data['productid'];
            $productpicture1 = $data['productpicture'];
            $productname1 = $data['productname'];
            $productversion1 = $data['productversion'];
            $price1 = $data['price'];
        }
    }

    $userordername1 = $_POST['fullnameorder'];
    $gmailorder1 = $orderusergamil112;
    $ordertrackid = rand(1, 999999) + rand(1, 999);
    // $productiditem =$productid121;

    $quantityitem1 = $_POST['quantityorder'];
    $cnicorder1 = $_POST['cnicorderuser'];
    $phonenumber11 = $_POST['phonenumber'];
    $phonenumber22 = $_POST['Phoneuserorder2'];

    $orderdate12 = $_POST['date'];
    $addressorder12 = $_POST['address'];
    $cityorder12 = $_POST['cityorderuser'];
    $zipcodeorder12 = $_POST['ziporderuser'];

    $countryorder12 = $_POST['countryorderuser'];
    $orderstatus = $_POST['statusorderinprog'];

    $totalprice = $price1 * $quantityitem1;

    $orderstatusbydidgit1 = 0;



    // echo "<br>".$itemid;
    // echo "<br>".   $userordername1;
    // echo "<br>".   $gmailorder1;
    // echo "<br>".   $ordertrackid;
    // echo "<br>".   $quantityitem1;
    // echo "<br>".  $cnicorder1;
    // echo "<br>".   $phonenumber11;
    // echo "<br>".$phonenumber22;
    // echo "<br>".    $orderdate12;
    // echo "<br>".$addressorder12;
    // echo "<br>".   $cityorder12;
    // echo "<br>".   $zipcodeorder12;
    // echo "<br>".  $countryorder12;
    // echo "<br>".    $orderstatus;
    // echo "<br>".  $totalprice;


    $exitsouserdata = "INSERT INTO `orders` (`userordername`, `gmailorder`, `ordertrackid`, `productid`, `quantityitem`, `totalprice`, `cnicorder`, `phonenumber`, `phonenumber2`, `orderdate`, `addressorder`, `cityorder`, `zipcodeorder`, `countryorder`, `orderstatus`, `orderstatusbydigit`,`productversion1`,`producttitle1`,`productpicture1`) VALUES ( '$userordername1', '$gmailorder1', '$ordertrackid', '$itemid', '$quantityitem1', '$totalprice', '$cnicorder1', '$phonenumber11', '$phonenumber22', '$orderdate12', '$addressorder12', '$cityorder12', '$zipcodeorder12', '$countryorder12', '$orderstatus', '$orderstatusbydidgit1','$productversion1','$productname1','$productpicture1');";



    // $exitsouserdata = "INSERT INTO `orders` (`userordername`, `gmailorder`, `ordertrackid`, `productid`, `quantityitem`, `totalprice`, `cnicorder`, `phonenumber`, `phonenumber2`, `orderdate`, `addressorder`, `cityorder`, `zipcodeorder`, `countryorder`, `orderstatus` , 'orderstatusbydigit') VALUES ('$userordername1', '$gmailorder1', '  $ordertrackid', '$itemid', '$quantityitem1', '$totalprice', '$cnicorder1', '$phonenumber11', '    $phonenumber22', '$orderdate12', '$addressorder12', '$cityorder12', '$zipcodeorder12', '$countryorder12', '  $orderstatus','$orderstatusbydidgit1');";
    $result = mysqli_query($conn, $exitsouserdata);

    if ($result) {
        $user_data_inserted = true;
        header("location:toshowbuyuser.php");
    } else {
        $user_data_not_inserted = true;
    }
}

?>












<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Order Page!</title>
</head>
<style>
    .cancel {
        text-decoration: none
    }

    .bg-pay {
        background-color: #eee;
        border-radius: 2px
    }

    .com-color {
        color: #8f37aa !important
    }

    .radio {
        cursor: pointer
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }

    label.radio div {
        padding: 7px 14px;
        border: 2px solid #8f37aa;
        display: inline-block;
        color: #8f37aa;
        border-radius: 3px;
        text-transform: uppercase;
        width: 100%;
        margin-bottom: 10px
    }

    label.radio input:checked+div {
        border-color: #8f37aa;
        background-color: #8f37aa;
        color: #fff
    }

    .fw-500 {
        font-weight: 400
    }

    .lh-16 {
        line-height: 16px
    }

    /* new */
    .order-form .container {
        color: #4c4c4c;
        padding: 20px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
    }

    .order-form-label {
        margin: 8px 0 0 0;
        font-size: 14px;
        font-weight: bold;
    }

    .order-form-input {
        width: 100%;
        padding: 8px 8px;
        border-width: 1px !important;
        border-style: solid !important;
        border-radius: 3px !important;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        font-weight: normal;
        font-style: normal;
        line-height: 1.2em;
        background-color: transparent;
        border-color: #cccccc;
    }

    .btn-submit:hover {
        background-color: #090909 !important;
    }

    .address1 {
        resize: none;
    }

    .quantityorder2 {

        width: 200px;

    }

    .quantityorder23 {

        width: 200px;
        margin-left: 20px;

    }
</style>


<body>
    <div class="container mt-3 mb-3">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex flex-row align-items-center">
                <h4 class="text-uppercase mt-1">DARK</h4> <span class="ml-2">CODERZ</span>
            </div> <a href="toshowbuyuser.php" class="cancel com-color">return to website</a>
        </div>
        <?php
        if ($user_data_inserted) {
            echo "
    <div class='alert alert-success style12 alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Order Placed successfully !
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
        }
        if ($user_data_not_inserted) {
            echo "
    <div class='alert alert-danger style123 alert-dismissible fade show' role='alert'>
        <strong>Alert!</strong> Your order is not placed check your data!<br>Enter Correct Information!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
        }

        ?>
        <div class="fillorderform">

            <section class="order-form my-4 mx-4">
                <div class="container pt-4">
                    <form action="orderform2.php?itemid=<?php echo $productid1; ?> " method="POST">
                        <div class="row">
                            <div class="col-12">
                                <h1>Order Form</h1>
                                <span>Ordering Item: <?php echo $productname1; ?></span>
                                <hr class="mt-1">
                            </div>
                            <div class="col-12">

                                <div class="row mx-4">
                                    <div class="col-12 mb-2">
                                        <label class="order-form-label">Full Name</label>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input class="order-form-input" required name="fullnameorder" placeholder="Full Name">
                                    </div>

                                    <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                                        <input class="order-form-input" name="gmailorderuser" disabled placeholder="uzairishfaq1234@gmail.com" value=<?php echo $orderusergamil112; ?>>
                                    </div>

                                    <div class="col-12 mb-2">
                                        <label class="order-form-label">Product Name</label>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input class="order-form-input" disabled required name="productorderuser" value=<?php echo $productname1; ?>>
                                    </div>

                                    <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                                        <input class="order-form-input" name="Versionorderuser" disabled value=<?php echo  $productversion1; ?>>
                                    </div>



                                    <div class="col-12 mb-2">
                                        <label class="order-form-label">Single Product Price</label>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input class="order-form-input" disabled required name="productorderuser" value=<?php echo "Rs:-" . $price1; ?>>
                                    </div>


                                    <select class='form-select quantityorder2' name='quantityorder' id='quantityorder' required>
                                        <option selected disabled value=''>Quantity</option>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                    </select>


                                    <select class='form-select quantityorder23' name='statusorderinprog' id='statusorderinprog' required>
                                        <option value='In_Progress'>In_progress</option>
                                    </select>

                                </div>

                                <div class="row mt-3 mx-4">
                                    <div class="col-12">
                                        <label class="order-form-label">CNIC</label>
                                    </div>
                                    <div class="col-12">
                                        <input class="order-form-input" name="cnicorderuser" minlength="13" maxlength="13" required placeholder="17201**********7">
                                    </div>
                                </div>

                                <div class="row mt-3 mx-4">
                                    <div class="col-12">
                                        <label class="order-form-label">Phone Number</label>
                                    </div>
                                    <div class="col-12">
                                        <input class="order-form-input" required name="phonenumber" minlength="11" maxlength="11" placeholder="0344577******">
                                    </div>
                                </div>

                                <div class="row mt-3 mx-4">
                                    <div class="col-12">
                                        <label class="order-form-label" for="date-picker-example">Date</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="date" required name="date" class="order-form-input datepicker" placeholder="Selected date" type="text" id="date-picker-example">
                                    </div>
                                </div>

                                <div class="row mt-3 mx-4">
                                    <div class="col-12">
                                        <label class="order-form-label">Adress</label>
                                    </div>
                                    <div class="col-12">

                                        <textarea required class="order-form-input address1" name="address" id="address" cols="20" rows="3"></textarea>
                                    </div>

                                    <div class="col-12 col-sm-6 mt-2 pr-sm-2">
                                        <input class="order-form-input" required name="cityorderuser" placeholder="City">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-2 pl-sm-0">
                                        <input class="order-form-input" required name="Phoneuserorder2" placeholder="Phone Number (Must be Differnt From previous)">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-2 pr-sm-2">
                                        <input class="order-form-input" required name="ziporderuser" placeholder="Postal / Zip Code">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-2 pl-sm-0">
                                        <input class="order-form-input" required name="countryorderuser" placeholder="Country">
                                    </div>
                                </div>

                                <div class="row mt-3 mx-4">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" required name="validation" id="validation" value="1">
                                            <label for="validation" class="form-check-label">I Filled All Details </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-12">
                                        <button type="submit" name="placeorder" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            $('.datepicker').pickadate();
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>