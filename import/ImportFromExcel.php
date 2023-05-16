<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Excel(CSV) file with PHP - CodingBirdsOnline.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">

    <?php include('../includes/header.php');?>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /


</head>
<body>
<div class="jumbotron text-center">
    <h2 align=center>Upload Excel(.CSV) file</h2>
    
</div>

<div class="container" >
    <form action="excel-script.php" method="post" enctype="multipart/form-data">
       <div class="row">
           <div class="col-md-4">
               <div class="form-group">
                   <input type="file" name="excelDoc" id="excelDoc" class="form-control" />
               </div>
           </div>
           <div class="col-md-4">
               <input type="submit" name="uploadBtn" id="uploadBtn" value="Upload Excel" class="btn btn-success" />
           </div>
       </div>
    </form>
</div>
</body>

<?php include('../includes/footer.php');?>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY  -->
<script src="../assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="../assets/js/bootstrap.js"></script>
<!-- CUSTOM SCRIPTS  -->
<script src="../assets/js/custom.js"></script>
</html>
