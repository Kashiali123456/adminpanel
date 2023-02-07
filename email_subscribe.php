
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
		  //echo"dgdfhgfjgh";
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		$insert=mysqli_query($con,"INSERT INTO `order_email`(`email`)Values('$email')");
		if($insert)
		{
			echo "You Form has been submited our consultant will contact you soon", "<br>"; 
// 			$subject = "You have received new Message";
			$msg = "New Subscriber : ".$email;
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
        	echo "THANK YOU FOR YOUR SUBSCRIPTION!.";
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
       
        //Collecting the status
        switch ($httpCode) {
            case 200:
                $msg = 'Success, newsletter subcribed using mailchimp API';
                break;
            case 214:
                $msg = 'Already Subscribed';
                break;
            default:
                $msg = 'Oops, please try again.[msg_code='.$httpCode.']';
                break;
        }
    

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




?>

<?php header("Location: logo-design-lp"); ?>
