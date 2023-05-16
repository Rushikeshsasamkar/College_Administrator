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
<style>



</style>
    <title>Home Page</title>

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
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">ADMIN DASHBOARD</h4>
                
                            </div>

        </div>
		
		
		
		
		<div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
                            <?php 
$sql ="SELECT Enrollment_Id from student_Record ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$students=$query->rowCount();
?>
                            <h3><?php echo htmlentities($students);?></h3>
                           Student Registered 
                        </div>
                    </div>
		
		
		
             
             <div class="row">
			 
			 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-book fa-5x"></i>
<?php 
$sql2 ="SELECT User_Name from TeacherRes";
$query = $dbh -> prepare($sql2);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$Teacher=$query->rowCount();
?>


                            <h3><?php echo htmlentities($Teacher);?></h3>
                      Available Faculties
                        </div>
                    </div>
					
					
					 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-bars fa-5x"></i>
<?php 

$Courses=5;
?>

                            <h3><?php echo htmlentities($Courses);?> </h3>
                           Available Courses
                        </div>
                    </div>
					
					
					
					<div class="row">

 <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-user fa-5x"></i>
<?php 
$sql8 ="SELECT Name from adminres";
$query4 = $dbh -> prepare($sql8);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$admin=$query4->rowCount();
?>


                            <h3><?php echo htmlentities($admin);?></h3>
                      Available Admin
                        </div>
                    </div>
					
					 <div class="row">

              <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1">
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/laptop.jpg" alt="" />
                           
                        </div>
                        <div class="item">
                            <img src="assets/img/4.jpeg" alt="" />
                          
                        </div>
                        <div class="item">
                            <img src="assets/img/Student.jpg" alt="" />
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>
			   </div>
              </div>
			  </div>
			   </div>
              
			  
</br>

 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>


</html>

<?php } ?>




