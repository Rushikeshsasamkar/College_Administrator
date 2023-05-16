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

$enrollment_id=$_GET['enrollment_id'];
$conn = new mysqli('localhost', 'root','', 'registration');

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['Enrollment_Id'];
	$posts[1] = $_POST['Branch'];
  
	$posts[2] = $_POST['First_Name'];
    $posts[3] = $_POST['Middle_Name'];
    $posts[4] = $_POST['Last_Name'];
    $posts[5] = $_POST['Birthday_Day'];
    $posts[6] = $_POST['Birthday_Month'];
    $posts[7] = $_POST['Birthday_Year'];
    $posts[8] = $_POST['Email_Id'];
    $posts[9] = $_POST['Mobile_Number'];
    $posts[10] = $_POST['Gender'];
    $posts[11] = $_POST['Address'];
    $posts[12] = $_POST['City'];
    $posts[13] = $_POST['Pin_Code'];
    $posts[14] = $_POST['State'];
    $posts[15] = $_POST['Country'];
	error_reporting(E_PARSE);

    $posts[16]= $_POST['Caste'];
    $posts[17]= $_POST['Last_Class_Attended'];
    $posts[18]= $_POST['Date_Of_Admission'];
    $posts[19]= $_POST['Mother_Name'];
    $posts[20]= $_POST['Father_Name'];
    $posts[21]= $_POST['Place_Of_Birth'];
    $posts[22]= $_POST['ClassVIII_Board'];
    $posts[23]= $_POST['ClassVIII_Percentage'];
    $posts[24]= $_POST['ClassVIII_YrofPassing'];
    $posts[25]= $_POST['ClassIX_Board'];
    $posts[26]= $_POST['ClassIX_Percentage'];
    $posts[27]= $_POST['ClassIX_YrofPassing'];
    $posts[28]= $_POST['ClassX_Board'];
    $posts[29]= $_POST['ClassX_Percentage'];
    $posts[30]= $_POST['ClassX_YrofPassing'];
    $posts[31]= $_POST['ClassXII_Board'];
    $posts[32]= $_POST['ClassXII_Percentage'];
    $posts[33]= $_POST['ClassXII_YrofPassing'];
    $posts[34]= $_POST['Year'];
    $posts[35]= $_FILES['picsource'];
	$posts[36]= $_FILES['SchoolLeavingTransfercertificate'];
	$posts[37]= $_FILES['sscmarkmemo'];
	$posts[38]= $_FILES['HscMarkmemo'];
	$posts[39]= $_FILES['CasteCertificate'];
	$posts[40]= $_FILES['NonCreamyLayer'];
	$posts[41]= $_FILES['NationalityCertificate'];
	
	$posts[42]= $_FILES['Iti'];
	$posts[43]= $_FILES['8thMarkmemo'];
	$posts[44]= $_FILES['9thMarkmemo'];
	$posts[45]= $_FILES['ZForm'];
	$posts[46]= $_FILES['Mcvc'];
	$posts[47]= $_FILES['Voc'];
	$posts[48]= $_FILES['StudentAdharCard'];
	$posts[49]= $_FILES['IncomeCertificate'];
	$posts[50]= $_FILES['BirthCertificate'];
	$posts[51]= $_FILES['NForm'];
	$posts[52]= $_FILES['InhabitantOrResidentOf'];
	$posts[53]= $_FILES['ProfarmaN'];

    
    

    return $posts;
}



   // Edit
