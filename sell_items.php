<?php
session_start();
$servernot = false;
$user_data_inserted = false;
$user_data_not_inserted = false;

include("connectionlogin.php");
$checkeidt = $_SESSION['gmail'];
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
?>


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

    <title>Seller</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Varela Round', sans-serif;

    }

    .my_styelenav {
        background-color: #FE4C6F;
        font-family: 'Varela Round', sans-serif;
        font-weight: bolder;

    }

    .mycolor {
        color: white;

    }

    .mycolor2 {

        color: black;
        font-weight: bolder;
    }


    .my_styelenav a:hover {
        color: black;
        font-weight: bolder;
    }

    .mycolorsdo2 {
        margin-left: 850px;
    }

    .mycolor {
        transition: all;
        transition-duration: 1s;
    }

    .mycolorsdo {
        color: white;

    }

    .sellcolor {
        color: black;
    }

    .profiopic3 {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-top: 5px;
    }

    .divlogoutimg {
        display: flex;

    }
    .container-login100 
	{
		background-color:white;
	}
</style>

<body class="container-login100">

    <!-- ############################# NAV STARTED ####################################### -->

    <nav class=" my_styelenav navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="  navbar-brand mycolorsdo mycolor" href="#">DARKCODERZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mycolorsdo mycolor" aria-current="page" href="welcomehome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mycolorsdo mycolor" href="editprofile.php">Edit Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link sellcolor mycolor" href="sell_items.php">Sell</a>
                    </li>
                    <li class="nav-item">
                        <div class="divlogoutimg">
                            <a class="nav-link  mycolorsdo mycolorsdo2 mycolor" href="logout.php">logout</a>
                            <img src="user-pic/<?php picture($userpic) ?>" alt="" class="profiopic3">

                        </div>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!-- ############################# NAV ENDED ####################################### -->
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