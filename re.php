<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


	

error_reporting(E_PARSE);
$enrollment_id = mysqli_real_escape_string($link, $_REQUEST['Enrollment_Id']);
$branch = mysqli_real_escape_string($link, $_REQUEST['Branch']);


$first_name = mysqli_real_escape_string($link, $_REQUEST['First_Name']);
$middle_name = mysqli_real_escape_string($link, $_REQUEST['Middle_Name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['Last_Name']);
$birthday_day = mysqli_real_escape_string($link, $_REQUEST['Birthday_Day']);
$birthday_month = mysqli_real_escape_string($link, $_REQUEST['Birthday_Month']);
$birthday_year = mysqli_real_escape_string($link, $_REQUEST['Birthday_Year']);
$email_id = mysqli_real_escape_string($link, $_REQUEST['Email_Id']);
$mobile_number = mysqli_real_escape_string($link, $_REQUEST['Mobile_Number']);

error_reporting(E_PARSE);

$gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
$address = mysqli_real_escape_string($link, $_REQUEST['Address']);
$city = mysqli_real_escape_string($link, $_REQUEST['City']);
$pin_code = mysqli_real_escape_string($link, $_REQUEST['Pin_Code']);
$state = mysqli_real_escape_string($link, $_REQUEST['State']);
$country = mysqli_real_escape_string($link, $_REQUEST['Country']);

$classVIII_board = mysqli_real_escape_string($link, $_REQUEST['ClassVIII_Board']);
$classVIII_percentage = mysqli_real_escape_string($link, $_REQUEST['ClassVIII_Percentage']);
$classVIII_yrofpassing = mysqli_real_escape_string($link, $_REQUEST['ClassVIII_YrofPassing']);
$classIX_board = mysqli_real_escape_string($link, $_REQUEST['ClassIX_Board']);
$classIX_percentage = mysqli_real_escape_string($link, $_REQUEST['ClassIX_Percentage']);
$classIX_yrofpassing = mysqli_real_escape_string($link, $_REQUEST['ClassIX_YrofPassing']);
$classX_board = mysqli_real_escape_string($link, $_REQUEST['ClassX_Board']);
$classX_percentage = mysqli_real_escape_string($link, $_REQUEST['ClassX_Percentage']);
$classX_yrofpassing = mysqli_real_escape_string($link, $_REQUEST['ClassX_YrofPassing']);

$classXII_board = mysqli_real_escape_string($link, $_REQUEST['ClassXII_Board']);

$classXII_percentage = mysqli_real_escape_string($link, $_REQUEST['ClassXII_Percentage']);

$classXII_yrofpassing = mysqli_real_escape_string($link, $_REQUEST['ClassXII_YrofPassing']);

$year = mysqli_real_escape_string($link, $_REQUEST['Year']);

$caste = mysqli_real_escape_string($link, $_REQUEST['Caste']);
$last_Class_Attended = mysqli_real_escape_string($link, $_REQUEST['Last_Class_Attended']);
$date_Of_Admission = mysqli_real_escape_string($link, $_REQUEST['Date_Of_Admission']);
$mother_Name = mysqli_real_escape_string($link, $_REQUEST['Mother_Name']);
$father_Name = mysqli_real_escape_string($link, $_REQUEST['Father_Name']);
$place_Of_Birth = mysqli_real_escape_string($link, $_REQUEST['Place_Of_Birth']);




#Photo:

error_reporting(E_PARSE);
$filename=$_FILES["upload"]["name"];
$tmpname=$_FILES["upload"]["tmp_name"];
	 	   	 

$folder="images/".$filename;
move_uploaded_file($tmpname,$folder);


error_reporting(E_PARSE);


#School Leaving/Transfer Certificate:

error_reporting(E_PARSE);

$filename=$_FILES["SchoolLeaving/TransferCertificate"]["name"];
$tmpname=$_FILES["School Leaving/TransferCertificate"]["tmp_name"];

$SchoolLeavingTransferCertificate="documents/".$filename;

move_uploaded_file($tmpname,$SchoolLeavingTransferCertificate);


#ssc markmemo:
$filename=$_FILES["sscmarkmemo"]["name"];
$tmpname=$_FILES["sscmarkmemo"]["tmp_name"];

$sscmarkmemo="documents/".$filename;

move_uploaded_file($tmpname,$sscmarkmemo);




#Hsc Markmemo:
$filename=$_FILES["HscMarkmemo"]["name"];
$tmpname=$_FILES["HscMarkmemo"]["tmp_name"];

$HscMarkmemo="documents/".$filename;

move_uploaded_file($tmpname,$HscMarkmemo);



#Caste Certificate:
$filename=$_FILES["CasteCertificate"]["name"];
$tmpname=$_FILES["CasteCertificate"]["tmp_name"];

$CasteCertificate="documents/".$filename;

move_uploaded_file($tmpname,$CasteCertificate);



#Non-Creamy Layer:
$filename=$_FILES["Non-CreamyLayer"]["name"];
$tmpname=$_FILES["Non-CreamyLayer"]["tmp_name"];

$NonCreamyLayer="documents/".$filename;

move_uploaded_file($tmpname,$NonCreamyLayer);



#Nationality Certificate:
$filename=$_FILES["NationalityCertificate"]["name"];
$tmpname=$_FILES["NationalityCertificate"]["tmp_name"];

$NationalityCertificate="documents/".$filename;

move_uploaded_file($tmpname,$NationalityCertificate);



#Iti:
$filename=$_FILES["Iti"]["name"];
$tmpname=$_FILES["Iti"]["tmp_name"];

$Iti="documents/".$filename;

move_uploaded_file($tmpname,$Iti);




#8th Markmemo:
$filename=$_FILES["8thMarkmemo"]["name"];
$tmpname=$_FILES["8thMarkmemo"]["tmp_name"];

$EightthMarkmemo="documents/".$filename;

move_uploaded_file($tmpname,$EightthMarkmemo);


#9th Markmemo:
$filename=$_FILES["9thMarkmemo"]["name"];
$tmpname=$_FILES["9thMarkmemo"]["tmp_name"];

$NinethMarkmemo="documents/".$filename;

move_uploaded_file($tmpname,$NinethMarkmemo);



#Z Form:
$filename=$_FILES["ZForm"]["name"];
$tmpname=$_FILES["ZForm"]["tmp_name"];

$ZForm="documents/".$filename;

move_uploaded_file($tmpname,$ZForm);



#Mcvc:
$filename=$_FILES["Mcvc"]["name"];
$tmpname=$_FILES["Mcvc"]["tmp_name"];

$Mcvc="documents/".$filename;

move_uploaded_file($tmpname,$Mcvc);



#Voc:
$filename=$_FILES["Voc"]["name"];
$tmpname=$_FILES["Voc"]["tmp_name"];

$Voc="documents/".$filename;

move_uploaded_file($tmpname,$Voc);



#Student AdharCard:
$filename=$_FILES["StudentAdharCard"]["name"];
$tmpname=$_FILES["StudentAdharCard"]["tmp_name"];

$StudentAdharCard="documents/".$filename;

move_uploaded_file($tmpname,$StudentAdharCard);



#Income Certificate:
$filename=$_FILES["IncomeCertificate"]["name"];
$tmpname=$_FILES["IncomeCertificate"]["tmp_name"];

$IncomeCertificate="documents/".$filename;

move_uploaded_file($tmpname,$IncomeCertificate);

#Birth Certificate:
$filename=$_FILES["BirthCertificate"]["name"];
$tmpname=$_FILES["BirthCertificate"]["tmp_name"];

$BirthCertificate="documents/".$filename;

move_uploaded_file($tmpname,$BirthCertificate);

#N Form:
$filename=$_FILES["NForm"]["name"];
$tmpname=$_FILES["NForm"]["tmp_name"];

$NForm="documents/".$filename;

move_uploaded_file($tmpname,$NForm);

#Inhabitant Or Resident Of:
$filename=$_FILES["InhabitantOrResidentOf"]["name"];
$tmpname=$_FILES["InhabitantOrResidentOf"]["tmp_name"];

$InhabitantOrResidentOf="documents/".$filename;

move_uploaded_file($tmpname,$InhabitantOrResidentOf);

#Profarma N:
$filename=$_FILES["ProfarmaN"]["name"];
$tmpname=$_FILES["ProfarmaN"]["tmp_name"];

$ProfarmaN="documents/".$filename;

move_uploaded_file($tmpname,$ProfarmaN); 





 


// attempt insert query execution
$sql = "INSERT INTO student_record (Enrollment_Id, Branch, First_Name, Middle_Name, Last_Name , Birthday_Day, Birthday_Month, Birthday_Year,Email_Id, Mobile_Number, Gender, Address, City, Pin_Code, State, Country,Caste, Last_Class_Attended, Date_Of_Admission, Mother_Name, Father_Name, Place_Of_Birth,ClassVIII_Board, ClassVIII_Percentage, ClassVIII_YrofPassing, ClassIX_Board, ClassIX_Percentage, ClassIX_YrofPassing, ClassX_Board, ClassX_Percentage, ClassX_YrofPassing, ClassXII_Board, ClassXII_Percentage, ClassXII_YrofPassing,Year,picsource,SchoolLeavingTransfercertificate, sscmarkmemo, HscMarkmemo, CasteCertificate, NonCreamyLayer , NationalityCertificate, Iti, 8thMarkmemo, 9thMarkmemo, ZForm, Mcvc,Voc, StudentAdharCard, IncomeCertificate, BirthCertificate, NForm,InhabitantOrResidentOf, ProfarmaN)VALUES('$enrollment_id','$branch','$first_name', '$middle_name', '$last_name','$birthday_day', '$birthday_month', '$birthday_year','$email_id', '$mobile_number','$gender', '$address', '$city', '$pin_code', '$state', '$country','$caste', '$last_Class_Attended', '$date_Of_Admission', '$mother_Name', '$father_Name', '$place_Of_Birth','$classVIII_board', '$classVIII_percentage', '$classVIII_yrofpassing', '$classIX_board', '$classIX_percentage', '$classIX_yrofpassing', '$classX_board', '$classX_percentage', '$classX_yrofpassing', '$classXII_board', '$classXII_percentage', '$classXII_yrofpassing','$year','$folder','$SchoolLeavingTransferCertificate','$sscmarkmemo','$HscMarkmemo', '$CasteCertificate', '$NonCreamyLayer','$NationalityCertificate', '$Iti', '$EightthMarkmemo','$NinethMarkmemo', '$ZForm', '$Mcvc', '$Voc', '$StudentAdharCard', '$IncomeCertificate', '$BirthCertificate', '$NForm','$InhabitantOrResidentOf', '$ProfarmaN')";

if(mysqli_query($link, $sql)){
	
   header('Location:index.php');
   ?><script>alert("Student Admitted Sucessfully")</script>
        <?php

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// close connection
mysqli_close($link);
error_reporting(E_PARSE);
error_reporting(0);
?>