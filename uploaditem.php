<?php
$servernot = false;
$user_data_inserted = false;
$user_data_not_inserted = false;

include("connectionlogin.php");


// INSERT INTO `product_item` (`sno`, `productid`, `productpicture`, `productname`, `productversion`, `price`, `productdescription`) VALUES ('1', '999999999', 'ijij.png', 'ooioio', 'io9jkkjk', '9iikjk', '9iijkk');

if (isset($_POST['submitproduct'])) {


    $productprofile1 = $_FILES['productprofile']['name'];

    $productname1 = $_POST['productname'];
    $productversion1 = $_POST['productversion'];

    $productid = rand(1, 999999);
    $productprice1 = $_POST['productprice'];

    $desc1 = $_POST['desc'];
    $gamil1 = $_SESSION['gmail'];

    $file_name = $_FILES['productprofile']['name'];
    $dateo = date('ljS\ofFYhisA');
    $file_name2 = $dateo . $gamil1 . "_" . $file_name;
    $file_size = $_FILES['productprofile']['size'];
    $file_tmp = $_FILES['productprofile']['tmp_name'];
    $file_type = $_FILES['productprofile']['type'];

    





    $sql = "INSERT INTO `product_item` (`productid`, `productpicture`, `productname`, `productversion`, `price`, `productdescription`) VALUES ('$productid', '$file_name2', '$productname1', '$productversion1', '$productprice1','$desc1');";

    $dataenterycheck = mysqli_query($conn, $sql);
    if ($dataenterycheck) {
        if (move_uploaded_file($file_tmp, "sellingitempics/" . $file_name2)) {

            $user_data_inserted = true;
            header("location: sellingitem.php");
        } else {
            $user_data_not_inserted = true;
        }
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
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload Item</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Varela Round', sans-serif;
        font-size: 14px;

    }

    .my_styelenav {
        background-color: black;
        font-family: 'Varela Round', sans-serif;
        transition: all;
        transition-duration: 1s;
        color: white;
        font-weight: bold;
    }

    .mycolor {
        color: black;
    }

    .mycolor2 {
        color: white;
    }

    .my_styelenav a:hover {
        color: black;
    }

    .container-login100 {
        background-color: black;
    }

    .mycolorsdo2 {
        margin-left: 500px;
    }

    .avtived {
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
                        <a class="nav-link mycolor2 " aria-current="page" href="sellingitem.php">Selling-item</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active avtived" href="uploaditem.php">Upload Item</a>
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
    <!-- ##################################N A V - BAR - END######################################3 -->
    <!-- #################################################################################################### -->
    <?php
    if ($user_data_inserted) {
        echo "
    <div class='alert alert-success style12 alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your Data is successfully Updated!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }
    if ($user_data_not_inserted) {
        echo "
    <div class='alert alert-danger style123 alert-dismissible fade show' role='alert'>
        <strong>Alert!</strong> Your Data is not Updated!<br>Enter Correct Information!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }

    ?>
    <!-- #################################################################################################### -->
    <form action="uploaditem.php" enctype="multipart/form-data" method="POST" class="row g-3 needs-validation m-lg-5" novalidate>
        <h1>Product Details</h1>

        <div class="col-md-3">
            <label for="productprofile" class="form-label">Product Picture</label>
            <input type="file" class="form-control" name="productprofile" id="productprofile" required>
            <div class="invalid-feedback">
                Please provide your Product picture
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-4">
            <label for="productname" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="productname" id="productname" placeholder="Product Name" required>
            <div class="valid-feedback">
                Nice Name!
            </div>
        </div>
        <!-- ----------------------------------------- -->


        <!-- ----------------------------------------- -->

        <div class="col-md-4">
            <label for="productversion" class="form-label">Product Version</label>
            <input type="text" class="form-control" name="productversion" id="productversion" placeholder="Product Version" required>
            <div class="valid-feedback">
                I love this Version!
            </div>
        </div>
        <!-- ----------------------------------------- -->




        <!-- ----------------------------------------- -->

        <!-- ----------------------------------------- -->

        <div class="col-md-3">
            <label for="productprice" class="form-label">Price</label>
            <input type="text" class="form-control" placeholder="Price in Pkr" name="productprice" id="productprice" required>
            <div class="invalid-feedback">
                Please provide Price.
            </div>
            <div class="valid-feedback">
                Good in Price!
            </div>
        </div>
        <!-- ----------------------------------------- -->


        <!-- ----------------------------------------- -->


        <!-- ----------------------------------------- -->

        <!-- ----------------------------------------- -->

        <div class="col-md-12">
            <label for="desc" class="form-label">Product Description</label>
            <p>Use <strong>
                    < br>
                </strong> for line break and <strong>
                    < strong>
                </strong> for heading </p>
            <textarea class="form-control dicription" minlength="200" name="desc" id="desc" cols="30" rows="10"></textarea>
            <div class="valid-feedback">
                WoW great Description!
            </div>
            <div class="invalid-feedback">
                Please provide minimum 200 Word Description.
            </div>
        </div>

        <!-- ----------------------------------------- -->

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="check1" required>
                <label class="form-check-label" for="check1">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="submitproduct">Submit form</button>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>

</html>