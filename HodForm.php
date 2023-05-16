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
<title>HOD registration form</title>

	<style type="text/css">
td {
	font-weight:Bold;
    white-space: nowrap;
    overflow: hidden;
    width: 200px;
    height: 50px;
}

input[type=text]{
	 width:100%;
	 border:2px solid #aaa;
	 border-radius:4px;margin:8px 0;
	 outline:none;
	 padding:8px;
	 box-sizing:border-box;
	 transition:.3s;
	
}

input[type=text]:focus{
	border-color:dodger-blue;
	box-shadow:0 0 8px 0 dodgerBlue;
}

input[type=password]{
	 width:100%;
	 border:2px solid #aaa;
	 border-radius:4px;margin:8px 0;
	 outline:none;
	 padding:8px;
	 box-sizing:border-box;
	 transition:.3s;
	
}

input[type=password]:focus{
	border-color:dodger-blue;
	box-shadow:0 0 8px 0 dodgerBlue;
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

<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h3 class="header-line" align=center>HOD Registration </h3>
				</div>
				</div></div>

<form action="HodData.php" method="post" enctype="multipart/form-data">
<table border="0" align="center">
	<tbody>


<!----- Image ---------------------------------------------------------->

		<tr>
		<td>PHOTO</td>
		<td>
		<input type="file" name ="uploadfile" value=""class="btn btn-success btn-xs">
		</td>
		</tr>


		<tr>
			<td><label for="Name">Name: </label></td>
			<td><input id="Name" maxlength="50" name="Name" type="text" /></td>
		</tr>

        <tr>
			<td><label for="Department">Department: </label></td>
			<td><select name="Department" id="Department">
			<option value="Computer">Computer</option>
			<option value="Mechanical">Mechanical</option>
			<option value="Electronics">Electronics </option>
			<option value="Electrical">Electrical</option>
			<option value="Civil">Civil</option>
			</select></td>

		</tr>
		<tr>
			<td><label for="Email_Address">Email_Address:</label></td>
			<td><input id="Email_Address" maxlength="50" name="Email_Address" type="text" /></td>
		</tr>

		<tr>
			<td><label for="User_Name">User_Name:</label></td>
			<td><input id="User_Name" maxlength="50" name="User_Name" type="text" /></td>
		</tr>

		

		<tr>
			<td><label for="Password">Password:</label></td>
			<td><input id="Password" maxlength="50" name="Password"
				type="password" /></td>
		</tr>

		<tr>
			<td align="right"><input name="Submit" type="Submit" value="Add" button class="btn btn-primary"></td>
		</tr>

	</tbody>
</table>
</form>
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