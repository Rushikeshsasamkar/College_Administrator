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
$Branch = mysqli_real_escape_string($link, $_REQUEST['Branch']);
$Email_Address = mysqli_real_escape_string($link, $_REQUEST['Email_Address']);
$User_Name = mysqli_real_escape_string($link, $_REQUEST['User_Name']);
$Password = mysqli_real_escape_string($link, $_REQUEST['Password']);



 
// attempt insert query execution
$sql = "INSERT INTO teacherres (Name, Branch,  Email_Address, User_Name, Password) VALUES ( '$Name', '$Branch','$Email_Address','$User_Name','$Password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>