
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
 <?php include('includes/header.php');?>
<!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /
 
 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Student List</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">Student List</h2><br />
   
  
   <div class="panel panel-default">
                        <div class="panel-heading">
                          Active Students
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" class="table table-striped table-bordered table-hover">
  
  
    


   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="SEARCH BY STUDENT DETAILS" class="form-control" />
    </div>
  
   <br/>
   <div id="result"></div>
  
 </body>
 
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"ReadStudentList.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

<?php } ?>