if(isset($_POST['update']))
{
	
   $data = getPosts();
	
	
    $update_Query = "UPDATE `student_record` SET Branch='$data[1]', First_Name='$data[2]',Middle_Name='$data[3]',Last_Name='$data[4]',Birthday_Day='$data[5]',Birthday_Month='$data[6]',Birthday_Year='$data[7]',Email_Id='$data[8]',Mobile_Number='$data[9]',Gender='$data[10]',Address='$data[11]',City='$data[12]',Pin_Code='$data[13]',State='$data[14]',Country='$data[15]',Caste='$data[16]',Last_Class_Attended='$data[17]',Date_Of_Admission='$data[18]',Mother_Name='$data[19]',Father_Name='$data[20]',Place_Of_Birth='$data[21]',ClassVIII_Board='$data[22]',ClassVIII_Percentage='$data[23]',ClassVIII_YrofPassing='$data[24]',ClassIX_Board='$data[25]',ClassIX_Percentage='$data[26]',ClassIX_YrofPassing='$data[27]',ClassX_Board='$data[28]',ClassX_Percentage='$data[29]',ClassX_YrofPassing='$data[30]',ClassXII_Board='$data[31]',ClassXII_Percentage='$data[32]',ClassXII_YrofPassing='$data[33]',Year='$data[34]' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Student Information updated sucessfully")</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
	
	
	header("location:Index.php");
}











  // photo Update
if(isset($_POST['UpdatePhoto']))
{
	
   $data = getPosts();
	 $filename=$_FILES["upload"]["name"];
     $tmpname=$_FILES["upload"]["tmp_name"];
	 	   	 

       $folder=("images/".$filename);
	   move_uploaded_file($tmpname,$folder);

	
    $update_Query = "UPDATE `student_record` SET picsource='$folder' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Photo Updated")</script>
        <?php
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}


//<------------- School Leaving/Transfer Certificate ----------------->

