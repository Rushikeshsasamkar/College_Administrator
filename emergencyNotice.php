
<?php
 
  
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';

  // Include autoload.php file
  require 'phpmailer/PHPMailerAutoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
	$gmail = $_POST['Gmail'];
	$password = $_POST['password'];
    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = $gmail;
      // Gmail Password
      $mail->Password = $password;
     // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom($gmail);
      // Recipient Email ID where you want to receive emails
      $mail->addAddress($gmail);

      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
	  if($mail->Send()){
	  }
	  else{
		echo "Email Not Sent";  
		  
	  }
      $output = '<div class="alert alert-success">
                  <h5>Mail is Sent Sucessfuly!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>

<?php
session_start();
error_reporting(0);
include('connection.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:log.php');
}
else{?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>College Emergency Mail System</title>
  
<?php include('includes/header.php');?>
<!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /

	
</head>
  <div class="container">
        <div class="card border-danger shadow">
         
            <h3 class="header-line" align=center>College Emergency Mail System</h3>
          </div>
          <div class="card-body px-4">
            <form action="#" method="POST">
              <div class="form-group">
                <?= $output; ?>
              </div>
			  <div class="form-group">
                <label for="name">Using Mail As</label>
                <input type="text" name="Gmail" id="Gmail" value="Csmss@gmail.com" class="form-control" placeholder="Enter Email" required>
              </div>
			  <div class="form-group">
                <label for="name">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              </div>
			  
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject"
                  required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message" <?php echo "Dear Student We are Here To inform you";?>
                  required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</html>
<?php } ?>	
