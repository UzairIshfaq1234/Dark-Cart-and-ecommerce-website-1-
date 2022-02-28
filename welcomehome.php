<?php


session_start();
if (!isset($_SESSION['logined']) ||  $_SESSION['logined'] == false ||   $_SESSION['logined'] != true) {
  header("location: login.php");
  exit;
} 




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
          $userskills = $data['skill'];
          $usercountry = $data['country'];
          $userprimlang = $data['primlang'];
          $userseclang = $data['seclang'];
          $userfblink = $data['fblink'];
          $userinstalink = $data['instalink'];
          $usertwitlink = $data['twilink'];
          $usergitlink = $data['gitlink'];
          $userdescription = $data['descript'];
          $dstmp = $data['dstmp'];




          function name($fullname121)
          {
            echo $fullname121;
          }
          function picture($userpic)
          {
            echo $userpic;
          }
          function skill($userskills)
          {
            echo $userskills;
          }
          function country($usercountry)
          {
            echo $usercountry;
          }
          function plange($userprimlang)
          {
            echo  $userprimlang;
          }
          function slange($userseclang)
          {
            echo  $userseclang;
          }
          function fblinko($userfblink)
          {
            echo   $userfblink;
          }
          function instalink($userinstalink)
          {
            echo  $userinstalink;
          }
          function twittlink($usertwitlink)
          {
            echo $usertwitlink;
          }
          function gitlink($usergitlink)
          {
            echo  $usergitlink;
          }
          function userdesc($userdescription)
          {
            echo  $userdescription;
          }
          function date12($dstmp)
          {
            echo  $dstmp;
          }



          $snow++;
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

  <title>Profile</title>
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
font-size: 14px;
    color: white;
  }

  .my_styelenav a:hover {
    color: black;
    font-weight: bolder;
  }

  .mycolor {
    color: black;
  }

  .mycolorsdo {
    color: white;

  }

  .userlogo {
    width: 155px;
    height: 160px;
    border-radius: 100%;
    /* border: 3px solid #59ffcd; */
    /* box-shadow: 1px 1px 3px #59ffcd; */
  }

  .moredata_about_user {
    box-shadow: 0px 0px 4px grey;
    width: 270px;
    height: 350px;
    margin-top: 10px;
    margin-left: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;

  }

  .image_user {
    padding-top: 10px;
  }

  .username_person {
    margin-top: 10px;
    font-weight: bold;
    text-align: center;
  }

  .description_user {
    /* margin-left: 10px; */
    text-align: center;
  }

  .from_user {
    /* margin-left: 45px; */
    text-align: center;
  }

  .first_design {
    display: flex;
  }

  .second_container {
    box-shadow: 0px 0px 4px grey;
    height: 350px;
    width: 100vw;
    margin-top: 10px;
    margin-left: 5px;
    overflow: hidden;

  }

  .introduce {
    overflow: hidden;
    font-weight: bold;
    margin-left: 10px;
    margin-top: 5px
  }

  .your_dec {
    overflow: hidden;
    margin-left: 10px;


  }

  .languages_head {
    overflow: hidden;
    font-weight: bold;
    margin-left: 10px;
    margin-top: 5px
  }

  .first_lang {
    overflow: hidden;
    margin-left: 10px;


  }

  .social_icons {
    display: flex;
    align-items: center;
    justify-content: center;

  }

  .fbicon {
    padding: 20px;
    cursor: pointer;
  }

  .years {
    color: #FE4C6F;
    font-weight: bold;

  }

  .year12 {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }

  .container-login100 {
    background-color: white;
  }

  .social_icons1 {
    box-shadow: 1px 1px 10px solid black;
  }

  .getnoticed {
    width: 300px;
  }

  .getnoticed2 {
    width: 300px;
  }

  .getnoticed3 {
    width: 300px;
  }

  .topskills {
    display: flex;
    justify-content: center;
    box-shadow: 0px 0px 4px grey;
    height: 350px;
    width: 98.4vw;
    margin-top: 10px;
    margin-bottom: 25px;

    margin-left: 5px;
    overflow: hidden;
    padding-top: 40px;
    justify-content: space-around;

  }

  .containoincontaino {
    width: 900px;
  }

  .skillfont {
    color: black;
    font-weight: bolder;
  }

  .getstratbtn3 {
    border: 3px solid #FE4C6F;
    background-color: transparent;
    border-radius: 5px;
    width: 150px;
    height: 40px;
    margin-top: 25px;
    transition: all;
    transition-duration: 1s;

  }

  .getstratbtn {
    border: 3px solid #FE4C6F;
    background-color: transparent;
    border-radius: 5px;
    width: 150px;
    height: 40px;
    margin-top: 45px;
    transition: all;
    transition-duration: 1s;
  }

  .getstratbtn2 {
    border: 3px solid #FE4C6F;
    background-color: transparent;
    border-radius: 5px;
    width: 150px;
    height: 40px;
    transition: all;
    transition-duration: 1s;
  }

  .hoveingeffect:hover {
    font-weight: bolder;
    background-color: #FE4C6F;
    color: white;
  }

  .paddingtoiamges {
    padding-bottom: 10px;
  }

  .mycolorsdo2 {
    margin-left: 200px;
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
  .mycolorsdo
  {
    transition: all;
    transition-duration: 1s;
  }
  .avtived{
        font-family: 'Varela Round', sans-serif;
color: aqua;   

font-weight: bolder;
    }

</style>

<body class="container-login100">

  <nav class=" my_styelenav navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="  navbar-brand mycolorsdo" href="#">DARKCODERZ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link  mycolorsdo" href="toshowbuyuser.php">Accessiories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mycolorsdo" href="editprofile.php">Edit Profile</a>
          </li>

          <li class="nav-item">
          <a class="nav-link  mycolorsdo" href="displayingactiveorderuser.php">Order Details</a>

          </li>
          <li class="nav-item">
          <a class="nav-link active avtived" aria-current="page" href="welcomehome.php">Profile</a>

          </li>
          <li class="nav-item">
            <div class="divlogoutimg">
              <a class="nav-link  mycolorsdo mycolorsdo2" href="logout.php">logout</a>
              <img src="user-pic/<?php picture($userpic) ?>" alt="" class="profiopic3">

            </div>
          </li>


        </ul>

      </div>
    </div>
  </nav>
  <!-- #################################################################### -->

  <div class="first_design">

    <div class="profile_1">

      <div class="moredata_about_user">
        <div class="image_user">
          <img src="user-pic/<?php picture($userpic) ?>" alt="" class="userlogo">
        </div>

        <div class="user_data_show">
          <h5 class="username_person"><?php name($fullname121) ?></h5>
          <p class="description_user">I am <span class="intrest"><?php skill($userskills)  ?> </span></p>
          <p class="from_user">From <strong><span class="user_country"><?php country($usercountry)  ?></span></strong></p>

        </div>
      </div>

    </div>

    <div class="second_container">

      <div class="containoincontaino">

        <div class="intro_user">
          <h4 class="introduce">About Me</h4>
          <p class="your_dec"><?php userdesc($userdescription) ?></p>
        </div>

        <div class="language">
          <h4 class="languages_head">Languages</h4>
          <h6 class="first_lang"><?php plange($userprimlang)  ?></h6>
          <h6 class="first_lang"><?php slange($userseclang)  ?></h6>
        </div>

        <div class="social_icons">
          <a href="<?php fblinko($userfblink)  ?>"><img src="useriamges\fb.png" alt="" class="fbicon "></a>
          <a href="<?php instalink($userinstalink)  ?>"><img src="useriamges\ins.png" alt="" class="fbicon"></a>
          <a href="<?php twittlink($usertwitlink) ?>"><img src="useriamges\twi.png" alt="" class="fbicon"></a>
          <a href="<?php gitlink($usergitlink) ?>"><img src="useriamges\git.png" alt="" class="fbicon"></a>

        </div>
        <div class="year12">
          <h6 class="years2">Joined Since <strong class="years"><?php date12($dstmp) ?></strong></h6>

        </div>
      </div>
    </div>





  </div>

  <div class="topskills">


    <div class="getnoticed">
      <img src="useriamges/mike.svg" alt="" class="getfirst paddingtoiamges">
      <h5 class="headgetnotice skillfont">Get noticed</h5>
      <p class="getnoticepara">Tap into the power of social media by sharing your Gig, and get expert help to grow your impact.</p>
      <a href="#" class="getstrat"><button class="getstratbtn hoveingeffect">Share It</button></a>
    </div>

    <div class="getnoticed2">
      <img src="useriamges/book.svg" alt="" class="getfirst2 paddingtoiamges">
      <h5 class="headgetnotice2 skillfont">Get more skills & exposure</h5>
      <p class="getnoticepara2">Hone your skills and expand your knowledge with online courses. You’ll be able to offer more services and gain more exposure with every course completed.</p>
      <a href="#" class="getstrat2"><button class="getstratbtn2 hoveingeffect">Explore Skills</button></a>
    </div>


    <div class="getnoticed3">
      <img src="useriamges/star.svg" alt="" class="getfirst3 paddingtoiamges">
      <h5 class="headgetnotice3 skillfont">Become a successful seller!</h5>
      <p class="getnoticepara3">Watch this free online course to learn how to create an outstanding service experience for your buyer and grow your career as an online freelancer.</p>
      <a href="#" class="getstrat3"><button class="getstratbtn3 hoveingeffect">Watch</button></a>
    </div>





  </div>



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