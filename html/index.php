<?php 
    session_start();
    include("dbconn.php");
    mysqli_select_db($dbconn , $dbName);
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $myusername = ($_POST['email']);
        $mypassword = ($_POST['password']);
        $sql = "SELECT id FROM admin WHERE email = '$myusername' and password = '$mypassword'";
        $result=mysqli_query($dbconn, $sql);
        if(mysqli_num_rows($result)==1){
            $_SESSION["email"] = $myusername;
            header( "Location:../admin/home.php");
            }
        else{
            echo "<script>alert('Incorrect credentials');</script>";
            }
    }
?>
<!-- 
<!DOCTYPE html>
<html lang="en">
                                        <!-- View SECTION -->
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
                            <!--  BODY SECTION  -->
<body>
    
                            <!-- Navigation Bar Start -->
    <div class="navbar">
        <ul>
          
            <a href="../index.php">Home</a>
            
            <div class="dropdown">
                <button class="dropbtn">Registration 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="adminregistration.php">Admin</a>
                    <a href="studentregistration.php">Student</a>
                </div>
            </div>
            
            <div class="dropdown">
                <button class="dropbtn">Login
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Admin</a>
                    <a href="studentlogin.php">Student</a>
                </div> 
            </div>
            <a href="help.php">Help</a>
           
        </ul>
    </div>                  <!-- Navigation Bar Ends -->
    
    
                            <!--  Login Form  -->
                          

    <div class="form-container">
         <center>
      <h1>
        Sign in with email
      </h1>
  <p>
        Enter the email address  and password associated with your account,.
      </p>
            <!-- Login -->
            <form action="../html/index.php" method="POST">
            <input type="text" class="textbox login_box" id="name" name="email" placeholder="Email" /><br>
        
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
</html> -->
    