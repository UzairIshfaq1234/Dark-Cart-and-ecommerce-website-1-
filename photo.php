<?php
session_start();
$servernot = false;
$user_data_inserted = false;
$user_data_not_inserted = false;

// echo $_SESSION['gmail'];;
include("connectionlogin.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $skillsuser1 = $_POST['skillsuser'];
    $fullusername1 = $_POST['fullusername'];
    $countryuser1 = $_POST['countryuser'];
    $primlanguage1 = $_POST['primlanguage'];
    $secondlangauge1 = $_POST['secondlangauge'];
    $facebooklink1 = $_POST['facebooklink'];
    $instalink1 = $_POST['instalink'];
    $twitterlink1 = $_POST['twitterlink'];
    $githublink1 = $_POST['githublink'];
    $desc1 = $_POST['desc'];
    $gamil1 = $_SESSION['gmail'];
    $profilepic1 = $_POST['profilepic'];
    // ################## getting image ###############3333 





    $exitsouserdata = "SELECT * FROM `userprofiledeatils` WHERE gmail='$gamil1'";
    $result = mysqli_query($conn, $exitsouserdata);
    $exitsouserdata = mysqli_num_rows($result);
    // echo $exitsouserdata;
    if ($exitsouserdata == 1) {


        $file_name = $_FILES['profilepic']['name'];
        $file_size = $_FILES['profilepic']['size'];
        $file_tmp = $_FILES['profilepic']['tmp_name'];
        $file_type = $_FILES['profilepic']['type'];

        if (move_uploaded_file($file_tmp, "user-pic/" . $file_name)) {
            echo "Successfully uploaded.";
        } else {
            echo "Could not upload the file.";
        }




        $sql = "UPDATE `userprofiledeatils` SET 
        `profilepic`='$profilepic1'
        ,`fullname` = '$fullusername1'
        ,`skill` = '$skillsuser1'
        ,`country` = '$countryuser1'
        ,`primlang` = '$primlanguage1'
        ,`seclang` = '$secondlangauge1'
        ,`fblink` = '$facebooklink1'
        ,`instalink` = '$instalink1'
        ,`twilink` = '$twitterlink1'
        ,`gitlink` = '$githublink1'
        ,`descript` = '$desc1'
            
        WHERE `gmail` = '$gamil1'";
        $dataenterycheck = mysqli_query($conn, $sql);
        if ($dataenterycheck) {
            $user_data_inserted = true;
        } else {
            $user_data_not_inserted = true;
        }
    } else {
        $file_name = $_FILES['profilepic']['name'];
        $file_size = $_FILES['profilepic']['size'];
        $file_tmp = $_FILES['profilepic']['tmp_name'];
        $file_type = $_FILES['profilepic']['type'];

        if (move_uploaded_file($file_tmp, "user-pic/" . $file_name)) {
            echo "Successfully uploaded.";
        } else {
            echo "Could not upload the file.";
        }






        $sql = "INSERT INTO `userprofiledeatils` (`gmail`, `profilepic`, `fullname`, `skill`, `country`, `primlang`, `seclang`, `fblink`, `instalink`, `twilink`, `gitlink`, `descript`) VALUES ('$gamil1','$profilepic1',' $fullusername1', '$skillsuser1', '$countryuser1', '$primlanguage1','$secondlangauge1',' $facebooklink1', '$instalink1','$twitterlink1','$githublink1',' $desc1');";
        $dataenterycheck = mysqli_query($conn, $sql);
        if ($dataenterycheck) {
            $user_data_inserted = true;
            header("location: welcomehome.php");
        } else {
            $user_data_not_inserted = true;
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
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Profile</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Varela Round', sans-serif;

    }

    .my_styelenav {
        background-color: #59ffcd;
        font-family: 'Varela Round', sans-serif;

    }

    .mycolor {
        color: rgb(0, 0, 0);
    }

    .mycolor2 {
        color: rgb(255, 255, 255);
        font-weight: bolder;
    }


    .my_styelenav a:hover {
        color: white;
        font-weight: bolder;
    }

    .dicription {
        resize: none;
    }

    .style12 {
        background-color: greenyellow;
        color: #000;
        border: none;
    }

    .style123 {
        background-color: red;
        color: white;

    }
</style>

<body>

    <!-- ############################################################################################33 -->
    <nav class="navbar navbar-expand-lg my_styelenav">
        <div class="container-fluid">
            <a class="navbar-brand mycolor" href="#">DARKCODERZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mycolor " aria-current="page" href="welcomehome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mycolor2" href="#">Edit Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mycolor" href="logout.php">logout</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!-- #################################################################################################### -->
    <?php
    if ($user_data_inserted) {
        echo "
    <div class='alert alert-success style12 alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your Data is successfully Submitted!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }
    if ($user_data_not_inserted) {
        echo "
    <div class='alert alert-danger style123 alert-dismissible fade show' role='alert'>
        <strong>Alert!</strong> Your Data is not Submitted!<br>Enter Correct Information!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
    }

    ?>
    <!-- #################################################################################################### -->
    <form action="editprofile.php" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation m-lg-5" novalidate>
        <h1>PROFILE INFORMATION</h1>

        <div class="col-md-3">
            <label for="profilepic" class="form-label">Profile Picture</label>
            <input type="file" class="form-control" name="profilepic" id="profilepic" required>
            <div class="invalid-feedback">
                Please provide your picture
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-4">
            <label for="fullusername" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullusername" id="fullusername" placeholder="Full Name" required>
            <div class="valid-feedback">
                Nice Name!
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-3">
            <label for="skillsuser" class="form-label">Skill</label>
            <select class="form-select" name="skillsuser" id="skillsuser" required>
                <option selected disabled value="">Expert In</option>
                <option value="Graphic-Designer">Graphic-Designer</option>
                <option value="Web-Designer">Web-Designer</option>
                <!-- <option value="Web-Developer">Web-Developer</option>
                <option value="App-Developer">App-Developer</option>
                <option value="App-Designer">App-Designer</option>
                <option value="Python-Programmer">Python-Programmer</option>
                <option value="Java-Programmer">Java-Programmer</option>
                <option value="React-Developer">React-Developer</option>
                <option value="Larval-Developer">Larval-Developer</option>
                <option value="">Data-Entry-Professional</option>
                <option value="">Web-Scraper</option>
                <option value="">WordPress-Developer</option>
                <option value="">Search-Engine-Optimizer</option>
                <option value="">Vedio-Editor</option>
                <option value="">Animator</option>
                <option value="">Photo-Editor</option>
                <option value="">Game-developer</option> -->


            </select>
            <div class="invalid-feedback">
                Please select a valid Skill.
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-4">
            <label for="countryuser" class="form-label">Country</label>
            <input type="text" class="form-control" name="countryuser" id="countryuser" placeholder="Country" required>
            <div class="valid-feedback">
                I love this Country!
            </div>
        </div>
        <!-- ----------------------------------------- -->



        <div class="col-md-3">
            <label for="primlanguage" class="form-label">Primary Language</label>
            <select class="form-select" name="primlanguage" required>
                <option selected disabled value="">Primary Language</option>
                <option value="English(UK)">English(UK)</option>
                <option value="Urdu">Urdu</option>
                <option value="Chiniese">Chiniese</option>

            </select>
            <div class="invalid-feedback">
                Please select a Primary Language.
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-3">
            <label for="secondlangauge" class="form-label">Secondary Language</label>
            <select class="form-select" name="secondlangauge" id="secondlangauge" required>
                <option selected disabled value="">Secondary Language</option>
                <option value="English(American)">English(American)</option>
                <option value="Urdu(Pakistani)">Urdu(Pakistani)</option>
                <option value="Bangla">Bangla</option>

            </select>
            <div class="invalid-feedback">
                Please select a Secondry Language.
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-3">
            <label for="facebooklink" class="form-label">Facebook</label>
            <input type="text" class="form-control" placeholder="Facebook Link" name="facebooklink" id="facebooklink" required>
            <div class="invalid-feedback">
                Please provide your facebook link.
            </div>
            <div class="valid-feedback">
                Facebook link Provided!
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-3">
            <label for="instalink" class="form-label">Instagram</label>
            <input type="text" class="form-control" placeholder="Instagram Link" name="instalink" id="instalink" required>
            <div class="invalid-feedback">
                Please provide your Instgram link.
            </div>
            <div class="valid-feedback">
                Instagram link Provided!
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Twitter</label>
            <input type="text" class="form-control" placeholder="Twitter Link" name="twitterlink" id="twitterlink" required>
            <div class="invalid-feedback">
                Please provide your Twitter link.
            </div>
            <div class="valid-feedback">
                Twitter link Provided!
            </div>
        </div>

        <!-- ----------------------------------------- -->

        <div class="col-md-3">
            <label for="githublink" class="form-label">Github</label>
            <input type="text" placeholder="Github Link" class="form-control" name="githublink" id="githublink" required>
            <div class="invalid-feedback">
                Please provide your Github link.
            </div>
            <div class="valid-feedback">
                GitHub link Provided!
            </div>
        </div>
        <!-- ----------------------------------------- -->

        <div class="col-md-12">
            <label for="desc" class="form-label">Description</label>
            <textarea class="form-control dicription" name="desc" id="desc" cols="30" rows="10"></textarea>
            <div class="valid-feedback">
                WoW great Description!
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
            <button class="btn btn-primary" type="submit">Submit form</button>
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