if(isset($_POST['leavingSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["SchoolLeaving/TransferCertificate"]["name"];
     $tmpname=$_FILES["SchoolLeaving/TransferCertificate"]["tmp_name"];
	 	   	 

       $SchoolLeavingTransferCertificate=("documents/".$filename);
	   move_uploaded_file($tmpname,$SchoolLeavingTransferCertificate);

	
    $update_Query = "UPDATE `student_record` SET SchoolLeavingTransfercertificate='$SchoolLeavingTransferCertificate' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
			
				?><script>alert("School Leaving Transfer Certificate Updated")</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



//<------------- SSCSubmit ----------------->

if(isset($_POST['SSCSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["sscmarkmemo"]["name"];
     $tmpname=$_FILES["sscmarkmemo"]["tmp_name"];
	 	   	 

       $sscmarkmemo=("documents/".$filename);
	   move_uploaded_file($tmpname,$sscmarkmemo);

	
    $update_Query = "UPDATE `student_record` SET sscmarkmemo='$sscmarkmemo' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("SSC markmemo Updated")</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}






//<------------- HSCSubmit ----------------->

if(isset($_POST['HSCSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["HscMarkmemo"]["name"];
     $tmpname=$_FILES["HscMarkmemo"]["tmp_name"];
	 	   	 

       $HscMarkmemo=("documents/".$filename);
	   move_uploaded_file($tmpname,$HscMarkmemo);

	
    $update_Query = "UPDATE `student_record` SET HscMarkmemo='$HscMarkmemo' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Hsc Markmemo Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



//<------------- CasteSubmit ----------------->

if(isset($_POST['CasteSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["CasteCertificate"]["name"];
     $tmpname=$_FILES["CasteCertificate"]["tmp_name"];
	 	   	 

       $CasteCertificate=("documents/".$filename);
	   move_uploaded_file($tmpname,$CasteCertificate);

	
    $update_Query = "UPDATE `student_record` SET CasteCertificate='$CasteCertificate' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Caste Certificate Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



//<------------- NonCreamySubmit ----------------->

if(isset($_POST['NonCreamySubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["Non-CreamyLayer"]["name"];
     $tmpname=$_FILES["Non-CreamyLayer"]["tmp_name"];
	 	   	 

       $NonCreamyLayer=("documents/".$filename);
	   move_uploaded_file($tmpname,$NonCreamyLayer);

	
    $update_Query = "UPDATE `student_record` SET NonCreamyLayer='$NonCreamyLayer' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Non Creamy Layer Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



//<------------- NationalSubmit ----------------->

if(isset($_POST['NationalSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["NationalityCertificate"]["name"];
     $tmpname=$_FILES["NationalityCertificate"]["tmp_name"];
	 	   	 

       $NationalityCertificate=("documents/".$filename);
	   move_uploaded_file($tmpname,$NationalityCertificate);

	
    $update_Query = "UPDATE `student_record` SET NationalityCertificate='$NationalityCertificate' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Nationality Certificate Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}





//<------------- ItiSubmit ----------------->

if(isset($_POST['ItiSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["Iti"]["name"];
     $tmpname=$_FILES["Iti"]["tmp_name"];
	 	   	 

       $Iti=("documents/".$filename);
	   move_uploaded_file($tmpname,$Iti);

	
    $update_Query = "UPDATE `student_record` SET Iti='$Iti' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Iti Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}






//<------------- eightthSubmit ----------------->

if(isset($_POST['eightthSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["8thMarkmemo"]["name"];
     $tmpname=$_FILES["8thMarkmemo"]["tmp_name"];
	 	   	 

       $EightthMarkmemo=("documents/".$filename);
	   move_uploaded_file($tmpname,$EightthMarkmemo);

	
    $update_Query = "UPDATE `student_record` SET 8thMarkmemo='$EightthMarkmemo' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("8thMarkmemo Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}






//<------------- ninethSubmit ----------------->

if(isset($_POST['ninethSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["9thMarkmemo"]["name"];
     $tmpname=$_FILES["9thMarkmemo"]["tmp_name"];
	 	   	 

       $NinethMarkmemo=("documents/".$filename);
	   move_uploaded_file($tmpname,$NinethMarkmemo);

	
    $update_Query = "UPDATE `student_record` SET 9thMarkmemo='$NinethMarkmemo' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("9thMarkmemo Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}






//<------------- ZFormSubmit ----------------->

if(isset($_POST['ZFormSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["ZForm"]["name"];
     $tmpname=$_FILES["ZForm"]["tmp_name"];
	 	   	 

       $ZForm=("documents/".$filename);
	   move_uploaded_file($tmpname,$ZForm);

	
    $update_Query = "UPDATE `student_record` SET ZForm='$ZForm' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("ZForm Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}






//<------------- McvcSubmit ----------------->

if(isset($_POST['McvcSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["Mcvc"]["name"];
     $tmpname=$_FILES["Mcvc"]["tmp_name"];
	 	   	 

       $Mcvc=("documents/".$filename);
	   move_uploaded_file($tmpname,$Mcvc);

	
    $update_Query = "UPDATE `student_record` SET Mcvc='$Mcvc' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				
				?><script>alert("Mcvc Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}





//<------------- VocSubmit ----------------->

if(isset($_POST['VocSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["Voc"]["name"];
     $tmpname=$_FILES["Voc"]["tmp_name"];
	 	   	 

       $Voc=("documents/".$filename);
	   move_uploaded_file($tmpname,$Voc);

	
    $update_Query = "UPDATE `student_record` SET Voc='$Voc' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Voc Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}




//<------------- AdharCardSubmit ----------------->

if(isset($_POST['AdharCardSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["StudentAdharCard"]["name"];
     $tmpname=$_FILES["StudentAdharCard"]["tmp_name"];
	 	   	 

       $StudentAdharCard=("documents/".$filename);
	   move_uploaded_file($tmpname,$StudentAdharCard);

	
    $update_Query = "UPDATE `student_record` SET StudentAdharCard='$StudentAdharCard' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Student AdharCard Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}






//<------------- IncomeSubmit ----------------->

if(isset($_POST['IncomeSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["IncomeCertificate"]["name"];
     $tmpname=$_FILES["IncomeCertificate"]["tmp_name"];
	 	   	 

       $IncomeCertificate=("documents/".$filename);
	   move_uploaded_file($tmpname,$IncomeCertificate);

	
    $update_Query = "UPDATE `student_record` SET IncomeCertificate='$IncomeCertificate' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Income Certificate Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}





//<------------- BirthSubmit ----------------->

if(isset($_POST['BirthSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["BirthCertificate"]["name"];
     $tmpname=$_FILES["BirthCertificate"]["tmp_name"];
	 	   	 

       $BirthCertificate=("documents/".$filename);
	   move_uploaded_file($tmpname,$BirthCertificate);

	
    $update_Query = "UPDATE `student_record` SET BirthCertificate='$BirthCertificate' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Birth Certificate Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}





//<------------- NFormSubmit ----------------->

if(isset($_POST['NFormSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["NForm"]["name"];
     $tmpname=$_FILES["NForm"]["tmp_name"];
	 	   	 

       $NForm=("documents/".$filename);
	   move_uploaded_file($tmpname,$NForm);

	
    $update_Query = "UPDATE `student_record` SET NForm='$NForm' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("N Form Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}




//<------------- InhabitantSubmit ----------------->

if(isset($_POST['InhabitantSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["InhabitantOrResidentOf"]["name"];
     $tmpname=$_FILES["InhabitantOrResidentOf"]["tmp_name"];
	 	   	 

       $InhabitantOrResidentOf=("documents/".$filename);
	   move_uploaded_file($tmpname,$InhabitantOrResidentOf);

	
    $update_Query = "UPDATE `student_record` SET InhabitantOrResidentOf='$InhabitantOrResidentOf' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("Inhabitant Or Resident Of Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}




//<------------- ProfarmaNSubmit ----------------->

if(isset($_POST['ProfarmaNSubmit']))
{
	
   $data = getPosts();
	 $filename=$_FILES["ProfarmaN"]["name"];
     $tmpname=$_FILES["ProfarmaN"]["tmp_name"];
	 	   	 

       $ProfarmaN=("documents/".$filename);
	   move_uploaded_file($tmpname,$ProfarmaN);

	
    $update_Query = "UPDATE `student_record` SET ProfarmaN='$ProfarmaN' WHERE Enrollment_Id = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				?><script>alert("ProfarmaN Updated");</script>
        <?php
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}



?>

<?php


$result=mysqli_query($conn,"SELECT Branch, First_Name,Middle_Name,Last_Name,Birthday_Day,Birthday_Month,Birthday_Year,Email_Id,Mobile_Number,Gender,Address,City,Pin_Code,State,Caste,Last_Class_Attended,Date_Of_Admission,Mother_Name,Father_Name,Place_Of_Birth,ClassVIII_Board,ClassVIII_Percentage,ClassVIII_YrofPassing,ClassIX_Board,ClassIX_Percentage,ClassIX_YrofPassing,ClassX_Board,ClassX_Percentage,ClassX_YrofPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrofPassing,Year,picsource,SchoolLeavingTransfercertificate,sscmarkmemo,HscMarkmemo,CasteCertificate,NonCreamyLayer,NationalityCertificate,Iti,8thMarkmemo,9thMarkmemo,ZForm,Mcvc,Voc,StudentAdharCard,IncomeCertificate,BirthCertificate,NForm,InhabitantOrResidentOf,ProfarmaN from student_record WHERE Enrollment_Id='$enrollment_id'");

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
<form method="Post" enctype="multipart/form-data" >
   <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h3 class="header-line" align=center>Student Registration Form </h3>
				</div>
				

    <table align="center" cellpadding = "10">
	
		<tr>
        <td><label>Photo:</label></td>
        <td><?php echo "<img src='$picsource' height='121' width='106'/>"; ?> 
		
		<input type="file" name ="upload" value="" class="btn btn-success btn-xs">
		</br>
		<input type="submit" name="UpdatePhoto" value="Update Image" button class="btn btn-primary">
		<a button class="btn btn-primary" href="download.php?filename=<?php echo $picsource;?>" >
        Download </a>
        </td>
        </tr>
	
	
	
	
		<tr>
		<td><label>ENROLLMENT ID:</label></td>
		<td><input  type="text" name="Enrollment_Id"  maxlength="10" value="<?php  
		echo $enrollment_id;
		
		?>"/>
		(only Numeric Values)
		</td>
		</tr>
		
		
		
<tr>
<td><label>Date Of Admission:</label></td>
<td><input type="date" name="Date_Of_Admission" maxlength="30" value="<?php
echo  $date_Of_Admission;
?>"/>
(dd/mm/yy)
</td>
</tr>

		
		
		
		<tr>
			<td><label>Branch:</label></td>
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


        <!----- First Name ---------------------------------------------------------->
        
		
		<br>
		<br>
		
		<tr>
		
            <td><label>FIRST NAME:</label></td>
            <td><input type="text" name="First_Name" maxlength="30" value="<?php error_reporting(E_PARSE); echo $first_name; error_reporting(E_PARSE);?>"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Middle Name ---------------------------------------------------------->
        <tr>
            <td><label>MIDDLE NAME:</label></td>
            <td><input type="text" name="Middle_Name" maxlength="30" value="<?php error_reporting(E_PARSE);
			echo $middle_name; ?>"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Last Name ---------------------------------------------------------->
        <tr>
            <td><label>LAST NAME:</label></td>
            <td><input type="text" name="Last_Name" maxlength="30" value="<?php error_reporting(E_PARSE);
			echo $last_name; ?>"/>
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
            <td><label>DATE OF BIRTH:</label></td>

            <td>
                <select name="Birthday_Day" class="w3-select w3-border" id="Birthday_Day" value=""/   >



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

                        <?php
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
            <td><label>EMAIL ID:</label></td>
            <td><input type="text" name="Email_Id" maxlength="100" value="<?php echo $email_id; ?>"/>
        </tr>

        <!----- Mobile Number ---------------------------------------------------------->
        <tr>
            <td><label>MOBILE NUMBER:</label></td>
            <td>
                <input type="text" name="Mobile_Number" maxlength="10" value="<?php echo $mobile_number; ?>" />
                (10 digit number)
            </td>

        </tr>

        <!----- Gender ----------------------------------------------------------->
        <tr>
            <td><label>GENDER:</label></td>
            <td>
                Male <input type="radio" name="Gender" value="Male"
                    <?php
                    if($gender=="Male") {
                        echo "checked";
                    }
                    ?>
                />
                Female <input type="radio" name="Gender" value="Female" 
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
            <td><label>ADDRESS:</label> <br /><br /><br /></td>
            <td><textarea name="Address" rows="4" cols="30" >
			<?php echo $address; ?>
			</textarea></td>
        </tr>

        <!----- City ---------------------------------------------------------->
        <tr>
            <td><label>CITY:</label></td>
            <td><input type="text" name="City" maxlength="30" value="<?php echo $city; ?>" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Pin Code ---------------------------------------------------------->
        <tr>
            <td><label>PIN CODE:</label></td>
            <td><input type="text" name="Pin_Code" maxlength="6" value="<?php echo $pin_code; ?>"/>
                (6 digit number)
            </td>
        </tr>

        <!----- State ---------------------------------------------------------->
        <tr>
            <td><label>STATE:</label></td>
            <td><input type="text" name="State" maxlength="30" value="<?php echo $state; ?>" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Country ---------------------------------------------------------->
        <tr>
            <td><label>COUNTRY:</label></td>
            <td><input type="text" name="Country" value="India" readonly="readonly" /></td>
        </tr>

        
<!----- Caste ---------------------------------------------------------->
<tr>
<td><label>Category & Caste:</label></td>
<td><input type="text" name="Caste" maxlength="30" value="<?php  
		echo $caste;
		?>" />
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Last_Caste_Attended ---------------------------------------------------------->
<tr>
<td><label>Last Class Attended:</label></td>
<td><input type="text" name="Last_Class_Attended" maxlength="30"  value="<?php  
		echo $last_Class_Attended;
		?>"/>
(max 30 characters a-z and A-Z)
</td>
</tr>




<!----- Mother_Name ---------------------------------------------------------->
<tr>
<td><label>Mother Name:</label></td>
<td><input type="text" name="Mother_Name" maxlength="30"  value="<?php  
		echo $mother_Name;
		?>"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<!----- Father_Name ---------------------------------------------------------->
<tr>
<td><label>Father Name:</label></td>
<td><input type="text" name="Father_Name" maxlength="30"  value="<?php  
		echo $father_Name;
		?>"/>
(max 30 characters a-z and A-Z)
</td>
</tr>


<!----- 	Place_Of_Birth ---------------------------------------------------------->
<tr>
<td><label>Place Of Birth:</label></td>
<td><input type="text" name="Place_Of_Birth" maxlength="30"  value="<?php  
		echo $place_Of_Birth;
		?>"/>
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
                        <td><label>Class VIII</label></td>
                        <td><input type="text" name="ClassVIII_Board" maxlength="30" value="<?php  error_reporting(E_PARSE); echo $classVIII_board; error_reporting(E_PARSE); ?>"/></td>
                        <td><input type="text" name="ClassVIII_Percentage" maxlength="30" value="<?php echo $classVIII_percentage; ?>"/></td>
                        <td><input type="text" name="ClassVIII_YrofPassing" maxlength="30" value="<?php echo $classVIII_yrofpassing; ?>"/></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><label>Class IX</label></td>
                        <td><input type="text" name="ClassIX_Board" maxlength="30" value="<?php echo error_reporting(E_PARSE); $classIX_board; ?>"/></td>
                        <td><input type="text" name="ClassIX_Percentage" maxlength="30" value="<?php echo $classIX_percentage; ?>" /></td>
                        <td><input type="text" name="ClassIX_YrofPassing" maxlength="30" value="<?php echo $classIX_yrofpassing; ?>"/></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td><label>Class X</label></td>
                        <td><input type="text" name="ClassX_Board" maxlength="30" value="<?php echo $classX_board; ?>" /></td>
                        <td><input type="text" name="ClassX_Percentage" maxlength="30" value="<?php echo $classX_percentage; ?>"/></td>
                        <td><input type="text" name="ClassX_YrofPassing" maxlength="30" value="<?php echo $classX_yrofpassing; ?>"/></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td><label>Class XII</label></td>
                        <td><input type="text" name="ClassXII_Board" maxlength="30" value="<?php echo $classXII_board; ?>"/></td>
                        <td><input type="text" name="ClassXII_Percentage" maxlength="30" value="<?php echo $classXII_percentage; ?>" /></td>
                        <td><input type="text" name="ClassXII_YrofPassing" maxlength="30" value="<?php echo $classXII_yrofpassing; ?>" /></td>
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
			
               <select name="Year" class="" id="Year" value=""/ style="width:200px;  >


					
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
		
		
		
<!----- Image ---------------------------------------------------------->




</br>
<tr>
<td><label>School Leaving/Transfer Certificate:</label></td>
<td>
</br>
<input type="file" name ="SchoolLeaving/TransferCertificate" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="leavingSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $SchoolLeavingTransfercertificate;?>" >
Download </a></td>
</tr>
	


 <tr>
<td><label>SSC Markmemo:</label></td>
<td>
</br>
<input type="file" name ="sscmarkmemo" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="SSCSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $sscmarkmemo;?>" >
Download </a>
</td>
</tr>

<tr>
<td><label>HSC Markmemo:</label></td>
<td>
</br>
<input type="file" name ="HscMarkmemo" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="HSCSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $HscMarkmemo;?>" >
Download </a>
</td>
</tr>


<tr>
<td><label>Caste Certificate:</label></td>
<td>
</br>
<input type="file" name ="CasteCertificate" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="CasteSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $CasteCertificate;?>" >
Download </a>
</td>
</tr>


<tr>
<td><label>Non-Creamy Layer:</label></td>
<td>
</br>
<input type="file" name ="Non-CreamyLayer" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="NonCreamySubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $NonCreamyLayer;?>" >
Download </a>
</td>
</tr>
<tr>



<td><label>Nationality Certificate:</label></td>
<td>
</br>
<input type="file" name ="NationalityCertificate" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="NationalSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $NationalityCertificate;?>" >
Download </a>
</td>
</tr>


<td><label>ITI:</label></td>
<td>
</br>
<input type="file" name ="Iti" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="ItiSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $Iti;?>" >
Download </a>
</td>
</tr>

<td><label>8th Markmemo:</label></td>
<td>
</br>
<input type="file" name ="8thMarkmemo" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="eightthSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $eightthMarkmemo;?>" >
Download </a>
</td>
</tr>

<td><label>9th Markmemo:</label></td>
<td>
</br>
<input type="file" name ="9thMarkmemo" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="ninethSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $ninethMarkmemo;?>" >
Download </a>
</td>
</tr>

<td><label>Z Form:</label></td>
<td>
</br>
<input type="file" name ="ZForm" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="ZFormSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $ZForm;?>" >
Download </a>
</td>
</tr>

<td><label>Mcvc:</label></td>
<td>
</br>
<input type="file" name ="Mcvc" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="McvcSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $Mcvc;?>" >
Download </a>
</td>
</tr>

<td><label>VOC:</label></td>
<td>
</br>
<input type="file" name ="Voc" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="VocSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $Voc;?>" >
Download </a>
</td>
</tr>

<td><label>Student AdharCard:</label></td>
<td>
</br>
<input type="file" name ="StudentAdharCard" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="AdharCardSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $StudentAdharCard;?>" >
Download </a>
</td>
</tr>

<td><label>Income Certificate:</label></td>
<td>
</br>
<input type="file" name ="IncomeCertificate" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="IncomeSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $IncomeCertificate;?>" >
Download </a>
</td>
</tr>

<td><label>Birth Certificate:</label></td>
<td>
</br>
<input type="file" name ="BirthCertificate" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="BirthSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $BirthCertificate;?>" >
Download </a>
</td>
</tr>


<td><label>N Form:</label></td>
<td>
</br>
<input type="file" name ="NForm" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="NFormSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $NForm;?>" >
Download </a>
</td>
</tr>


<td><label>Inhabitant Or Resident Of:</label></td>
<td>
</br>
<input type="file" name ="InhabitantOrResidentOf" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="InhabitantSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $InhabitantOrResidentOf;?>" >
Download </a>
</td>
</tr>

<td><label>Profarma N:</label></td>
<td>
</br>
<input type="file" name ="ProfarmaN" value="" class="btn btn-success btn-xs">
</br>
<input type="submit" name="ProfarmaNSubmit" value="Update" button class="btn btn-primary">
<a button class="btn btn-primary" href="download.php?filename=<?php echo $ProfarmaN;?>" >
Download </a>
</td>
</tr>

		
		
		<input type="hidden" name="enrollment_id" value=<?php echo $_GET['enrollment_id'];?>>

        <!----- Submit and Reset ------------------------------------------------->
        <tr>
            <td colspan="2" align="center">
			
                <input type="submit" name="update"  value="Update" button class="btn btn-primary">
                <input type="reset" class="reset_button, btn btn-danger" onclick="reset();">
            </td>
        </tr>
    </table>

</form>



</body>
</div></div>
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