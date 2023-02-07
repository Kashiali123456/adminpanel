
<?php
  use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
   $con = mysqli_connect("localhost","techrpsj_customwebnlogodesigns","7j!pp_ab9nAi","techrpsj_customwebnlogodesigns");
	// Check connection
	if ($con -> connect_errno) {
	  echo "Failed to connect to Database: " .$con -> connect_error;
	  exit();
	}
		 
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message = $_POST['message'];
	 
		$insert=mysqli_query($con,"INSERT INTO `order_logo`(`name`,`email`,`phone`,`message`)Values('$name','$email','$phone','$message')");
		if($insert)
		{
			echo "You Form has been submited our consultant will contact you soon", "<br>"; 
// 			$subject = "You have received new Message";
			$msg = "Name : ".$name."<br> Email : ".$email."<br> Phone : ".$phone."<br> Message : ".$message;
		     $mail = new PHPMailer;
    // // $mail->isMail();
    $mail->SMTPDebug = 0;
    $mail->Host = 'techhunt.info';
    $mail->Port = 465;


    $mail->isSMTP();
    // $mail->SMTPAuth = true;
    // $mail->Host   = "smtp.host.tld";
    // $mail->Port       = 465;
    $mail->SMTPSecure = 'ssl';

    $mail->Username = 'kashifali@techhunt.info';
    $mail->Password = 'd^[la)z##_D_';
    $mail->setfrom('kashifali@techhunt.info', 'CustomWebNLogo Query');
    $mail->addaddress('cwnldlogo@gmail.com', 'CustomWebNLogo Query');
    $mail->Subject = 'New Contact - Customwebnlogodesigns.com';
    $mail->Body =   'Name: '.$name."\r\n". 'Email: '.$email."\r\n". 'Phone: '.$phone."\r\n". 'Message: '.$message."\r\n";
    if (!$mail->send()) {
       if ($mail -> mail_errno) {
	  echo "Mail Error " .$mail -> mail_error;
	  exit();
	}
    } else {
       echo 
          "Thank you for contacting us. You will get a reply as soon as possible.".$mail -> mail_error;
     
    }
     
		}
		
		else
		{
			echo "Please try again something went wrong";
		}
				
	}

?>
<?php header("Location: logo-design-lp"); ?>
