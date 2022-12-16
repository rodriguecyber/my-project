<?php
session_start();
if(!isset($_SESSION['usename']))
{
    echo"<script>location.href='login.html'</script>";
    
}
$con=mysqli_connect("127.0.0.1","root","","jazz");
    if(!$con){
        die("connection failed".mysqli_connect_error());
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONE CHAT</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="head">
        <form action="logout.php" method="POST">
        <button class="lgt">logout</button>
</form>
<?php
$pic=$_SESSION['usename'].".jpg";
echo'<img src="'.$pic.'" alt="name" class="profile">';
?>
<div class="name">
<?php echo $_SESSION["finame"]." ".$_SESSION["liname"];?>
</div>
</div>
    <div class="topbar">
        <a href="index.php">HOME</a>
        <a href="form.php">PROFILE</a>
        <a href="marks.php">MARKS</a>
        <div class="drp"> 
           <button class="drpbtn">ABOUT</button>
           
         </div>
         <input type="text" placeholder="Search..">
        </div>
<div id="mside" class="side">
<a href="#"  id="b2" class="closebtn"   onclick="closeside()">X</a>
<h3><u><b>PUBLIC LIBRARY</b></u></h3>
<button id="add" class="add" onclick="addbook()">ADD BOOK </button>
<div id="addbook" >
<form action="add.php" method="post">
BOOK_ID:<input type="number"  name="bid"></br>
BOOK_NAME:<input type="text" name="bnm"></br>
AUTHUOR:<input type="text" name="bat"></br>
<input type="submit" value="INSERT BOOK" name="inb">
</form>
</div>
    <?php 
    $sql="SELECT * FROM book ";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {

            $ab=$row['bookid'];
            $ac=$row['book name'];
            $ad=$row['author'];
            echo'<div  class="book1">';
            echo'<b>Book Id: </b>'.$ab.'<br>'.
            '<b>Book Name: </b>'.$ac.'<br>'.
            '<b>Author: </b>'.$ad.'<br>';
            echo'<form action="index.php" method="post">';
           echo' <input type="submit" value="REMOVE" name="rmv" id="remove" class="remove" onclick="addbook()">';
           echo'</form>';
           if(isset($_POST['rmv']))
{
    $sql="DELETE FROM book WHERE bookid=$ab";
    $rmv=mysqli_query($con,$sql);
    if($rmv)
    {
        echo'<script>window.alert("book removed")';
        
    }
    else{
        echo"failed to remove book";
    }
}

            echo'</div>';
        }
    }
    else{
        echo"no book available";
    }

    ?>



</div>
<div id="main1">

<button class="button1" id="b1" onclick="openside()">☰ </button>
</div>
<script>
    function openside(){
        document.getElementById("mside").style.width="250px";
        document.getElementById("main1").style.marginLeft= "250px";
        document.getElementById("b1").style.display="none";
        
        
    }
    function closeside(){
        document.getElementById("mside").style.width="0px";
        document.getElementById("main1").style.marginLeft="0px";
        document.getElementById("b1").style.display="block";
      
    }
    function addbook()
    {
        document.getElementById("addbook").style.display="block";
    }
</script>
<div class="bottom">
<center>
    <b><u>Address</u></b><br>
    
Email:rodrirwigara@gmail.com<br>
Facebook:Jazzie Rodrigue<br>
Instagram:Jazzy Green


</center>
        

</div>
    
</body>
</html>