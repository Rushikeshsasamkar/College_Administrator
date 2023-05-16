




<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "registration");
$output = '';






if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM student_record 
  WHERE Enrollment_Id LIKE '%".$search."%'
  OR Branch LIKE '%".$search."%' 
  OR First_Name LIKE '%".$search."%' 
  OR Middle_Name LIKE '%".$search."%' 
  OR Last_Name LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM student_record ORDER BY Enrollment_Id
 ";

    /*$query = "SELECT picsource,Enrollment_Id,First_Name,Middle_Name,Last_Name,Birthday_Day,Birthday_Month,Birthday_Year,Email_Id,Mobile_Number,Gender,Address,City,Pin_Code,State,Hobby_Drawing,Hobby_Singing,Hobby_Dancing,Hobby_Cooking,Hobby_Other,Other_Hobby,ClassVIII_Board,ClassVIII_Percentage,ClassVIII_YrofPassing,ClassIX_Board,ClassIX_Percentage,ClassIX_YrofPassing,ClassX_Board,ClassX_Percentage,ClassX_YrofPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrofPassing,Poly_1st,Poly_2end from student_record ";*/

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table table-striped table-bordered table-hover">
  <div class="panel-body">
                            <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th class="center">Enrollment Number </th>
	 <th class="center">Date Of Admission</th>
	 <th class="center">Branch</th>
     <th class="center">First Name</th>
     <th class="center">Middle Name</th>
     <th class="center">Last Name</th>
	  <th class="center">Operation</th>
    </tr>
 ';
 
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   
   <tr class="Center">
    <td class="center">'.$row["Enrollment_Id"].'</td>
	<td class="center">'.$row["Date_Of_Admission"].'</td>
	<td class="center">'.$row["Branch"].'</td>
    <td class="center">'.$row["First_Name"].'</td>
    <td class="center">'.$row["Middle_Name"].'</td>
    <td class="center">'.$row["Last_Name"].'</td>
    <td class="center"><a href=updateStu.php?enrollment_id='.$row["Enrollment_Id"].' <button class="btn btn-primary"><i class="fa fa-edit ">Edit </a></td>
     <td class="center"><a href=View1.php?enrollment_id='.$row["Enrollment_Id"].' class="btn btn-info">View</td>
     <td class="center"><a href=DeleteStudentList.php?enrollment_id='.$row["Enrollment_Id"].' class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</td>
                

   </tr>
   
  ';
 }

 echo $output;
}
else
{
 echo 'Record Not Found';
}

?>



<script type="text/javascript">



    function deletemember(id)
        {
                var r = confirm("Are you sure you want to delete");
                if(r == true)
                {
                     $.ajax({
                               type:"GET",
                               url:"delete_members.php",
                               data: ({id:id}),
                               success: function(data)
                               {
                                   window.location="yourphppage.php";
                                }
                         });

                }
                else
                {
                     window.location="index.php";           
                }
    }

</script>



