<?php
include "config.php";
include_once "Common.php";
$common = new Common();
$records = $common->getAllRecords($connection);
$dataTable = '';
$dataTable .='<table class="table">
                   <thead>
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
                    <tbody>';
    if ($records->num_rows>0) {
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
            $year = $record->Year;
            $dataTable .='
            <tr>
				 <td>'.$enrollment_id.'</td>
                <td>'.$branch.'</td>
                <td>'.$first_name.'</td>
                <td>'.$middle_name.'</td>
                <td>'.$last_name.'</td>
                <td>'.$birthday_day.'</td>
                <td>'.$birthday_month.'</td>
				<td>'.$birthday_year.'</td>
                <td>'.$email_id.'</td>
                <td>'.$mobile_number.'</td>
                <td>'.$gender.'</td>
                <td>'.$address.'</td>
				<td>'.$city.'</td>
                <td>'.$pin_code.'</td>
                <td>'.$state.'</td>
                <td>'.$country.'</td>
                <td>'.$hobby_drawing.'</td>
                <td>'.$hobby_singing.'</td>
                <td>'.$hobby_dancing.'</td>
                <td>'.$hobby_cooking.'</td>
                <td>'.$hobby_other.'</td>
				<td>'.$other_hobby.'</td>
                <td>'.$classVIII_board.'</td>
                <td>'.$classVIII_percentage.'</td>
                <td>'.$classVIII_yrofpassing.'</td>
                <td>'.$classIX_board.'</td>
				<td>'.$classIX_percentage.'</td>
                <td>'.$classIX_yrofpassing.'</td>
                <td>'.$classX_board.'</td>
                <td>'.$classX_percentage.'</td>
                <td>'.$classX_yrofpassing.'</td>
				<td>'.$classXII_board.'</td>
                <td>'.$classXII_percentage.'</td>
                <td>'.$classXII_yrofpassing.'</td>
                <td>'.$year.'</td>
                
            </tr>';

            $sr++;
        }
    }
    $dataTable .= '  </tbody>
                    </table>';
    $filename = "exported-data-".date('d-m-Y H:i:s').".xls";
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename='.$filename);
    echo $dataTable;


