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
    <title>Admin Profile</title>
	
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

<?php

$enrollment_id=$_GET['enrollment_id'];
$conn = new mysqli('localhost', 'root','', 'registration');

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['User_Name'];
	$posts[1] = $_POST['Name'];
  
	$posts[2] = $_POST['Email_Address'];
    $posts[3] = $_POST['Mobile_No'];
    $posts[4] = $_POST['picsource'];
  $posts[5] = $_POST['Password'];
  
    
    

    return $posts;
}



   // Edit
if(isset($_POST['update']))
{
	
   $data = getPosts();
	 $filename=$_FILES["upload"]["name"];
     $tmpname=$_FILES["upload"]["tmp_name"];
	 	   	 

       $folder=("./images/".$filename);
	   move_uploaded_file($tmpname,$folder);

	
    $update_Query = "UPDATE `adminres` SET  Name='$data[1]',Email_Address='$data[2]',Mobile_No='$data[3]',picsource='$folder',Password='$data[5]' WHERE User_Name = '$data[0]'";
   

    
	try{
        $update_Result = mysqli_query($conn, $update_Query);	
        
        if($update_Result)
        {
            if(mysqli_affected_rows($conn) > 0)
            {
				
				echo "Record Updated";
        
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
	
	
	header("location:UserRegistrationList.php");
}



?>

<?php


$result=mysqli_query($conn,"SELECT Branch, First_Name,Middle_Name,Last_Name,Birthday_Day,Birthday_Month,Birthday_Year,Email_Id,Mobile_Number,Gender,Address,City,Pin_Code,State,Hobby_Drawing,Hobby_Singing,Hobby_Dancing,Hobby_Cooking,Hobby_Other,Other_Hobby,ClassVIII_Board,ClassVIII_Percentage,ClassVIII_YrofPassing,ClassIX_Board,ClassIX_Percentage,ClassIX_YrofPassing,ClassX_Board,ClassX_Percentage,ClassX_YrofPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrofPassing,Year,picsource from student_record WHERE Enrollment_Id='$enrollment_id'");

while ($row = mysqli_fetch_array($result)){
	
	$picsource=$row['picsource'];
	$Name=$row['Name'];
	$Email_Address=$row['Email_Address'];
	$Mobile_No=$row['Mobile_No'];
	$User_Name=$row['User_Name'];
	$Password=$row['Password'];
		
}








?>

<body>

<form method="Post" enctype="multipart/form-data" >
<table border="0" align="center">
	<tbody>


		<tr>
		<td>Photo:</td>
		<td>
		<?php echo "<img src='$picsource' height='100' width='100'/>"; ?>
        (Image)
		<input type="file" name ="uploadfile" value=""/>
		</td>
		</tr>


		<tr>
			<td><label for="Name">Name: </label></td>
			<td><input id="Name" maxlength="50" name="Name" type="text" value="<?php  
		echo $Name;
		
		?>" /></td>
		</tr>



		<tr>
			<td><label for="Email_Address">Email_Address:</label></td>
			<td><input id="Email_Address" maxlength="50" name="Email_Address" type="text" value="<?php  
		echo $Email_Address;
		
		?>" /></td>
		</tr>

        <tr>
            <td><label for="Mobile_No">Mobile No:</label></td>
            <td><input id="Mobile_No" maxlength="10" name="Mobile_No" type="text" value="<?php  
		echo $Mobile_No;
		
		?>"/></td>
        </tr>

		<tr>
			<td><label for="User_Name">User_Name:</label></td>
			<td><input id="User_Name" maxlength="50" name="User_Name" type="text"value="<?php  
		echo $User_Name;
		
		?>" /></td>
		</tr>

		

		<tr>
			<td><label for="Password">Password:</label></td>
			<td><input id="Password" maxlength="50" name="Password"
				type="password" /></td>
		</tr>




       <!----- Submit and Reset ------------------------------------------------->
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="update"  value="Update"/>
                
            </td>
        </tr>
    </table>

</form>



</body>
</html>
<?php } ?>