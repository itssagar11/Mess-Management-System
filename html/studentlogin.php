<?php

session_start();
include("dbconn.php");
mysqli_select_db($dbconn, $dbName);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = ($_POST['enroll']);
    $mypassword = ($_POST['password']);
    $sql = "SELECT id FROM student WHERE enroll = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($dbconn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["enroll"] = $myusername;
        header("Location:../student/student.php");
    } else {
        echo "<script>alert('Incorrect Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<!-- HEAD SECTION START -->

<head>
    <title>Login::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      body{
      
       
      font-family: "Rubik", sans-serif;
     justify-content:space-around;
     align-items:center;
     flex-wrap:wrap;
     
   }
   .form-container{
     margin:auto;
     margin-top: 10%;
     width:300px;
   }
   .branding{
     width:350px;
     margin:auto;
   }
   input{
     margin:15px 1px 15px 1px;
     width:95%;
     height:30px;
     padding:2px 2px;
     border:none;
     border-bottom:1px solid #878787;
     
     
    
   }
   .button{
     background-color:#000000;
     border:1px solid #000000;
     color:#ffffff;
     padding:10px;
     width:80%;
     border-radius:20px;
     fot-size:16px;
     font-width:normal;
   }
   input:focus{
     outline:none;
     width:96%;
   }
   hr{
     width:10%;
     height:3px;
     background-color:#FCA435;
     border:none;
   }
   .quotes{
     color:#FCA435;
     font-size:2rem;
   }
   .otp_box{
     display:none;
   }
  .navbar{
   margin-top:10px;
 
  }
    </style>
</head>

<!-- BODY SECTION START  -->

<body>

    <!-- Navigation Bar Start -->
   <!-- Navigation Bar Ends -->

    <!--  Student Login Form Start  -->

    <div class="form-container">
         <center>
      <h1>
        Sign in with email
      </h1>
  <p>
        Enter the email address  and password associated with your account,.
      </p>
            <!-- Login -->
            <form action="" method="POST">
            <input type="text" class="textbox login_box" id="enroll" name="enroll placeholder="Email" placeholder="enter email" /><br>
        
            <input type="Password" class="textbox login_box" id="password" name="password" placeholder="Password"/><br>
        
            <button class="button" style="vertical-align:middle"><span>Submit</span></button>
             </form>
            <small id="message"> </small>
        
</center> 
    </div>
    <div class="branding">
      <center>
      <hr>
      <h3 class="quotes">
       Graphic Era Deemed to be University
      </h3>
      <small ><a href="geu.ac.in">geu.ac.in</a>Dehradun</small>
        </center>
    </div>
    
</body>

</html>