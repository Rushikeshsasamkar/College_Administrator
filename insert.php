<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "registration");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


$Id = mysqli_real_escape_string($link, $_REQUEST['Id']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Course = mysqli_real_escape_string($link, $_REQUEST['Course']);
$Branch = mysqli_real_escape_string($link, $_REQUEST['Branch']);
$Roll_No = mysqli_real_escape_string($link, $_REQUEST['Roll_No']);
$Email_Address = mysqli_real_escape_string($link, $_REQUEST['Email_Address']);
$User_Name = mysqli_real_escape_string($link, $_REQUEST['User_Name']);
$About_Us = mysqli_real_escape_string($link, $_REQUEST['About Us']);
$Password = mysqli_real_escape_string($link, $_REQUEST['Password']);



 
// attempt insert query execution
$sql = "INSERT INTO persons (Id, Name, Course, Branch, Roll_No, Email_Address, User_Name, About_Us, Password) VALUES ('$Id', '$Name', '$Course', '$Branch','$Roll_No','$Email_Address','User_Name','About_Us','Password',)";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>