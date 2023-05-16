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

</head>
 
<body>
	<form action="re.php" method="POST" enctype="multipart/form-data">

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /
	<link rel="stylesheet" Type="text/css" href="http://www.example.com/basic.css">

</head>
	
<center>
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h3 class="header-line" align=center>Student Admission Form </h3>
				</div>
				</div></div>
 
<table align="center" cellpadding = "10">



<!----- Image ---------------------------------------------------------->

<tr>
<td><label>PHOTO:</label></td>
<td>
<input type="file" name ="upload" value="" class="btn btn-success btn-xs" required="">
</td>
</tr>



 <!----- ENROLLMENT ID ---------------------------------------------------------->
 
 <tr>
<td><label>ENROLLMENT ID:</label></td>
<td><input type="text"  name="Enrollment_Id"  maxlength="10" required=""/>
(only Numeric Values)
</td>
</tr>




<tr>
<td><label>Date Of Admission:</label></td>
<td><input type="date" name="Date_Of_Admission" maxlength="30" value="<?php
echo date("d/m/yy");
?>"/>
(dd/mm/yy)
</td>
</tr>


<tr>
<td>Branch:</td>
<td>
 <input type="radio" name="Branch" value="Computer Engineering"/>Computer
 <input type="radio" name="Branch" value="Mechanical Engineering"/>Mechanical
 <input type="radio" name="Branch" value="Civil Engineering"/>Civil
 <input type="radio" name="Branch" value="Electronics & Telecommunication Engineering"/>Electronics
 </br>
 <input type="radio" name="Branch" value="Electrical Engineering"/>Electrical
</td>
</tr>


<!----- First Name ---------------------------------------------------------->
<tr>
<td><label>FIRST NAME:</label></td>
<td><input type="text" name="First_Name" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<!----- Middle Name ---------------------------------------------------------->
<tr>
<td><label>MIDDLE NAME:</label></td>
<td><input type="text" name="Middle_Name" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Last Name ---------------------------------------------------------->
<tr>
<td><label>LAST NAME:</label></td>
<td><input type="text" name="Last_Name" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Date Of Birth -------------------------------------------------------->
<tr>
<td><label>DATE OF BIRTH:</label></td>
 
<td>
<select name="Birthday_Day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
 
<select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>

<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 

</select>
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td><label>EMAIL ID:</label></td>
<td><input type="email_id" name="Email_Id" maxlength="100" required="" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td><label>MOBILE NUMBER:</label></td>
<td>
<input type="text" name="Mobile_Number" maxlength="13" value=<?php echo "+91"?> 
/>
(10 digit number)*
</td>

</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td><label>GENDER:</label></td>
<td>
Male <input type="radio" name="Gender" value="Male" Checked />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td><label>ADDRESS: </label><br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>















 
<!----- City ---------------------------------------------------------->
<tr>
<td><label>CITY:</label></td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- Pin Code ---------------------------------------------------------->
<tr>
<td><label>PIN CODE:</label></td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>













<script>
var stateObject = {
"India": { "Delhi": ["new Delhi", "North Delhi"],
"Kerala": ["Thiruvananthapuram", "Palakkad"],
"Goa": ["North Goa", "South Goa"],
},
"Australia": {
"South Australia": ["Dunstan", "Mitchell"],
"Victoria": ["Altona", "Euroa"]
}, "Canada": {
"Alberta": ["Acadia", "Bighorn"],
"Columbia": ["Washington", ""]
},
}
window.onload = function () {
var countySel = document.getElementById("countySel"),
stateSel = document.getElementById("stateSel"),
districtSel = document.getElementById("districtSel");
for (var country in stateObject) {
countySel.options[countySel.options.length] = new Option(country, country);
}
countySel.onchange = function () {
stateSel.length = 1; // remove all options bar first
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var state in stateObject[this.value]) {
stateSel.options[stateSel.options.length] = new Option(state, state);
}
}
countySel.onchange(); // reset in case page is reloaded
stateSel.onchange = function () {
districtSel.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var district = stateObject[countySel.value][this.value];
for (var i = 0; i < district.length; i++) {
districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
}
}
}
</script>









 
 <!----- Country ---------------------------------------------------------->
<tr>
<td><label>COUNTRY:</label></td>
<td><select name="state" id="countySel" size="1">
<option value="" selected="selected">Select Country</option>
</select>
</tr>
 
<!----- State ---------------------------------------------------------->
<tr>
<td><label>STATE:</label></td>
<td> <select name="countrya" id="stateSel" size="1">
<option value="" selected="selected">Please select Country first</option>
</select>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
 <!----- District ---------------------------------------------------------->
