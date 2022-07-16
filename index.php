<!DOCTYPE html>
<html lang="en">

<!-- HEAD SECTION  -->

<head>
    <title>Home::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .mySlider {
            width: 87%;
            height: 300px;
            margin-left: 90px;
            margin-top: 0px;    
            margin-right: 90px;
            
        }

        #button-display-left {
            position: absolute;
            top: 400px;
            margin-top: -19px;
            left: 150px;
            width: 30px;
            height: 30px;
        }

        #button-display-right {
            position: absolute;
            top: 400px;
            margin-top: -19px;
            right: 150px;
            width: 30px;
            height: 30px;
        }

        #content {
           
            width: 55%;
            height: 300px; 
            border: 2px black;
            margin-top: 50px;
            margin-left: 90px;
        }

        #content1 {

            width: auto;
            height: auto;
            float: right;
            margin-bottom: 10px;
            margin-right: 100px;
        }

        h3 {
            color: black;
            margin-top: 100px;
            margin: 10px;
        }

        p {
            text-align: justify;
            margin: 10px;
            font-size: 17px;
            font-family: serif;
        }

        .navbar {
            margin-top: -18px;
            width: 100%;
            position: -webkit-sticky;
            position: sticky;
            top: 0px;
            box-shadow: 2px 2px 2px lightgray;



        }
    </style>
</head>
<!--  BODY SECTION START -->

<body style=" background-image: url(../img/food.jpg); background-size: cover">
    <!-- Header Start -->
    <div id="header" style="background-color: whitesmoke;margin-top: -4px;">
        <img src="img/logo1.jpg" width="195px" height="183px" style="z-index:1000; position: fixed;top: 0px;box-shadow: 0 0 20px grey; margin-left: 98px;position:fixed">
        <img src="img/Capture.png" alt="" class="logo_def" style="margin-left: 440px; height:150px; width:50%;   box-shadow: 1px 2px 1px grey;">
    </div>
    <!--Header Ends-->

    <!-- Navigation Bar Start -->

    <div class="navbar" style="">
        <ul>
            <a href="#">Home</a>

            <!-- Dropdown Menu for Registration  -->
            <div class="dropdown">
                <button class="dropbtn">Registration
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="html/adminregistration.php">Admin</a>
                    <a href="html/studentregistration.php">Student</a>
                </div>
            </div>

            <!-- Dropdown Menu for Login  -->
            <div class="dropdown">
                <button class="dropbtn">Login
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="html/index.php">Admin</a>
                    <a href="html/studentlogin.php">Student</a>
                </div>
            </div>
            <a href="html/help.php">Help</a>

        </ul>
    </div> <!-- Navigation Bar Ends-->



    <!--  Main Content  -->
    <div id="content" >
        <h3> <b> Welcome To The Mess Management System Of GEU</b> </h3>
        <p>Here we  </p>
        <p style="text-align: justify; margin: 10px; font-size: 17px; font-family: serif;">give food</p>
    </div>

    <div id="content1">
        <p style="text-align: center;"> <b> Owner: </b> Ashutosh Bhardwaj<br />
            <b> Telephone: </b> 9219010020 <br />
            <b> E-mail: </b> ashubha2122@gmail.com
        </p>
    </div>

    <!-- Footer-->
    <div id="footer" style="width:100%; padding-bottom:20px;margin-top:4.5%;"><br>
        <center>
            <p style="color: white; font-family: cursive; margin-top: 10px; font-size: 15px;margin-left:40%;">Graphic Era Deemed to be University<br> Dehradun , 248002</p>
        </center>
    </div>
</body>

</html>