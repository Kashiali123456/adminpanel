
<?php

  use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';
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
		$re_design = $_POST['re_design'];
		$logo=$_POST['logo'];
		$text1=$_POST['text1'];
		$tag_line=$_POST['tag_line'];
		$description_text = $_POST['description_text'];
		$design_concept=$_POST['design_concept'];
		$website_address=$_POST['website_address'];
		$description=$_POST['description'];
		$amout = $_POST['amout'];
		$country=$_POST['country'];
		$postal_code = $_POST['postal_code'];
		$city=$_POST['city'];
		$telephone=$_POST['telephone'];
		$terms_conditions = $_POST['terms_conditions'];
	    
		$insert=mysqli_query($con,"INSERT INTO `order`( `name`, `email`, `phone`, `re_design`, `logo`, `text1`, `tag_line`, `description_text`, `design_concept`, `website_address`,`description`, `amout`,  `country`, `postal_code`, `city`, `telephone`, `terms_conditions`)
		Values('$name','$email','$phone','$re_design', '$logo', '$text1', '$tag_line','$description_text', '$design_concept', '$website_address', '$description', '$amout',  '$country', '$postal_code', '$city', '$telephone', '$terms_conditions' )");
		if($insert)
		{
			echo "You Form has been submited our consultant will contact you soon", "<br>"; 
// 			$subject = "You have received new Message";
			$msg =  'Description: '.$description."\r\n". 'Phone: '.$telephone."\r\n". 'Amount: '.$amout."\r\n". 'Country: '.$country."\r\n". 'Postal Code: '.$postal_code."\r\n". 'Telephone: '.$telephone."\r\n". 'Term & Condition: '.$terms_conditions."\r\n";
		    
		     
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
    $mail->addaddress('info@customwebnlogodesigns.com', 'CustomWebNLogo Query');
    $mail->Subject = 'Service Order - Customwebnlogodesigns.com';
   
    $mail->Body = 'Name:' .$name."\r\n". 'Email: ' .$email."\r\n". 'Phone: ' .$phone."\r\n". 'IS THIS A RE-DESIGN OR A NEW LOGO?:'.$re_design."\r\n". 
    'LOGO TYPOGRAPHY: '.$logo."\r\n".'BRANDNAME IN LOGO: '.$text1."\r\n". 'LOGO TAGLINE: '.$tag_line."N/A"."\r\n". 
    'THINGS TO AVOID: '.$design_concept."\r\n".'WEBSITE URL:' .$website_address."\r\n". 'Description: ' .$description."\r\n". 'Amount: ' .$amout."\r\n". 'Country: ' .$country."\r\n". 'Postal Code: ' .$postal_code."\r\n". 'Telephone: ' .$telephone."\r\n". 'Term & Condition: ' .$terms_conditions."\r\n";
      
    if (!$mail->send()) {
       if ($mail -> mail_errno) {
	  echo "Mail Error " .$mail -> mail_error;
	  exit();
	}
    } else {
       echo 'The email message was sent.'.$mail->ErrorInfo;
    }
		     }
		
		
		else
		{
			echo "Please try again something went wrong";
		}
				
	
}
?>
  <?php header("Location: thank-you"); ?>
 