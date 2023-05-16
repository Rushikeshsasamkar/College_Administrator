<?php


class Common
{
  public function uploadData($connection,$enrollment_id,$branch,$first_name,$middle_name,$last_name,$birthday_day,$birthday_month,$birthday_year,$email_id,$mobile_number,$gender,$address,$city,$pin_code,$state,$country,$hobby_drawing,$hobby_singing,$hobby_dancing,$hobby_cooking,$hobby_other,$other_hobby,$classVIII_board,$classVIII_percentage,$classVIII_yrofpassing,$classIX_board,$classIX_percentage,$classIX_yrofpassing,$classX_board,$classX_percentage,$classX_yrofpassing,$classXII_board,$classXII_percentage,$classXII_yrofpassing,$year)
  {
      $mainQuery = "INSERT INTO student_record SET Enrollment_Id='$enrollment_id',Branch='$branch', First_Name='$first_name',Middle_Name='$middle_name',Last_Name='$last_name',Birthday_Day='$birthday_day',Birthday_Month='$birthday_month',Birthday_Year='$birthday_year',Email_Id='$email_id',Mobile_Number='$mobile_number',Gender='$gender',Address='$address',City='$city',Pin_Code='$pin_code',State='$state',Country='$country',Hobby_Drawing='$hobby_drawing',Hobby_Singing='$hobby_singing',Hobby_Dancing='$hobby_dancing',Hobby_Cooking='$hobby_cooking',Hobby_Other='$hobby_other',Other_Hobby='$other_hobby',ClassVIII_Board='$classVIII_board',ClassVIII_Percentage='$classVIII_percentage',ClassVIII_YrofPassing='$classVIII_yrofpassing',ClassIX_Board='$classIX_board',ClassIX_Percentage='$classIX_percentage',ClassIX_YrofPassing='$classIX_yrofpassing',ClassX_Board='$classX_board',ClassX_Percentage='$classX_percentage',ClassX_YrofPassing='$classX_yrofpassing',ClassXII_Board='$classXII_board',ClassXII_Percentage='$classXII_percentage',ClassXII_YrofPassing='$classXII_yrofpassing',Year='$year'";
      $result1 = $connection->query($mainQuery) or die("Error in main Query".$connection->error);
      return $result1;
  }
}
