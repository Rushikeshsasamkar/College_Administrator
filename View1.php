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
    <title>Student Registration Form</title>

	<style type="text/css">
	
	
	
td {
	font-weight:Bold;
    white-space: nowrap;
    overflow: hidden;
    width: 200px;
    height: 50px;
}

input[type=text]{
	 width:50%;
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
<?php

$conn = new mysqli('localhost', 'root','', 'registration');
$enrollment_id=$_GET['enrollment_id'];
$result=mysqli_query($conn,"SELECT Branch, First_Name,Middle_Name,Last_Name,Birthday_Day,Birthday_Month,Birthday_Year,Email_Id,Mobile_Number,Gender,Address,City,Pin_Code,State,Caste,Last_Class_Attended,Date_Of_Admission,Mother_Name,Father_Name,Place_Of_Birth,ClassVIII_Board,ClassVIII_Percentage,ClassVIII_YrofPassing,ClassIX_Board,ClassIX_Percentage,ClassIX_YrofPassing,ClassX_Board,ClassX_Percentage,ClassX_YrofPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrofPassing,Year,picsource, SchoolLeavingTransfercertificate,sscmarkmemo,HscMarkmemo,CasteCertificate,NonCreamyLayer,NationalityCertificate,Iti,8thMarkmemo,9thMarkmemo,ZForm,Mcvc,Voc,StudentAdharCard,IncomeCertificate,BirthCertificate,NForm,InhabitantOrResidentOf,ProfarmaN from student_record WHERE Enrollment_Id='$enrollment_id'");


while ($row = mysqli_fetch_array($result)){
    
	$branch=$row['Branch'];
    $first_name=$row['First_Name'];
    $middle_name=$row['Middle_Name'];
    $last_name=$row['Last_Name'];
    $birthday_day=$row['Birthday_Day'];
    $birthday_month=$row['Birthday_Month'];
    $birthday_year=$row['Birthday_Year'];
    $email_id=$row['Email_Id'];
    $mobile_number=$row['Mobile_Number'];
    $gender=$row['Gender'];
    $address=$row['Address'];
    $city=$row['City'];
    $pin_code=$row['Pin_Code'];
    $state=$row['State'];
    $caste=$row['Caste'];
	$last_Class_Attended=$row['Last_Class_Attended'];
	$date_Of_Admission=$row['Date_Of_Admission'];
	$mother_Name=$row['Mother_Name'];
	$father_Name=$row['Father_Name'];
	$place_Of_Birth=$row['Place_Of_Birth'];
    $classVIII_board=$row['ClassVIII_Board'];
    $classVIII_percentage=$row['ClassVIII_Percentage'];
    $classVIII_yrofpassing=$row['ClassVIII_YrofPassing'];
    $classIX_board=$row['ClassIX_Board'];
    $classIX_percentage=$row['ClassIX_Percentage'];
    $classIX_yrofpassing=$row['ClassIX_YrofPassing'];
    $classX_board=$row['ClassX_Board'];
    $classX_percentage=$row['ClassX_Percentage'];
    $classX_yrofpassing=$row['ClassX_YrofPassing'];
    $classXII_board=$row['ClassXII_Board'];
    $classXII_percentage=$row['ClassXII_Percentage'];
    $classXII_yrofpassing=$row['ClassXII_YrofPassing'];
	$year=$row['Year'];
	$picsource=$row['picsource'];
 
 //<----------------------------------Documents---------------------------->
	$SchoolLeavingTransfercertificate=$row['SchoolLeavingTransfercertificate'];
	$sscmarkmemo=$row['sscmarkmemo'];
	$HscMarkmemo=$row['HscMarkmemo'];
	$CasteCertificate=$row['CasteCertificate'];
	$NonCreamyLayer=$row['NonCreamyLayer'];
	$NationalityCertificate=$row['NationalityCertificate'];
	$Iti=$row['Iti'];
	$eightthMarkmemo=$row['8thMarkmemo'];
	$ninethMarkmemo=$row['9thMarkmemo'];
	$ZForm=$row['ZForm'];
	$Mcvc=$row['Mcvc'];
	$Voc=$row['Voc'];
	$StudentAdharCard=$row['StudentAdharCard'];
	$IncomeCertificate=$row['IncomeCertificate'];
	$BirthCertificate=$row['BirthCertificate'];
	$NForm=$row['NForm'];
	$InhabitantOrResidentOf=$row['InhabitantOrResidentOf'];
	$ProfarmaN=$row['ProfarmaN'];

}

?>

<body>
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h3 class="header-line" align=center>Student Registration Form </h3>
				</div>
				
<form action="" method="GET">
    

    <table align="center" cellpadding = "10">
    
	
        <tr>
        <td>Photo:</td>
        <td><?php echo "<img src='$picsource' height='121' width='106'/>"; ?>
        (Image)
		</br>
		</br>
		<a button class="btn btn-primary" href="download.php?filename=<?php echo $picsource;?>" >
Download </a>
        </td>
        </tr>
	
	
	
	
        <tr>
        <td>ENROLLMENT ID:</td>
        <td><input type="text" name="Enrollment_Id" maxlength="10"value="<?php echo $enrollment_id;?>" readonly="readonly"/>
        (only Numeric Values)
        </td>
        </tr>
    
	
<tr>
<td><label>Date Of Admission:</label></td>
<td><input type="date" name="Date_Of_Admission" maxlength="30" value="<?php
echo $date_Of_Admission ;
?>"   readonly="readonly"/> 
(dd/mm/yy)
</td>
</tr>

    
	
<tr>
<td>Branch:</td>
	<td>
		<input type="radio" name="Branch" value="Computer Engineering" 
		<?php
                    if($branch=="Computer Engineering") {
                        echo "checked";
                    }
         ?>/>Computer
		<input type="radio" name="Branch" value="Mechanical Engineering"
		
		<?php
                    if($branch=="Mechanical Engineering") {
                        echo "checked";
                    }
         ?>
		
		/>Mechanical
		<input type="radio" name="Branch" value="Civil Engineering"

		<?php
                    if($branch=="Civil Engineering") {
                        echo "checked";
                    }
         ?>
		
		/>Civil
		<input type="radio" name="Branch" value="Electronics & Telecommunication Engineering" 
		
		<?php
                    if($branch=="Electronics & Telecommunication Engineering") {
                        echo "checked";
                    }
         ?>
		
		/>Electronics
		</br>
		<input type="radio" name="Branch" value="Electrical Engineering" 
		
		<?php
                    if($branch=="Electrical Engineering") {
                        echo "checked";
                    }
         ?>
		
		/>Electrical

</td>
</tr>
	
	
</br>
        <!----- First Name ---------------------------------------------------------->
        
        
        <br>
  
        <tr>
        
            <td>FIRST NAME:</td>
            <td><input type="text" name="First_Name" maxlength="30" value="<?php echo $first_name  ?>" readonly="readonly"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Middle Name ---------------------------------------------------------->
        <tr>
            <td>MIDDLE NAME:</td>
            <td><input type="text" name="Middle_Name" maxlength="30" value="<?php echo $middle_name; ?>" readonly="readonly"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Last Name ---------------------------------------------------------->
        <tr>
            <td>LAST NAME:</td>
            <td><input type="text" name="Last_Name" maxlength="30" value="<?php echo $last_name; ?>" readonly="readonly"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
            <td>DATE OF BIRTH:</td>

            <td>
                <select name="Birthday_Day" id="Birthday_Day" value="" readonly="readonly"  >



                    <option value="-1">Day</option>

                    <option value="1"
                        <?php
                        if($birthday_day=='1') {
                            echo "selected";
                        }
                        ?>

                    >1</option>

                    <option value="2"
                        <?php
                        if($birthday_day=='2') {
                            echo "selected";
                        }
                        ?>
                    >2</option>

                    <option value="3"
                        <?php
                        if($birthday_day=='3') {
                            echo "selected";
                        }
                        ?>
                    >3</option>

                    <option value="4"
                        <?php
                        if($birthday_day=='4') {
                            echo "selected";
                        }
                        ?>

                    >4</option>


                    <option value="5"

                        <?php
                        if($birthday_day=='5') {
                            echo "selected";
                        }
                        ?>

                    >5</option>
                    <option value="6"
                        <?php
                        if($birthday_day=='6') {
                            echo "selected";
                        }
                        ?>>6</option>

                    <option value="7"
                        <?php
                        if($birthday_day=='7') {
                            echo "selected";
                        }
                        ?>>7</option>

                    <option value="8"
                        <?php
                        if($birthday_day=='8') {
                            echo "selected";
                        }
                        ?>>8</option>
                    <option value="9"
                        <?php
                    if($birthday_day=='9') {
                        echo "selected";
                    }
                    ?>
                    >9</option>
                    <option value="10"
                        <?php
                        if($birthday_day=='10') {
                            echo "selected";
                        }
                        ?>

                    >10</option>
                    <option value="11"
                        <?php
                        if($birthday_day=='11') {
                            echo "selected";
                        }
                        ?>


                    >11</option>
                    <option value="12"
                        <?php
                        if($birthday_day=='12') {
                            echo "selected";
                        }
                        ?>



                    >12</option>

                    <option value="13"
                        <?php
                        if($birthday_day=='13') {
                            echo "selected";
                        }
                        ?>


                    >13</option>

                    <option value="14"
                        <?php
                        if($birthday_day=='14') {
                            echo "selected";
                        }
                        ?>


                    >14</option>
                    <option value="15"
                        <?php
                        if($birthday_day=='15') {
                            echo "selected";
                        }
                        ?>



                    >15</option>
                    <option value="16"

                        <?php
                        if($birthday_day=='16') {
                            echo "selected";
                        }
                        ?>




                    >16</option>

                    <option value="17"
                        <?php
                        if($birthday_day=='17') {
                            echo "selected";
                        }
                        ?>



                    >17</option>
                    <option value="18"



                    >18</option>
                <option value="19"

                    <?php
                    if($birthday_day=='19') {
                        echo "selected";
                    }
                    ?>             <?php
                        if($birthday_day=='18') {
                            echo "selected";
                        }
                        ?>




                    >19</option>
                    <option value="20"
                        <?php
                        if($birthday_day=='20') {
                            echo "selected";
                        }
                        ?>


                    >20</option>
                    <option value="21"
                        <?php
                        if($birthday_day=='21') {
                            echo "selected";
                        }
                        ?>


                    >21</option>

                    <option value="22"


                        if($birthday_day=='22') {
                            echo "selected";
                        }
                        ?>


                    >22</option>
                    <option value="23"
                        <?php
                        if($birthday_day=='23') {
                            echo "selected";
                        }
                        ?>




                    >23</option>
                    <option value="24"

                        <?php
                        if($birthday_day=='24') {
                            echo "selected";
                        }
                        ?>


                    >24</option>
                    <option value="25"

                        <?php
                        if($birthday_day=='25') {
                            echo "selected";
                        }
                        ?>


                    >25</option>
                    <option value="26"

                        <?php
                        if($birthday_day=='26') {
                            echo "selected";
                        }
                        ?>



                    >26</option>
                    <option value="27"

                        <?php
                        if($birthday_day=='27') {
                            echo "selected";
                        }
                        ?>



                    >27</option>
                    <option value="28"
                        <?php
                        if($birthday_day=='28') {
                            echo "selected";
                        }
                        ?>



                    >28</option>


                <option value="29"
                    <?php
                    if($birthday_day=='29') {
                        echo "selected";
                    }
                    ?>

                    >29</option>
                    <option value="30"

                        <?php
                        if($birthday_day=='30') {
                            echo "selected";
                        }
                        ?>

                    >30</option>

                    <option value="31"

                        <?php
                        if($birthday_day=='31') {
                            echo "selected";
                        }
                        ?>

                    >31</option>
                </select>

                <select id="Birthday_Month" name="Birthday_Month">
                    <option value="-1">Month:</option>
                    <option value="January"
                        <?php
                        if($birthday_month=="January") {
                            echo "selected";
                        }
                        ?>
                    >Jan</option>

                    <option value="February"
                        <?php
                        if($birthday_month=="February") {
                            echo "selected";
                        }
                        ?>
                    >Feb</option>

                    <option value="March"
                        <?php
                        if($birthday_month=="March") {
                            echo "selected";
                        }
                        ?>
                    >Mar</option>

                    <option value="April"
                        <?php
                        if($birthday_month=="April") {
                            echo "selected";
                        }
                        ?>
                    >Apr</option>

                    <option value="May"
                        <?php
                        if($birthday_month=="May") {
                            echo "selected";
                        }
                        ?>
                    >May</option>

                    <option value="June"
                        <?php
                        if($birthday_month=="June") {
                            echo "selected";
                        }
                        ?>
                    >Jun</option>

                    <option value="July"
                        <?php
                        if($birthday_month=="July") {
                            echo "selected";
                        }
                        ?>
                    >Jul</option>

                    <option value="August"
                        <?php
                        if($birthday_month=="August") {
                            echo "selected";
                        }
                        ?>
                    >Aug</option>

                    <option value="September"
                        <?php
                        if($birthday_month=="September") {
                            echo "selected";
                        }
                        ?>
                    >Sep</option>

                    <option value="October"
                        <?php
                        if($birthday_month=="October") {
                            echo "selected";
                        }
                        ?>
                    >Oct</option>

                    <option value="November"
                        <?php
                        if($birthday_month=="November") {
                            echo "selected";
                        }
                        ?>
                    >Nov</option>

                    <option value="December"

                        <?php
                        if($birthday_month=="December") {
                            echo "selected";
                        }
                        ?>
                    >Dec</option>
                </select>

                <select name="Birthday_Year" id="Birthday_Year">

                    <option value="-1">Year:</option>
                    <option value="2019"
                        <?php
                        if($birthday_year=='2019') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2018"
                        <?php
                        if($birthday_year=='2018') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2017"
                        <?php
                        if($birthday_year=='2017') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2016"
                        <?php
                        if($birthday_year=='2016') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2015"
                        <?php
                        if($birthday_year=='2015') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2014"
                        <?php
                        if($birthday_year=='2014') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2013"
                        <?php
                        if($birthday_year=='2013') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2012"
                        <?php
                        if($birthday_year=='2012') {
                            echo "selected";
                        }
                        ?>
                    >2012</option>

                    <option value="2011"
                        <?php
                        if($birthday_year=='2011') {
                            echo "selected";
                        }
                        ?>
                    >2011</option>

                    <option value="2010"
                        <?php
                        if($birthday_year=='2010') {
                            echo "selected";
                        }
                        ?>
                    >2010</option>

                    <option value="2009"
                        <?php
                        if($birthday_year=='2009') {
                            echo "selected";
                        }
                        ?>
                    >2009</option>

                    <option value="2008"
                        <?php
                        if($birthday_year=='2008') {
                            echo "selected";
                        }
                        ?>
                    >2008</option>

                    <option value="2007"
                        <?php
                        if($birthday_year=='2007') {
                            echo "selected";
                        }
                        ?>
                    >2007</option>

                    <option value="2006"
                        <?php
                        if($birthday_year=='2006') {
                            echo "selected";
                        }
                        ?>
                    >2006</option>

                    <option value="2005"
                        <?php
                        if($birthday_year=='2005') {
                            echo "selected";
                        }
                        ?>
                    >2005</option>

                    <option value="2004"
                        <?php
                        if($birthday_year=='2004') {
                            echo "selected";
                        }
                        ?>
                    >2004</option>

                    <option value="2003"
                        <?php
                        if($birthday_year=='2003') {
                            echo "selected";
                        }
                        ?>
                    >2003</option>

                    <option value="2002"
                        <?php
                        if($birthday_year=='2002') {
                            echo "selected";
                        }
                        ?>
                    >2002</option>

                    <option value="2001"
                        <?php
                        if($birthday_year=='2001') {
                            echo "selected";
                        }
                        ?>
                    >2001</option>

                    <option value="2000"
                        <?php
                        if($birthday_year=='2000') {
                            echo "selected";
                        }
                        ?>
                    >2000</option>

                    <option value="1999"
                        <?php
                        if($birthday_year=='1999') {
                            echo "selected";
                        }
                        ?>
                    >1999</option>

                    <option value="1998"
                        <?php
                        if($birthday_year=='1998') {
                            echo "selected";
                        }
                        ?>
                    >1998</option>

                    <option value="1997"
                        <?php
                        if($birthday_year=='1997') {
                            echo "selected";
                        }
                        ?>
                    >1997</option>

                    <option value="1996"
                        <?php
                        if($birthday_year=='1996') {
                            echo "selected";
                        }
                        ?>
                    >1996</option>

                    <option value="1995"
                        <?php
                        if($birthday_year=='1995') {
                            echo "selected";
                        }
                        ?>
                    >1995</option>

                    <option value="1994"
                        <?php
                        if($birthday_year=='1994') {
                            echo "selected";
                        }
                        ?>
                    >1994</option>

                    <option value="1993"
                        <?php
                        if($birthday_year=='1993') {
                            echo "selected";
                        }
                        ?>
                    >1993</option>

                    <option value="1992"
                        <?php
                        if($birthday_year=='1992') {
                            echo "selected";
                        }
                        ?>
                    >1992</option>

                    <option value="1991"
                        <?php
                        if($birthday_year=='1991') {
                            echo "selected";
                        }
                        ?>
                    >1991</option>

                    <option value="1990"
                        <?php
                        if($birthday_year=='1990') {
                            echo "selected";
                        }
                        ?>
                    >1990</option>

                    <option value="1989"
                        <?php
                        if($birthday_year=='1989') {
                            echo "selected";
                        }
                        ?>
                    >1989</option>

                    <option value="1988"
                        <?php
                        if($birthday_year=='1988') {
                            echo "selected";
                        }
                        ?>
                    >1988</option>

                    <option value="1987"
                        <?php
                        if($birthday_year=='1987') {
                            echo "selected";
                        }
                        ?>
                    >1987</option>

                    <option value="1986"
                        <?php
                        if($birthday_year=='1986') {
                            echo "selected";
                        }
                        ?>
                    >1986</option>

                    <option value="1985"
                        <?php
                        if($birthday_year=='1985') {
                            echo "selected";
                        }
                        ?>
                    >1985</option>

                    <option value="1984"
                        <?php
                        if($birthday_year=='1984') {
                            echo "selected";
                        }
                        ?>
                    >1984</option>

                    <option value="1983"
                        <?php
                        if($birthday_year=='1983') {
                            echo "selected";
                        }
                        ?>
                    >1983</option>

                    <option value="1982"
                        <?php
                        if($birthday_year=='1982') {
                            echo "selected";
                        }
                        ?>
                    >1982</option>

                    <option value="1981"
                        <?php
                        if($birthday_year=='1981') {
                            echo "selected";
                        }
                        ?>
                    >1981</option>

                    <option value="1980"
                        <?php
                        if($birthday_year=='1980') {
                            echo "selected";
                        }
                        ?>
                    >1980</option>
                </select>
            </td>
        </tr>

        <!----- Email Id ---------------------------------------------------------->
        <tr>
            <td>EMAIL ID:</td>
            <td><input type="text" name="Email_Id" maxlength="100" value="<?php echo $email_id; ?>" readonly="readonly"/>
        </tr>

        <!----- Mobile Number ---------------------------------------------------------->
        <tr>
            <td>MOBILE NUMBER:</td>
            <td>
                <input type="text" name="Mobile_Number" maxlength="10" value="<?php echo $mobile_number; ?>"readonly="readonly" />
                (10 digit number)
            </td>

        </tr>

        <!----- Gender ----------------------------------------------------------->
        <tr>
            <td>GENDER:</td>
            <td>
                Male <input type="radio" name="Gender" value="Male" readonly="readonly"
                    <?php
                    if($gender=="Male") {
                        echo "checked";
                    }
                    ?>
                />
                Female <input type="radio" name="Gender" value="Female" readonly="readonly"
                <?php
                    if($gender=="Female") {
                        echo "checked";
                    }
                    ?>
                />
            </td>
        </tr>

        <!----- Address ---------------------------------------------------------->
        <tr>
            <td>ADDRESS: <br /><br /><br /></td>
            <td><textarea name="Address" rows="4" cols="30" readonly="readonly">
            <?php  echo $address; ?>
            </textarea></td>
        </tr>

        <!----- City ---------------------------------------------------------->
        <tr>
            <td>CITY:</td>
            <td><input type="text" name="City" maxlength="30" value="<?php echo $city; ?>" readonly="readonly"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Pin Code ---------------------------------------------------------->
        <tr>
            <td>PIN CODE:</td>
            <td><input type="text" name="Pin_Code" maxlength="6" value="<?php echo $pin_code; ?>" readonly="readonly"/>
                (6 digit number)
            </td>
        </tr>

        <!----- State ---------------------------------------------------------->
        <tr>
            <td>STATE:</td>
            <td><input type="text" name="State" maxlength="30" value="<?php echo $state; ?>" readonly="readonly" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Country ---------------------------------------------------------->
        <tr>
            <td>COUNTRY:</td>
            <td><input type="text" name="Country" value="India" readonly="readonly" /></td>
        </tr>

            
		<!----- Caste ---------------------------------------------------------->
		<tr>
			<td>Category & Caste:</td>
			<td><input type="text" name="Caste" maxlength="30" required="" value="<?php  
				echo $caste;
			?>" readonly="readonly"/>
			(max 30 characters a-z and A-Z)
			</td>
		</tr>

		<!----- Last_Caste_Attended ---------------------------------------------------------->
		<tr>
			<td>Last Class Attended:</td>
			<td><input type="text" name="Last_Caste_Attended" maxlength="30" required="" value="<?php  
				echo $last_Class_Attended;
				?>" readonly="readonly"/>
				(max 30 characters a-z and A-Z)
			</td>
		</tr>


		

		<!----- Mother_Name ---------------------------------------------------------->
		<tr>
			<td>Mother Name:</td>
			<td><input type="text" name="Mother_Name" maxlength="30" required="" value="<?php  
				echo $mother_Name;
				?>" readonly="readonly"/>
			(max 30 characters a-z and A-Z)
			</td>
		</tr>

		<!----- Father_Name ---------------------------------------------------------->
		<tr>
			<td>Father Name:</td>
			<td><input type="text" name="Father_Name" maxlength="30" required="" value="<?php  
			echo $father_Name;
			?>" readonly="readonly"/>
			(max 30 characters a-z and A-Z)
			</td>
		</tr>


		<!----- 	Place_Of_Birth ---------------------------------------------------------->
		<tr>
			<td>Place Of Birth:</td>
			<td><input type="text" name="Place_Of_Birth" maxlength="30" required="" value="<?php  
				echo $place_Of_Birth;
				?>" readonly="readonly"/>
				(max 30 characters a-z and A-Z)
			</td>
		</tr>



        <!----- Qualification---------------------------------------------------------->
        <tr>
            <td>QUALIFICATION: <br /><br /><br /><br /><br /><br /><br /></td>

            <td>
                <table>

                    <tr>
                        <td align="center"><b>Sl.No.</b></td>
                        <td align="center"><b>Examination</b></td>
                        <td align="center"><b>Board</b></td>
                        <td align="center"><b>Percentage</b></td>
                        <td align="center"><b>Year of Passing</b></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Class VIII</td>
                        <td><input type="text" name="ClassVIII_Board" maxlength="30" value="<?php echo $classVIII_board; ?>" readonly="readonly"/></td>
                        <td><input type="text" name="ClassVIII_Percentage" maxlength="30" value="<?php echo $classVIII_percentage; ?>" readonly="readonly"/></td>
                        <td><input type="text" name="ClassVIII_YrofPassing" maxlength="30" value="<?php echo $classVIII_yrofpassing; ?>"readonly="readonly"/></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Class IX</td>
                        <td><input type="text" name="ClassIX_Board" maxlength="30" value="<?php echo $classIX_board; ?>" readonly="readonly"/></td>
                        <td><input type="text" name="ClassIX_Percentage" maxlength="30" value="<?php echo $classIX_percentage; ?>" readonly="readonly"/></td>
                        <td><input type="text" name="ClassIX_YrofPassing" maxlength="30" value="<?php echo $classIX_yrofpassing; ?>"readonly="readonly"/></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Class X</td>
                        <td><input type="text" name="ClassX_Board" maxlength="30" value="<?php echo $classX_board; ?>" readonly="readonly"/></td>
                        <td><input type="text" name="ClassX_Percentage" maxlength="30" value="<?php echo $classX_percentage; ?>"readonly="readonly"/></td>
                        <td><input type="text" name="ClassX_YrofPassing" maxlength="30" value="<?php echo $classX_yrofpassing; ?>"readonly="readonly"/></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Class XII</td>
                        <td><input type="text" name="ClassXII_Board" maxlength="30" value="<?php echo $classXII_board; ?>"readonly="readonly"/></td>
                        <td><input type="text" name="ClassXII_Percentage" maxlength="30" value="<?php echo $classXII_percentage; ?>" readonly="readonly"/></td>
                        <td><input type="text" name="ClassXII_YrofPassing" maxlength="30" value="<?php echo $classXII_yrofpassing; ?>" readonly="readonly"/></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td align="center">(10 char max)</td>
                        <td align="center">(upto 2 decimal)</td>
                    </tr>
                </table>

            </td>
        </tr>
   <!----- Course ---------------------------------------------------------->
        <tr>
            <td><label>Promote To : </td>
            <td>
			
               <select name="Year"  id="Year" value=""/ readonly="readonly"  class="custom-select"  style="width:200px;   >


					
                    <option value="Year">Year</option>

              
                    <option value="First_Year"
                        <?php
                        if($year=='First_Year') {
                            echo "selected";
                        }
                        ?>

                    >First Year</option>

                    <option value="Second_Year"
                        <?php
                        if($year=='Second_Year') {
                            echo "selected";
                        }
                        ?>
                    >Second Year</option>

                    <option value="Third_Year"
                        <?php
                        if($year=='Third_Year') {
                            echo "selected";
                        }
                        ?>
                    >Third Year</option>


            </td>
        </tr>
		


		<tr>
			<td>School Leaving/Transfer Certificate:</td>
			<td>
			</br>

			<a button class="btn btn-primary" href="download.php?filename=<?php echo $SchoolLeavingTransfercertificate;?>" >
			Download </a></td>
		</tr>
	


		<tr>
			<td>SSC Markmemo:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $sscmarkmemo;?>" >
			Download </a>
			</td>
			</tr>

		<tr>
			<td>HSC Markmemo:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $HscMarkmemo;?>" >
			Download </a>
			</td>
		</tr>


		<tr>
			<td>Caste Certificate:</td>
			<td>
		</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $CasteCertificate;?>" >
			Download </a>
			</td>
		</tr>


		<tr>
			<td>Non-Creamy Layer:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $NonCreamyLayer;?>" >
			Download </a>
			</td>
		</tr>
		
		
		<tr>
			<td>Nationality Certificate:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $NationalityCertificate;?>" >
			Download </a>
			</td>
		</tr>

		<tr>
		<td>ITI:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $Iti;?>" >
			Download </a>
			</td>
		</tr>


		<tr>
			<td>8th Markmemo:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $eightthMarkmemo;?>" >
			Download </a>
			</td>
		</tr>
		
		<tr>
			<td>9th Markmemo:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $ninethMarkmemo;?>" >
			Download </a>
		</td>
		</tr>

		<tr>
			<td>Z Form:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $ZForm;?>" >
			Download </a>
			</td>
		</tr>

		<tr>
			<td>Mcvc:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $Mcvc;?>" >
			Download </a>
			</td>
		</tr>

		<tr>
			<td>VOC:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $Voc;?>" >
			Download </a>
			</td>
		</tr>

		<tr>
			<td>Student AdharCard:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $StudentAdharCard;?>" >
			Download </a>
			</td>
		</tr>
		
		
		<tr>
			<td>Income Certificate:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $IncomeCertificate;?>" >
			Download </a>
			</td>
		</tr>

		<tr>
			<td>Birth Certificate:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $BirthCertificate;?>" >
			Download </a>
			</td>
		</tr>

		<tr>
			<td>N Form:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $NForm;?>" >
			Download </a>
			</td>
		</tr>

		<tr>
			<td>Inhabitant Or Resident Of:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $InhabitantOrResidentOf;?>" >
			Download </a>
			</td>
		</tr>
		<tr>
			<td>Profarma N:</td>
			<td>
			</br>
			<a button class="btn btn-primary" href="download.php?filename=<?php echo $ProfarmaN;?>" >
			Download </a>
			</td>
		</tr>



        <!----- Submit and Reset ------------------------------------------------->
        <tr>
            <td colspan="1" align="center">
      <input type="button" class="btn btn-danger" value = "Back" onclick="history.go(-1)"/>
             </td>
        </tr>
    </table>    

</form>
</div></div>
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