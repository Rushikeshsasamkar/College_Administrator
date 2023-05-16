<?php
session_start();
error_reporting(0);
include('connection.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:log.php');
}
else{?>



<?php

$sql1 ="SELECT Enrollment_Id from student_record where branch='Computer Engineering' ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$Computer=$query1->rowCount();



$sql2 ="SELECT Enrollment_Id from student_record where branch='Electronics & Telecommunication Engineering' ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$Electronics=$query2->rowCount();



$sql3 ="SELECT Enrollment_Id from student_record where branch='Mechanical Engineering' ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$Mechanical=$query3->rowCount();



$sql4 ="SELECT Enrollment_Id from student_record where branch='Civil Engineering' ";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$Civil=$query4->rowCount();




$sql5 ="SELECT Enrollment_Id from student_record where branch='Electrical Engineering' ";
$query5 = $dbh -> prepare($sql5);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$Electrical=$query5->rowCount();




$sql6 ="SELECT Enrollment_Id from student_record ";
$query6 = $dbh -> prepare($sql6);
$query6->execute();
$results6=$query6->fetchAll(PDO::FETCH_OBJ);
$all=$query6->rowCount();




$dataPoints = array(
	array("label"=> "Computer", "y"=>$Computer),
	array("label"=> "Electronics & Telecommunication", "y"=> $Electronics),
	array("label"=> "Mechanical", "y"=> $Mechanical),
	array("label"=> "Civil", "y"=> $Civil),
	array("label"=> "Electrical", "y"=> $Electrical),
	
);
	
?>
<!DOCTYPE HTML>
<html>
<title>Branches Analysis</title>
<?php include('includes/header.php');?>
<!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /
	?>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: "Total Admission Graph of College"
	},
	axisY: {
		title: "Strength of Students",
		includeZero: false
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</br>
</div>
<h4><div  align="Center" ><label>  Total Students = <?php echo $all?></label></div></h4>
<div align="Center"> <a href=HistogramOfBranches.php ><button class="btn btn-primary"> Refresh
</div>
</br>

</body>
 



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
