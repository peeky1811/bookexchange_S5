<!DOCTYPE html>
<html>
  <head> 
    <title>BOOK EXCHANGE PORTAL</title>
    <style>
       * {box-sizing: border-box}

      body,html {
        background-color: rgb(194, 139, 226);
        height: 100%;
        margin: 15px;
        font-family: Georgia, 'Times New Roman', Times, serif;  
      }

      h1{
        color:whitesmoke;
      }

      .tablink {
        background-color:#777;
        color: white;
        float: left;
        border: rgb(255, 255, 255);
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 20px;
        width: 50%;
      }    
      .tablink:hover {
        background-color: #444;
      }

      .tabcontent {
        color: white;
        display: none;
        padding: 100px 20px;
        height: 100%;
        font-size: 10px;
        font-family: 'Courier New', Courier, monospace;
      }
      #BUY {background-color: rgb(0, 0, 0);}
      #SELL {background-color: rgb(0, 0, 0);}
    </style>
  </head>
  <body>
  <h1><b> Welcome, Name</b></h1>
  <button class="tablink" onclick="openPage('BUY', this, 'rgb(0, 0, 0)')">BUY</button>
  <button class="tablink" onclick="openPage('SELL', this, 'rgb(0, 0, 0)')" id="defaultOpen">SELL</button>
<!--//////////BUY///////////////////-->
  <div id="BUY" class="tabcontent">
    <form name="buyform" method="post">
    
    <b>DEPARTMENT</b><br>
    <select name="dept" required><br>
                    <option selected hidden value="">Select your Department</option>
                    <option value="cs">Computer Science & Engineering</option>
                    <option value="ec">Electronics & Communication Engineering</option>
                    <option value="eee">Electronics & Electrical Engineering</option>
                    <option value="ecb">Electronics & Biomedical Engineering</option>
    </select><br>
    <b>SEMESTER</b><br>
                <select name="sem" required><br>
                    <option selected hidden value="">Select your Semester</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                    <option value="s4">S4</option>
                    <option value="s5">S5</option>
                    <option value="s6">S6</option>
                    <option value="s7">S7</option>
                    <option value="s8">S8</option>
                </select><br>
    <b>Title name</b><br>
    <input type="text" name="title" required><br>
    <b>Author name</b><br>
    <input type="text" name="author" required><br>
    <button type="submit" name="check-availability"><b>CHECK AVAILABILITY</b></button><br>
    </form>
  </div>
<!--//////////sell///////////////////-->
  <div id="SELL" class="tabcontent">
    <form name="buyform" method="post">

    <b>DEPARTMENT</b><br>
    <select name="dept" required><br>
                    <option selected hidden value="">Select your Department</option>
                    <option value="cs">Computer Science & Engineering</option>
                    <option value="ec">Electronics & Communication Engineering</option>
                    <option value="eee">Electronics & Electrical Engineering</option>
                    <option value="ecb">Electronics & Biomedical Engineering</option>
    </select><br>
    <b>SEMESTER</b><br>
                <select name="sem" required><br>
                    <option selected hidden value="">Select your Semester</option>
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                    <option value="s4">S4</option>
                    <option value="s5">S5</option>
                    <option value="s6">S6</option>
                    <option value="s7">S7</option>
                    <option value="s8">S8</option>
                </select><br>
                
                <b>Title name</b><br>
                <input type="text" name="title" required><br>
                <b>Author name</b><br>
                <input type="text" name="author" required><br>
                <b>ISBN No:</b><br>
                <input type="number" name="isbn" required><br>
                <b>Phone number</b><br>
                <input type="number" name="phone" required><br>
                <button type="submit" name="sell"><b>SELL</b></button><br>
    </form>
  </div>

  <script>
      function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
      }
      
      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
<?php
include("connection.php");
if(isset($_POST['sell'])!='')
{
$title=$_POST["title"];
$author=$_POST["author"];
$isbn=$_POST["isbn"];
$dept=$_POST["dept"];
$sem=$_POST["sem"];
$phone=$_POST["phone"];
    {
        $insert=mysqli_query($con, "INSERT INTO books(title, author, isbn, dept, sem, phone)VALUES('$title', '$author', '$isbn', '$dept', '$sem', '$phone')");
        if($insert){
?>
        <script type="text/javascript">
            alert("Your book has been added");
        </script>
<?php
        }
        else{
?>
        <script type="text/javascript">
            alert("Your book has not been added. Please fill the form again.")
        </script>
<?php
        }
    }
}
// if(isset($_POST['check-availability'])!='')
// {
// $title=$_POST['title'];
// $author=$_POST['author'];

// $result=mysqli_query($con, "SELECT title, author, dept, sem, phone FROM books WHERE title ='$title' AND author = '$author' ");
// $num_row=mysqli_num_rows($result);
// if($num_row){
//   while($row=mysqli_fetch_array($result))
//   {
//     $title_name = $_POST['title'];
//     $author_name = $_POST['author'];
//     $dept_name= $_POST['dept'];
//     $sem_name= $_POST['sem'];
//     $phone_no= $_POST['phone'];

//     echo "<tr>";
//     echo "<td>ID:</td> <td class='text2' align='center' colspan='2'>
//     <b> $title_name </b>
//         </u></td>";
//         echo "</tr>";
//   }
// }
// }
?>
  </body>
</html>


