<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);

$Email_Address = mysqli_real_escape_string($link, $_REQUEST['Email_Address']);
$Mobile_No = mysqli_real_escape_string($link, $_REQUEST['Mobile_No']);
$User_Name = mysqli_real_escape_string($link, $_REQUEST['User_Name']);
$Password = mysqli_real_escape_string($link, $_REQUEST['Password']);

$filename=$_FILES["uploadfile"]["name"];
$tmpname=$_FILES["uploadfile"]["tmp_name"];

$folder="images/".$filename;

move_uploaded_file($tmpname,$folder);




 
// attempt insert query execution
$sql = "INSERT INTO adminres (Name,  Email_Address,Mobile_No, User_Name, Password,picsource) VALUES ( '$Name','$Email_Address','$Mobile_No','$User_Name','$Password','$folder')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>