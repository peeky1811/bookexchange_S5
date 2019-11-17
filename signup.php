<!DOCTYPE html>
<html>
    <head>
        <title>Registration </title>
        <style>
            *{box-sizing: border-box;}
            
            /*full width input fields*/
            input[type=text], input[type=password], input[type=tel], .dept{
                width: 500px;
                padding: 15px;
                margin: 5px 0px 22px 0px; /*top right bottom left*/
                display: inline-block;
                border: none;
                background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus, .dept:focus {
                background-color: #ddd;
                outline: none;
            }

            hr {
                border: 1px solid #f1f1f1;
                margin-bottom: 25px;
            }

            /* Set a style for all buttons */
            button {
                background-color: green;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 500px;
                opacity: 0.9;
                float:left;
            }

            button:hover {
                opacity:1;
            }

            /* Add padding to container elements */
            .container {
                padding: 16px;
            }

            /* Clear floats */
            .submit-btn::after {
                content: "";
                clear: both;
                display: table;
            }

            /* Change styles for cancel button and signup button on extra small screens */
            @media screen and (max-width: 300px) {
            .signupbtn {
                width: 500px;
            }
            }
        </style>
    </head>
    <body>
        <form name="myForm" method="post">
            
            <div class="container">
                <h1>Sign up!</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <b>Registration Number</b><br>
                <input type="text" name="username" required><br>
                <b>Password</b><br>
                <input type="password" name="password_1" required><br>
                <b>Repeat Password</b><br>
                <input type="password" name="password_2" required><br>
                <b>Mobile Number</b><br>
                <input type="tel" name="phone" required><br>
                <b>Department Name</b><br>
                <select name="dept" required><br>
                    <option selected hidden value="">Select your Department</option>
                    <option value="cs">Computer Science & Engineering</option>
                    <option value="ec">Electronics & Communication Engineering</option>
                    <option value="eee">Electronics & Electrical Engineering</option>
                    <option value="ecb">Electronics & Biomedical Engineering</option>
                </select>
                <p>By creating an account you agree to our <a href='#' style="color: blue;"> Terms & Conditions</a></p><br>
                <div class="submit-btn">
                    <button class="signupbtn" type="submit" name="signup" ><b>Sign up</b></button><br>
                </div>
                <p>
                    Already a member? <a href="login.php">Sign in</a>
                </p>
            </div>
        </form>
<?php
include("connection.php");
if(isset($_POST['signup'])!='')
{
$username=$_POST["username"];
$password_1=$_POST["password_1"];
$password_2=$_POST["password_2"];
$phone=$_POST["phone"];
$dept=$_POST["dept"];
    {
        $insert=mysqli_query($con, "INSERT INTO signup(username,password_1,phone,dept) VALUES('$username','$password_1','$phone','$dept')");
        if($insert)
        {
?>
        <script type="text/javascript">
            alert("Your registration has been successful");
        </script>
        
<?php
        header("location:login.php");
        }
        else
        {
?>
        <script type="text/javascript">
            alert("Signup Failed. Please refill the form");
        </script>

<?php
        }
    
    }
}

?>
    </body>
</html>

