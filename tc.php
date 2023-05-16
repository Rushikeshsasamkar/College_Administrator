<?php
$link = mysqli_connect("localhost", "root", "", "registration");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
    echo "connected";
}
require('tcpdf/tcpdf.php');


class PDF extends TCPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('assets\img\logo.jpg',10,8,30);

        // Move to the right
        $this->Cell(62);

        $this->SetFont('Times','B',10);
        $this->Cell(200,10,"Chhatrapati Shahu Maharaj Shikshan Sanstha's");

        $this->SetFont('Times','B',19);
        $this->Ln(10);
        $this->Cell(200,10,"CSMSS COLLEGE OF POLYTECHNIC",0,0,'C');

        $this->Ln(8);
        $this->SetFont('Times','',9);
        $this->Cell(200,10,"Kachanwadi, Paithan Road, Aurangabad(MS) - 431005",0,0,'C');
        $this->Ln(6);
        $this->Cell(200,10,"Tele: (0240) 2646402,2646404 Website: www.csmsspoly.com",0,0,'C');
        $this->Ln(6);
        $this->Cell(200,10,"Approved By AICTE and DTE(Govt. of Maha), Affiliated To MSBTE Mumbai",0,0,'C');
        $this->Ln(6);
        $this->Cell(200,10,"DTE Code: 2176   MSBTE Code:1152",0,0,'C');
        $this->Ln(6);
        $this->Line(00,55,1000,55);
        $this->Ln(30);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Times','I',8);
       
    }
}








if(isset($_POST['Submit'])) {

    $enrollment_id = mysqli_real_escape_string($link, $_REQUEST['Enrollment_Id']);

    $year_current = mysqli_real_escape_string($link, $_REQUEST['Year_Current']);
    $academic_year = mysqli_real_escape_string($link, $_REQUEST['Academic_Year']);
    $toe = mysqli_real_escape_string($link, $_REQUEST['TOE']);
    $seat_no = mysqli_real_escape_string($link, $_REQUEST['Seat_No']);
    $result1 = mysqli_real_escape_string($link, $_REQUEST['Result']);


    $link = mysqli_connect("localhost", "root", "", "registration");

    $result = mysqli_query($link, "SELECT Branch,First_Name,Middle_Name,Last_Name,Birthday_Day,Birthday_Month,Birthday_Year,Email_Id,Mobile_Number,Gender,Address,City,Pin_Code,State,Caste,Last_Class_Attended,Date_Of_Admission,Mother_Name,Father_Name,Place_Of_Birth,ClassVIII_Board,ClassVIII_Percentage,ClassVIII_YrofPassing,ClassIX_Board,ClassIX_Percentage,ClassIX_YrofPassing,ClassX_Board,ClassX_Percentage,ClassX_YrofPassing,ClassXII_Board,ClassXII_Percentage,ClassXII_YrofPassing,Tc_No from student_record WHERE Enrollment_Id='$enrollment_id'");


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
        $last_Class_Attended = $row['Last_Class_Attended'];
		$caste = $row['Caste'];
		$date_Of_Admission = $row['Date_Of_Admission'];
		$mother_Name = $row['Mother_Name'];
		$father_Name = $row['Father_Name'];
		$place_Of_Birth = $row['Place_Of_Birth'];
		$tc_no = $row['Tc_No'];

    }
}

$birthall = $birthday_day." ".$birthday_month." ".$birthday_year;
$fulln = $first_name." ".$middle_name." ".$last_name;
$remarks1 = "Passed ".$year_current." in ";
$remarks2 = "    ".$branch." with ".$result1." held in";
$remarks3 = $toe."- ".$academic_year." with Seat No ".$seat_no." and cleared Diploma";

$pdf = new PDF();
//header
$pdf->AddPage();
$pdf->Image('logo.jpg',45,81,125);
//footer page

$pdf->Ln(31);
$pdf->SetFont('Times','B',11);
$tDate = date("F j, Y");
$pdf->Cell(0, 10, 'Date : '.$tDate, 0, false, 'R', 0, '', 0, false, 'T', 'M');

$pdf->Ln(16);
$pdf->SetFont('Times','B',11);
$pdf->Cell(15,10,"TC No:");
$pdf->Cell(10,10,$tc_no);

$pdf->Ln(10);
$pdf->SetFont('Times','BIU','20');
$pdf->Cell(195,10,"Leaving Certificate",0,0,'C');
$pdf->Ln(15);

$pdf->SetFont('Times','B',12);


$pdf->Cell(80,10,'        01. Name of the Student: ','c');
$pdf->SetFont('Times','',12);

$pdf->Cell(80,10,$fulln,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        02. Enrollment No: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$enrollment_id,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        03. Father's Name: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$father_Name,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        04. Mother's Name: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$mother_Name,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        05. Date of Admission: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$date_Of_Admission,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        06. Date of Birth: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$birthall,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        07. Place Of Birth:" );
$pdf->SetFont('Times','B',12);
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$place_Of_Birth,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        08. Category & Caste: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$caste,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        09. Nationality: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,'India',0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        10. Last College Attended: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$last_Class_Attended,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        12. Date of Leaving: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,$tDate,0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        12. Progress: ");
$pdf->SetFont('Times','',12);
$pdf->Cell(80,10,"Good",0,1);
$pdf->SetFont('Times','B',12);
$pdf->Cell(80,10,"        14. Remarks: ");
$pdf->SetFont('Times','',12);

$pdf->Cell(10,10,$remarks1,0,1);
$pdf->Cell(162,5,$remarks2,0,1,'R');
$pdf->Cell(178,5,$remarks3,0,1,'R');


$pdf->Ln(20);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,0,"(No change in any entry in this certificate shall be made except by the Authority issuing it,and any");
$pdf->Ln(5);
$pdf->Cell(10,0,"infragement of this requirement is liable to involve the imposition of penality such that of rustication)");
$pdf->Ln(5);
$pdf->Cell(10,0,"");



$pdf->Ln(10);

$pdf->SetFont('Times','B',14);
$pdf->Cell(60,10,"Clerk");
$pdf->Cell(90,10,"Office Superintendent");
$pdf->Cell(110,10,"Principal");
$pdf->Ln(10);


ob_start();
ob_clean();
$pdf->Output('my_file.pdf','I');
ob_end_flush();
ob_clean();     //Output PDF to so;


?>