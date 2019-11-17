<!DOCTYPE html>
<html>

<head>
  <title>BOOK EXCHANGE PORTAL</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: "Comic Sans MS", Arial, Helvetica, sans-serif;
    }

    .login{
      float: left;
      width: 30%;
    }

    .imgcontainer{
      opacity: 1;
      float: left;
      width:70%;
      overflow: hidden;
    }

    form {
      /* margin: 10px 27px 5px 880px; */
      border: 3px solid #f1f1f1;
      padding: 0px 5px 10px 15px;
    }

    .input-field {
      width: 90%;
      padding: 12px 20px 12px 50px;
      /* margin: 5px 0px 8px; */
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }


    .input-icons i {
      position: absolute;
      padding: 18px 10px 0px 0px;
    }

    .icon {
      padding: 10px;
      color: rgb(11, 0, 165);
      min-width: 50px;
      text-align: center;
    }

    button {
      font-family: "Comic Sans MS", Georgia, 'Times New Roman', Times, serif;
      background-color: #4CAF50;
      color: white;
      padding: 10px 5px;
      margin: 8px 0px 5px;
      border: none;
      cursor: pointer;
      width: 18%;
    }

    button:hover {
      opacity: 0.8;
    }

    .container {
      font-family: "Comic Sans MS", Georgia, 'Times New Roman', Times, serif;
      padding: 16px 16px 16px 3px;
    }

    span.password {
      font-size: 15px;
    }

    .signup {
      margin-top: 15px;
      font-style: italic;
      color: #ad0c0c
    }

    .sup {
      font-family: "Comic Sans MS", Georgia, 'Times New Roman', Times, serif;
      background-color: #f44336;
      color: white;
      padding: 10px 5px;
      margin-bottom: 4px;
      margin-left: 5px;
      border: none;
      cursor: pointer;
      width: 18%;
    }

    .sup:hover {
      opacity: 0.8;
    }
  </style>
</head>

<body>
  <div class="imgcontainer">
    <img src="books.jpg" alt="Books" >
  </div>
  <div class="login" >
    <form method="post" name="Login" > 
    
      <div class="container">
        <b>Registration Number</b>
        <input type="text" name="username" required>
        <br>
        <b>Password</b>
        <br>
        <input type="password" name="password_1" required>
        <br>
      </div>

        <br>
        <button type="submit" class="btn" name="login">Login</button>
        <br>
        <span class="password"><a href="#">Forgot password?</a></span>
  <div class="signup">
      Not yet a member? <a href="signup.php">Sign up</a>
  </div>
  </form>
<?php

include("connection.php");

if(isset($_POST["login"])!="")
{

  $username=$_POST['username'];
  $password_1=$_POST['password_1'];
   
$x=mysqli_query($con, "SELECT * FROM signup WHERE username='$username' AND password_1='$password_1'");
if($rw=mysqli_num_rows($x))
  {
    $_SESSION['username']=$rw;
    $_SESSION['username']=$username;
     echo " logged in successfully";
     header("location:buysell.php");
  }
  
  else {
    echo "incorrect email or password";

    } 
  
}
?> 
  </div>
</body>

</html>