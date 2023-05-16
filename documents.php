<?php
session_start();
error_reporting(0);
include('connection.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:log.php');
}
else{?>
<html>
<head>
<title>Documents</title>

</head>
 
<body>
	<form action="re.php" method="POST" enctype="multipart/form-data">

	<style type="text/css">
td {
    white-space: nowrap;
    overflow: hidden;
    width: 200px;
    height: 50px;
}
</style>

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
	
<center>
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h3 class="header-line" align=center>Submit Student Documents </h3>
				</div>
				</div></div>
 
<table align="center" cellpadding = "10">



<!----- Image ---------------------------------------------------------->

<tr>
<td>School Leaving/Transfer Certificate:</td>
<td>
<input type="file" name ="SchoolLeaving/TransferCertificate" value=""/>
</td>
</tr>



 <tr>
<td>SSC Markmemo:</td>
<td>
<input type="file" name ="sscmarkmemo" value=""/>
</td>
</tr>

<tr>
<td>HSC Markmemo:</td>
<td>
<input type="file" name ="HscMarkmemo" value=""/>
</td>
</tr>


<tr>
<td>Caste Certificate:</td>
<td>
<input type="file" name ="CasteCertificate" value=""/>
</td>
</tr>


<tr>
<td>Non-Creamy Layer:</td>
<td>
<input type="file" name ="Non-CreamyLayer" value=""/>
</td>
</tr>
<tr>



<td>Nationality Certificate:</td>
<td>
<input type="file" name ="NationalityCertificate" value=""/>
</td>
</tr>


<td>ITI:</td>
<td>
<input type="file" name ="Iti" value=""/>
</td>
</tr>

<td>8th Markmemo:</td>
<td>
<input type="file" name ="8thMarkmemo" value=""/>
</td>
</tr>

<td>9th Markmemo:</td>
<td>
<input type="file" name ="9thMarkmemo" value=""/>
</td>
</tr>

<td>Z Form:</td>
<td>
<input type="file" name ="ZForm" value=""/>
</td>
</tr>

<td>Mcvc:</td>
<td>
<input type="file" name ="Mcvc" value=""/>
</td>
</tr>

<td>VOC:</td>
<td>
<input type="file" name ="Voc" value=""/>
</td>
</tr>

<td>Student AdharCard:</td>
<td>
<input type="file" name ="StudentAdharCard" value=""/>
</td>
</tr>

<td>Income Certificate:</td>
<td>
<input type="file" name ="IncomeCertificate" value=""/>
</td>
</tr>

<td>Birth Certificate:</td>
<td>
<input type="file" name ="BirthCertificate" value=""/>
</td>
</tr>


<td>N Form:</td>
<td>
<input type="file" name ="NForm" value=""/>
</td>
</tr>


<td>Inhabitant Or Resident Of:</td>
<td>
<input type="file" name ="InhabitantOrResidentOf" value=""/>
</td>
</tr>

<td>Profarma N:</td>
<td>
<input type="file" name ="ProfarmaN" value=""/>
</td>
</tr>




<!----- Submit and Reset ------------------------------------------------->
<tr>
<td  align="center">
<input type="submit" name="submitDocument" value="Submit Documents">

</td>
</tr>
</table>
 
</form>
 
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