<tr>
<td><label>District:</label></td>
<td><select name="district" id="districtSel" size="1">
<option value="" selected="selected">Please select State first</option>
</select></td>
</tr>
 
 
<!----- Caste ---------------------------------------------------------->
<tr>
<td><label>Category & Caste:</label></td>
<td><input type="text" name="Caste" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Last_Caste_Attended ---------------------------------------------------------->
<tr>
<td><label>Last Class Attended:</label></td>
<td><input type="text" name="Last_Class_Attended" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>



<!----- Mother_Name ---------------------------------------------------------->
<tr>
<td><label>Mother Name:</label></td>
<td><input type="text" name="Mother_Name" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Father_Name ---------------------------------------------------------->
<tr>
<td><label>Father Name:</label></td>
<td><input type="text" name="Father_Name" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>


<!----- 	Place_Of_Birth ---------------------------------------------------------->
<tr>
<td><label>Place Of Birth:</label></td>
<td><input type="text" name="Place_Of_Birth" maxlength="30" required=""/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<!----- Qualification---------------------------------------------------------->
<tr>
<td><label>QUALIFICATION: </label><br /><br /><br /><br /><br /><br /><br /></td>
 
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
<td><label>1</label></td>
<td><label>Class VIII</label></td>
<td><input type="text" name="ClassVIII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassVIII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassVIII_YrofPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td><label>2</label></td>
<td><label>Class IX</label></td>
<td><input type="text" name="ClassIX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassIX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassIX_YrofPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td><label>3</label></td>
<td><label>Class X</label></td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrofPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td><label>4</label></td>
<td><label>Class XII</label></td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrofPassing" maxlength="30" /></td>
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
			
               <select name="Year"  id="Year" value="" style="width:200px;/>



                    <option value="Year">Year</option>

                    <option value="First_Year">First Year</option>

                    <option value="Second_Year">Second Year</option>

                    <option value="Third_Year">Third Year</option>


            </td>
        </tr>
		
 
<!----- Image ---------------------------------------------------------->

<tr>
<td><label>School Leaving/Transfer Certificate:</label></td>
<td>
<input type="file" name ="SchoolLeaving/TransferCertificate" value="" class="btn btn-success btn-xs">
</td>
</tr>



 <tr>
<td><label>SSC Markmemo:</label></td>
<td>
<input type="file" name ="sscmarkmemo" value="" class="btn btn-success btn-xs">
</td>
</tr>

<tr>
<td><label>HSC Markmemo:</label></td>
<td>
<input type="file" name ="HscMarkmemo" value="" class="btn btn-success btn-xs">
</td>
</tr>


<tr>
<td><label>Caste Certificate:</label></td>
<td>
<input type="file" name ="CasteCertificate" value="" class="btn btn-success btn-xs">
</td>
</tr>


<tr>
<td><label>Non-Creamy Layer:</label></td>
<td>
<input type="file" name ="Non-CreamyLayer" value="" class="btn btn-success btn-xs">
</td>
</tr>
<tr>



<td><label>Nationality Certificate:</label></td>
<td>
<input type="file" name ="NationalityCertificate" value="" class="btn btn-success btn-xs">
</td>
</tr>


<td><label>ITI:</label></td>
<td>
<input type="file" name ="Iti" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>8th Markmemo:</label></td>
<td>
<input type="file" name ="8thMarkmemo" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>9th Markmemo:</label></td>
<td>
<input type="file" name ="9thMarkmemo" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>Z Form:</label></td>
<td>
<input type="file" name ="ZForm" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>Mcvc:</label></td>
<td>
<input type="file" name ="Mcvc" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>VOC:</label></td>
<td>
<input type="file" name ="Voc" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>Student AdharCard:</label></td>
<td>
<input type="file" name ="StudentAdharCard" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>Income Certificate:<label></td>
<td>
<input type="file" name ="IncomeCertificate" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>Birth Certificate:</label></td>
<td>
<input type="file" name ="BirthCertificate" value="" class="btn btn-success btn-xs">
</td>
</tr>


<td><label>N Form:</label></td>
<td>
<input type="file" name ="NForm" value="" class="btn btn-success btn-xs">
</td>
</tr>


<td><label>Inhabitant Or Resident Of:<label></td>
<td>
<input type="file" name ="InhabitantOrResidentOf" value="" class="btn btn-success btn-xs">
</td>
</tr>

<td><label>Profarma N:</label></td>
<td>
<input type="file" name ="ProfarmaN" value="" class="btn btn-success btn-xs">
</td>
</tr>

 
 
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Submit" button class="btn btn-primary">
<input type="reset" class="reset_button, btn btn-danger" onclick="reset();" />
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