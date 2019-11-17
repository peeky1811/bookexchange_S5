<html>
<head>
</head>
<body>
    <form method=POST>
        <div>
        <h1>Sell your book</h1>
                <p>Please fill in the required fields to sell your book.</p>
                <hr>
                
                Enter your book title:
                <input type="text" name="title">
                Enter your name:
                <input type="text" name="name">
                Enter publisher name:
                <input type="text" name="pname">
                Enter edition
                <input type="edition" name="edition"><br>
                Enter contact number
                <input type="number" name="number1"><br>
                
                <button  type="submit" name="sell" >Press button to sell</button><br>
                </div><br>
            </form>
<div>
    <?php
include("connection.php");
if(isset($_POST['sell'])!='')
{

$title=$_POST["title"];
$name=$_POST['name'];
$pname=$_POST["pname"];
$edition=$_POST['edition'];
$number1=$_POST['number1'];

{
$insert=mysql_query("INSERT INTO sell(title,name,publisher,edition,number1) VALUES
    ('$name',$title','$pname','$edition','$number1')");
if($insert)
{
    ?>
<script type="text/javascript">
    alert("Your book has been listed for sale");
</script>
    <?php
    
}
else
{
    ?>
    <script type="text/javascript">
    alert("There was some error was adding your book. Please try again");
    </script>

    <?php
}
    
}
}

?>
<!--<script src="script.js"></script>-->
    </body>
</html>
                 