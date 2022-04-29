<?php
include("config.php");
include_once("Common2.php");

if($_FILES['excelDoc']['name']) {
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            if ($count == 1) {
                continue; // skip the heading header of sheet
            }
                $enrollment_id = $connection->real_escape_string($data[0]);
                $branch = $connection->real_escape_string($data[1]);
                $first_name = $connection->real_escape_string($data[2]);
				$middle_name = $connection->real_escape_string($data[3]);
                $last_name = $connection->real_escape_string($data[4]);
				$birthday_day = $connection->real_escape_string($data[5]);
                $birthday_month = $connection->real_escape_string($data[6]);
				$birthday_year = $connection->real_escape_string($data[7]);
                $email_id = $connection->real_escape_string($data[8]);
				$mobile_number = $connection->real_escape_string($data[9]);
                $gender = $connection->real_escape_string($data[10]);
				$address = $connection->real_escape_string($data[11]);
                $city = $connection->real_escape_string($data[12]);
				$pin_code = $connection->real_escape_string($data[13]);
                $state = $connection->real_escape_string($data[14]);
				$country = $connection->real_escape_string($data[15]);
                $caste = $connection->real_escape_string($data[16]);
				$last_Class_Attended = $connection->real_escape_string($data[17]);
                $date_Of_Admission = $connection->real_escape_string($data[18]);
				$mother_Name = $connection->real_escape_string($data[19]);
                $father_Name = $connection->real_escape_string($data[20]);
				$place_Of_Birth = $connection->real_escape_string($data[21]);
                $classVIII_board = $connection->real_escape_string($data[22]);
				$classVIII_percentage = $connection->real_escape_string($data[23]);
                $classVIII_yrofpassing = $connection->real_escape_string($data[24]);
				$classIX_board = $connection->real_escape_string($data[25]);
                $classIX_percentage = $connection->real_escape_string($data[26]);
			    $classIX_yrofpassing = $connection->real_escape_string($data[27]);
                $classX_board = $connection->real_escape_string($data[28]); 
                $classX_percentage = $connection->real_escape_string($data[29]);
				$classX_yrofpassing = $connection->real_escape_string($data[30]);
				$classXII_board = $connection->real_escape_string($data[31]);
                $classXII_percentage = $connection->real_escape_string($data[32]);
			    $classXII_yrofpassing = $connection->real_escape_string($data[33]);
                $year = $connection->real_escape_string($data[34]); 
                
				
				
			
               
				
				
				
                $common = new Common();
                $SheetUpload = $common->uploadData($connection,$enrollment_id,$branch,$first_name,$middle_name,$last_name,$birthday_day,$birthday_month,$birthday_year,$email_id,$mobile_number,$gender,$address,$city,$pin_code,$state,$country,$caste,$last_Class_Attended,$date_Of_Admission,$mother_Name,$father_Name,$place_Of_Birth,$classVIII_board,$classVIII_percentage,$classVIII_yrofpassing,$classIX_board,$classIX_percentage,$classIX_yrofpassing,$classX_board,$classX_percentage,$classX_yrofpassing,$classXII_board,$classXII_percentage,$classXII_yrofpassing,$year);
        }
        if ($SheetUpload){
            echo "<script>alert('Excel file has been uploaded successfully !');window.location.href='../index.php';</script>";
        }
    }
}
