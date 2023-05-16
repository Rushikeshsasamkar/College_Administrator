<?php


$link = mysqli_connect("localhost", "root", "", "registration");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo "connected";
}
require('fpdf/fpdf.php');


class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('assets\img\logo.jpg',10,10,50);

        // Move to the right
        $this->Cell(100);

        $this->SetFont('Arial','B',10);
        $this->Cell(10,10,"Chhatrapati Shahu Maharaj Shikshan Sanstha's");

        $this->SetFont('Arial','B',19);
        $this->Ln(10);
        $this->Cell(280,10,"CSMSS COLLEGE OF POLYTECHNIC",0,0,'C');

        $this->Ln(8);
        $this->SetFont('Arial','',9);
        $this->Cell(280,10,"Kachanwadi, Paithan Road, Aurangabad(MS) - 431005",0,0,'C');
        $this->Ln(6);
        $this->Cell(280,10,"Tele: (0240) 2646402,2646404 Website: www.csmsspoly.com",0,0,'C');
        $this->Ln(6);
        $this->Cell(280,10,"Approved By AICTE and DTE(Govt. of Maha), Affiliated To MSBTE Mumbai",0,0,'C');
        $this->Ln(6);
        $this->Cell(280,10,"DTE Code: 2176   MSBTE Code:1152",0,0,'C');
        $this->Ln(6);
        $this->Line(00,80,1000,80);
        $this->Ln(25);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}






$link = mysqli_connect("localhost", "root", "", "registration");

if(isset($_POST['Submit'])) {

    $enrollment_id = mysqli_real_escape_string($link, $_REQUEST['Enrollment_Id']);
    $branch_full = mysqli_real_escape_string($link, $_REQUEST['Branch_Full']);
    $year_current = mysqli_real_escape_string($link, $_REQUEST['Year_Current']);
    $academic_year = mysqli_real_escape_string($link, $_REQUEST['Academic_Year']);


    $result = mysqli_query($link, "SELECT Branch,First_Name,Middle_Name,Last_Name,Birthday_Day,Birthday_Month,Birthday_Year,Email_Id,Mobile_Number,Gender,Address,City,Pin_Code,State,Caste,Last_Class_Attended,Date_Of_Admission,Mother_Name,Father_Name,Place_Of_Birth,ClassVIII_Board,ClassVIII_Percentage,ClassVIII_YrofPassing,ClassIX_Board,ClassIX_Percentage,ClassIX_YrofPassing,ClassX_Board,ClassX_Percentage,ClassX_YrofPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrofPassing from student_record WHERE Enrollment_Id='$enrollment_id'");


    while ($row = mysqli_fetch_array($result)) {

        $branch = $row['Branch'];
        $first_name = $row['First_Name'];
        $middle_name = $row['Middle_Name'];
        $last_name = $row['Last_Name'];
        $birthday_day = $row['Birthday_Day'];
        $birthday_month = $row['Birthday_Month'];
        $birthday_year = $row['Birthday_Year'];
        $email_id = $row['Email_Id'];
        $mobile_number = $row['Mobile_Number'];
        $gender = $row['Gender'];
        $address = $row['Address'];
        $city = $row['City'];
        $pin_code = $row['Pin_Code'];


    }
}

$all = "                           This is to verify that ".$first_name." ".$middle_name." ".$last_name." is bonafide student of our college. Studying in";
$all1 = "               ".$year_current." of ".$branch;
$all2 = "               in Academic Year ".$academic_year.".Birthday Date according to our record is ".$birthday_day." ".$birthday_month." ".$birthday_year.".";
$all3 = "               Hence Certified. ";




$pdf = new PDF();
//header
$pdf->AddPage(L,A4);
//footer page
$pdf->AliasNbPages();
$pdf->Image('logo.jpg',100,81,86);
$pdf->SetFont('Arial','',9);
$tDate = date("F j, Y");
$pdf->Cell(0, 10, 'Date : '.$tDate, 0, false, 'R', 0, '', 0, false, 'T', 'M');

$pdf->Ln(10);

$pdf->SetFont('Arial','BIU','20');
$pdf->Cell(264,10,"Bonafide Certificate",0,0,'C');
$pdf->Ln(15);

$pdf->SetFont('Times','',16);


$pdf->Cell(40,10,$all,0,1,'J');
$pdf->Cell(40,10,$all1,0,1,'J');
$pdf->Cell(40,10,$all2,0,1,'L');
$pdf->Cell(40,10,$all3,0,1,'J');


$pdf->Ln(25);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(240,10,"Principal",0,0,'R');
$pdf->Ln(5);
$pdf->Cell(240,10,"Csmss College Of Polytechnic",0,0,'R');
$pdf->Ln(5);
$pdf->Cell(240,10,"Khanchwadi, Aurangabad",0,0,'R');



ob_start();
ob_clean();
$pdf->Output('my_file.pdf','I');
ob_end_flush();
ob_clean();     //Output PDF to so;


?>