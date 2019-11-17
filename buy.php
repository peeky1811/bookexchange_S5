<html>
<head>
</head>
<body>
    <form method=POST>
        <div>
        <h1>Sell your book</h1>
                <p>Fill the fields to get seller information.</p>
                <hr>
                Enter your book title:
                <input type="text" name="title1">
                Enter publisher name:
                <input type="text" name="pname1">
                
                
                <button  type="submit" name="buy" >Press button to buy</button><br>
                </div><br>
            </form>
            <div>
                <?php
                include("connection.php");
if(isset($_POST["buy"])!="")
{
  $title1=$_POST['title1'];
  $pname1=$_POST['pname1'];

  $insert=mysql_query("INSERT INTO buy(title1,pname1,edition1) VALUES
               ('$title1','$pname1')");
                 $x=mysql_query("SELECT * FROM sell WHERE title='$title1' AND publisher='$pname1'");
             if($x)
{ 
    
echo "<b><i>The people who have listed their books for sale are provided below</i></b>";
echo "<br>\n";
while ($line=mysql_fetch_array($x)) {
    echo "<b>Title</b>";
    echo $line['title'];
    echo "&nbsp";
    echo "<b>Publisher name</b>";
    echo $line['publisher'];  
    echo "<br>\n";
     echo "<b>Name of the person</b>";
    echo $line['name'];  
    echo "<br>\n";
     echo "<b>Contact number</b>";
    echo $line['number1'];  
    echo "<br>\n";
    # code...
}
}   
else
{
    echo "Your book is not available";
}
  
}
?>
</div>
</body>
</html>