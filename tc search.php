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
$connect = mysqli_connect("localhost", "root", "", "registration");
$output = '';
?>
    <html>
    <head>
        <title>TC</title>

		<style type="text/css">



td {
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

input[type=radio]{
	 width:5%;
	 border:2px solid #aaa;
	 border-radius:4px;margin:8px 0;
	 outline:none;
	 padding:8px;
	 box-sizing:border-box;
	 transition:.3s;
	
}

input[type=radio]:focus{
	border-color:dodger-blue;
	box-shadow:0 0 8px 0 dodgerBlue;
}


input[type=email_id]{
	 width:60%;
	 border:2px solid #aaa;
	 border-radius:4px;margin:8px 0;
	 outline:none;
	 padding:8px;
	 box-sizing:border-box;
	 transition:.3s;
	
}

input[type=email_id]:focus{
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
                    <h3 class="header-line" align=center> Leaving Certifacate Generator </h3>
                </div>
            </div>

        <form action="tc.php" method="post" enctype="multipart/form-data">
            <table border="0" align="center">
                <tbody>




                <tr>
                    <td><label for="Enter Enrolment No">Enter Enrollment No: </label></td>
                    <td><input id="Enrollment_Id" name="Enrollment_Id" maxlength="50"  type="text" /></td>
                </tr>

               

                <tr>
                    <td><label for="Year_Current">Select Current Year</label> </td>
                    <td></br>
                        <input type="radio" name="Year_Current" value="FIRST YEAR DIPLOMA" />FIRST YEAR DIPLOMA
						</br>
                        <input type="radio" name="Year_Current" value="SECOND YEAR DIPLOMA" />SECOND YEAR DIPLOMA
						</br>
                        <input type="radio" name="Year_Current" value="THIRD YEAR DIPLOMA " />THIRD YEAR DIPLOMA
						</br>

                    </td>
                </tr>
				
                <tr>
				
                    <td></br><label for="Academic Year">Enter The Year of Last Exam Attended (YYYY)  </label></td>
					
                    <td></br><input id="Academic_Year" name="Academic_Year" maxlength="4"  type="text" /></td>
                </tr>

                <tr>

                    <td></br><label for="Session of Exam">Select Session of Exam  </label></td>

                    <td></br> <input  name="TOE" type="radio" value="Summer" /> Summmer
                    </br>

                        <input type="radio" name="TOE" value="Winter"/> Winter

                    </td>
                </tr>
                <tr>

                    <td></br><label for="Exam Seat No">Enter Last Exam Seat No </label></td>

                    <td></br><input id="Seat_No" name="Seat_No" maxlength="7"  type="text" /></td>
                </tr>

                <tr>

                    <td></br><label for="Result"> Result of Last Exam </label></td>

                    <td></br> <input  name="Result" type="radio" value="Distinction" /> Distinction
                        </br>

                        <input type="radio" name="Result" value="First Class"/> First Class
                    </br>
                        <input type="radio" name="Result" value="Second Class"/> Second Class
                        </br>

                        <input type="radio" name="Result" value="Third Class"/> Third Class
                        </br>

                        <input type="radio" name="Result" value=" Fail"/> Fail
                        </br>
                    </td>
                </tr>

                <tr>
                    <td align="right"><input name="Submit" type="Submit" value="Submit" class="btn btn-primary" ></td>
                </tr>

                </tbody>
            </table>

            


        </form>
		</div>
		
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