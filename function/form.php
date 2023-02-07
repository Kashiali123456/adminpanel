<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	require_once("../admin_panel/connection.php");
	if(isset($_GET['quote']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$country_code=str_replace(":  ", " : +", $_GET['quote']);
		$phone=$country_code." ".$_POST['phone'];
		$insert=mysqli_query($con,"insert into quote (name,email,phone,mark_read,date) values('".$name."','".$email."','".$phone."','false','".date("d/m/Y")."')");
		if($insert)
		{
			echo "You quote has been submited our consultant will contact you soon";
			$subject = "You have received new quote";
			$msg = "Name : ".$name."<br> Email : ".$email."<br> Phone : ".$phone;
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
    $mail->addaddress('customwebnlogodesigns.us@gmail.com', 'CustomWebNLogo Query');
    $mail->Subject = 'Service Query - Customwebnlogodesigns.com';
    $mail->Body =   'Name: '.$name."\r\n". 'Email: '.$email."\r\n". 'Phone: '.$phone."\r\n";
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
	if(isset($_GET['sub']))
	{
		$check = mysqli_query($con,"select * from subscribers where email='".$_POST['email']."'");
		if(mysqli_num_rows($check) == 0)
		{
			$insert=mysqli_query($con,"insert into subscribers (email,date) values ('".$_POST['email']."','".date("d/m/Y")."')");
			if($insert)
			{
				// echo "Thank you for subscribe now you'll get all the new updates related our website.";
				$subject = "Subscriber";
				$msg = "New Subscriber : ".$_POST['email'];
				
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
    $mail->addaddress('customwebnlogodesigns.us@gmail.com', 'CustomWebNLogo Query');
    $mail->Subject = 'Service Query - Customwebnlogodesigns.com';
    $mail->Body =   'Email: '.$_POST['email'];
    if (!$mail->send()) {
       if ($mail -> mail_errno) {
	  echo "Mail Error " .$mail -> mail_error;
	  exit();
	}
    } else {
       echo 'THANK YOU FOR YOUR SUBSCRIPTION!..'.$mail->ErrorInfo;
    }
     
		}
		
		else
		{
			echo "You are already our subscriber";
		}
	
			?>
			<?php
			//API Details
            $apiKey = 'a1b95404f30629d7e5cd8946379cf22b-us21';
            $listId = 'e561116d70';
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
            $email = $_POST['email'];
        
            if($email) {
        //Create mailchimp API url
        $memberId = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;
        // 	echo "THANK YOU FOR YOUR SUBSCRIPTION!.";
        //Member info
        
        $data = array(
            'email_address'=>$email,
            'status' => 'subscribed',
            // 'merge_fields'  => [
            //     'FNAME'     => $firstname,
            //     'LNAME'     => $lastname
            // ]
            );
        $jsonString = json_encode($data);

        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
    
    }
}


			
			else
			{
				echo "Please try again something went wrong";
			}
			}
		else
		{
			echo "You are already our subscriber";
		
		
		}
		}
}


?>

