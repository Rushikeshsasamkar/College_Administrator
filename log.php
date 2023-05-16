<?php
session_start();
include('connection.php');
if(isset($_POST['login']))
{

$User_Name = $_POST['User_Name'];
$Password = $_POST['Password'];

$sql = "select * from adminres where User_Name= '$User_Name' && Password= '$Password' ";

$query= $dbh -> prepare($sql);
$query-> bindParam(':User_Name', $User_Name, PDO::PARAM_STR);
$query-> bindParam(':Password', $Password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['User_Name'];
echo "<script type='text/javascript'> document.location ='Home.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="login.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<script type="text/javascript">
    window.onload=function() {

        location.href = document.getElementById("selectbox").value;


    }
</script>
<body>
<header>
    <!------MENU SECTION START-->
<!-- MENU SECTION END-->
<div class="loginbox ">
    <img src="./avatar.png" class="avatar">
        <h1>Admin Login</h1>
        <form method="post" action="log.php">
            <p>Username</p>
            <input type="text" name="User_Name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">


            </br>
        </br>

        
            <input type="submit" name="login" value="Login" >
           
        </form>
</div>  
</table>
</header>
   <script >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</script>
</body>
</html>

