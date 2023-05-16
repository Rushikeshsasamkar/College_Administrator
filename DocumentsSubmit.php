<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



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
$sql = "INSERT INTO student_record (SchoolLeavingTransfercertificate, sscmarkmemo, HscMarkmemo, CasteCertificate, NonCreamyLayer , NationalityCertificate, Iti, 8thMarkmemo, 9thMarkmemo, ZForm, Mcvc,Voc, StudentAdharCard, IncomeCertificate, BirthCertificate, NForm,InhabitantOrResidentOf, ProfarmaN)VALUES ('$SchoolLeavingTransferCertificate','$sscmarkmemo','$HscMarkmemo', '$CasteCertificate', '$NonCreamyLayer','$NationalityCertificate', '$Iti', '$EightthMarkmemo','$NinethMarkmemo', '$ZForm', '$Mcvc', '$Voc', '$StudentAdharCard', '$IncomeCertificate', '$BirthCertificate', '$NForm','$InhabitantOrResidentOf', '$ProfarmaN')";

if(mysqli_query($link, $sql)){
   header('Location: index.php');

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// close connection
mysqli_close($link);
error_reporting(E_PARSE);
error_reporting(0);
?>