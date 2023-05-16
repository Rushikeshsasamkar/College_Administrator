<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


$Enrollment_Id = mysqli_real_escape_string($link, $_REQUEST['Enrollment_Id']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);

$Branch = mysqli_real_escape_string($link, $_REQUEST['Branch']);
$Semister = mysqli_real_escape_string($link, $_REQUEST['Semister']);
$Roll_No = mysqli_real_escape_string($link, $_REQUEST['Roll_No']);
$Email_Address = mysqli_real_escape_string($link, $_REQUEST['Email_Address']);
$User_Name = mysqli_real_escape_string($link, $_REQUEST['User_Name']);
$Password = mysqli_real_escape_string($link, $_REQUEST['Password']);



 
// attempt insert query execution
$sql = "INSERT INTO StudentRes (Enrollment_Id, Name, Branch,Semister, Roll_No, Email_Address, User_Name,  Password) VALUES ('$Enrollment_Id', '$Name', '$Branch','$Semister','$Roll_No','$Email_Address','$User_Name','$Password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>