<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Export table data to csv file </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
    <style>
        #thead>tr>th{ color: white; }
    </style>
	
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
<div style="margin-top: 20px;padding-bottom: 20px;">
    <center>
        <img width="100" src="../avatar.jpg"/>
        <h3>Export table data to csv file in php</h3>
    </center>
</div>
<div class="container">
    <form action="export-table-script.php" method="post">
        <table class="table table-bordered table-condensed">
            <thead id="thead" style="background-color:#008000">
            <tr>
                <th>Enrollment_Id</th>
                <th>Branch</th>
                <th>First_Name</th>
                <th>Middle_Name</th>
                <th>Last_Name</th>
				<th>Birthday_Day</th>
                <th>Birthday_Month</th>
                <th>Birthday_Year</th>
                <th>Email_Id</th>
                <th>Mobile_Number</th>
				<th>Gender</th>
                <th>Address</th>
                <th>City</th>
                <th>Pin_Code</th>
                <th>State</th>
				<th>Country</th>
                <th>Hobby_Drawing</th>
                <th>Hobby_Singing</th>
                <th>Hobby_Dancing</th>
                <th>Hobby_Cooking</th>
				<th>Hobby_Other</th>
                <th>Other_Hobby</th>
                <th>ClassVIII_Board</th>
                <th>ClassVIII_Percentage</th>
                <th>ClassVIII_YrofPassing</th>
				<th>ClassIX_Board</th>
                <th>ClassIX_Percentage</th>
                <th>ClassIX_YrofPassing</th>
                <th>ClassX_Board</th>
                <th>ClassX_Percentage</th>
				<th>ClassX_YrofPassing</th>
                <th>ClassXII_Board</th>
                <th>ClassXII_Percentage</th>
                <th>ClassXII_YrofPassing</th>
                <th>Year</th>
            </tr>
            </thead>
            <tbody>
            <?php
            include "config.php";
            include_once "Common.php";
            $common = new Common();
            $records = $common->getAllRecords($connection);
            if ($records->num_rows>0){
                $sr = 1;
                while ($record = $records->fetch_object()) {
            
			$enrollment_id = $record->Enrollment_Id;
            $branch = $record->Branch;
            $first_name = $record->First_Name;
            $middle_name = $record->Middle_Name;
            $last_name = $record->Last_Name;
			$birthday_day = $record->Birthday_Day;
            $birthday_month = $record->Birthday_Month;
            $birthday_year = $record->Birthday_Year;
            $email_id = $record->Email_Id;
            $mobile_number = $record->Mobile_Number;
			$gender = $record->Gender;
            $address = $record->Address;
            $city = $record->City;
            $pin_code = $record->Pin_Code;
            $state = $record->State;
			$country = $record->Country;
            $hobby_drawing = $record->Hobby_Drawing;
            $hobby_singing = $record->Hobby_Singing;
            $hobby_dancing = $record->Hobby_Dancing;
            $hobby_cooking = $record->Hobby_Cooking;
			$hobby_other = $record->Hobby_Other;
            $other_hobby = $record->Other_Hobby;
            $classVIII_board = $record->ClassVIII_Board;
            $classVIII_percentage = $record->ClassVIII_Percentage;
            $classVIII_yrofpassing = $record->ClassVIII_YrofPassing;
			$classIX_board = $record->ClassIX_Board;
            $classIX_percentage = $record->ClassIX_Percentage;
            $classIX_yrofpassing = $record->ClassIX_YrofPassing;
            $classX_board = $record->ClassX_Board;
            $classX_percentage = $record->ClassX_Percentage;
			$classX_yrofpassing = $record->ClassX_YrofPassing;
            $classXII_board = $record->ClassXII_Board;
            $classXII_percentage = $record->ClassXII_Percentage;
            $classXII_yrofpassing = $record->ClassXII_YrofPassing;
            $year = $record->Year;?>
                    <tr>
						<td><?php echo $enrollment_id;?></td>
                        <td><?php echo $branch;?></td>
                        <td><?php echo $first_name;?></td>
                        <td><?php echo $middle_name;?></td>
                        <td><?php echo $last_name;?></td>
                        <td><?php echo $birthday_day;?></td>
                        <td><?php echo $birthday_month;?></td>
						<td><?php echo $birthday_year;?></td>
                        <td><?php echo $email_id;?></td>
                        <td><?php echo $mobile_number;?></td>
                        <td><?php echo $gender;?></td>
                        <td><?php echo $address;?></td>
						<td><?php echo $city;?></td>
                        <td><?php echo $pin_code;?></td>
                        <td><?php echo $state;?></td>
                        <td><?php echo $country;?></td>
                        <td><?php echo $hobby_drawing;?></td>
						<td><?php echo $hobby_singing;?></td>
                        <td><?php echo $hobby_dancing;?></td>
                        <td><?php echo $hobby_cooking;?></td>
                        <td><?php echo $hobby_other;?></td>
                        <td><?php echo $other_hobby;?></td>
						<td><?php echo $classVIII_board;?></td>
                        <td><?php echo $classVIII_percentage;?></td>
                        <td><?php echo $classVIII_yrofpassing;?></td>
                        <td><?php echo $classIX_board;?></td>
                        <td><?php echo $classIX_percentage;?></td>
						<td><?php echo $classIX_yrofpassing;?></td>
                        <td><?php echo $classX_board;?></td>
                        <td><?php echo $classX_percentage;?></td>
                        <td><?php echo $classX_yrofpassing;?></td>
                        <td><?php echo $classXII_board;?></td>
						<td><?php echo $classXII_percentage;?></td>
						<td><?php echo $classXII_yrofpassing;?></td>
                        <td><?php echo $year;?></td>
                        
                    </tr>
                    <?php
                    $sr++;
                }
            }
            ?>
            </tbody>
        </table>
        <button type="submit" name="exportBtn" id="exportBtn" class="btn btn-primary"style="float: right">Export Data</button>
    </form>
</div>
    <?php include('../includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="../assets/js/custom.js"></script>

</body>
</html>
