
<?php
session_start();
error_reporting(0);
include('connection.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:log.php');
}
else{?>


<title>Home Page</title>


<!DOCTYPE html>
<html>
<head>
   <title>User Registration</title>

<?php include('includes/header.php');?>
<!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /
</head>


<body>

<ul>
    <li><a href="AdminForm.php">Admin Registration</a></li>
    <li><a href="register.php">Student Registration</a></li>
    <li><a href="HodForm.php">HOD Registration</a></li>
    <li><a href="TeacherData.php">Faculties Registration</a></li>
    <li><a href="">Display Users</a></li>
	

    <li><a href="./Home.php">Exit</a></li> 
</ul>

</body>
</html>
<?php } ?>




