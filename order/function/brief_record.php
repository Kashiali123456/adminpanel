<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	session_start();
	if(isset($_GET['logosubmit']))
	{
		if(isset($_SESSION['formid']) && isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['number']) && isset($_SESSION['packageid']))
			{
				$_SESSION['logotext1'] = $_POST['text1'];
				$_SESSION['logotext2'] = $_POST['text2'];
				if($_POST['logo_type']==null)
				{
					$_SESSION['logo_type'] = "-----";
				}
				else
				{
					$_SESSION['logo_type'] = $_POST['logo_type'];
				}
				if($_POST['text3']==null)
				{
					$_SESSION['logotext3'] = "-----";
				}
				else
				{
					$_SESSION['logotext3'] = $_POST['text3'];
				}
				if($_POST['text4']==null)
				{
					$_SESSION['logotext4'] = "-----";
				}
				else
				{
					$_SESSION['logotext4'] = $_POST['text4'];
				}
				if($_POST['text5']==null)
				{
					$_SESSION['logotext5'] = "-----";
				}
				else
				{
					$_SESSION['logotext5'] = $_POST['text5'];
				}
				if($_POST['text6']==null)
				{
					$_SESSION['logotext6'] = "-----";
				}
				else
				{
					$_SESSION['logotext6'] = $_POST['text6'];
				}
				echo "done";
				exit();
			}
	}
	if(isset($_GET['websubmit']))
	{
		if(isset($_SESSION['formid']) && isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['number']) && isset($_SESSION['packageid']))
			{
				if($_POST['text1'] == null)
				{
					$_SESSION['webtext1'] = "-----";
				}
				else
				{
					$_SESSION['webtext1'] = $_POST['text1'];
				}
				if($_POST['text2'] == null)
				{
					$_SESSION['webtext2'] = "-----";
				}
				else
				{
					$_SESSION['webtext2'] = $_POST['text2'];
				}
				if($_POST['text3'] == null)
				{
					$_SESSION['webtext3'] = "-----";
				}
				else
				{
					$_SESSION['webtext3'] = $_POST['text3'];
				}
				if($_POST['text4'] == null)
				{
					$_SESSION['webtext4'] = "-----";
				}
				else
				{
					$_SESSION['webtext4'] = $_POST['text4'];
				}
				if($_POST['text5'] == null)
				{
					$_SESSION['webtext5'] = "-----";
				}
				else
				{
					$_SESSION['webtext5'] = $_POST['text5'];
				}
				if($_POST['text6'] == null)
				{
					$_SESSION['webtext6'] = "-----";
				}
				else
				{
					$_SESSION['webtext6'] = $_POST['text6'];
				}
				if($_POST['text7'] == null)
				{
					$_SESSION['webtext7'] = "-----";
				}
				else
				{
					$_SESSION['webtext7'] = $_POST['text7'];
				}
				if($_POST['text8'] == null)
				{
					$_SESSION['webtext8'] = "-----";
				}
				else
				{
					$_SESSION['webtext8'] = $_POST['text8'];
				}
				if($_POST['text9'] == null)
				{
					$_SESSION['webtext9'] = "-----";
				}
				else
				{
					$_SESSION['webtext9'] = $_POST['text9'];
				}
				if($_POST['text10'] == null)
				{
					$_SESSION['webtext10'] = "-----";
				}
				else
				{
					$_SESSION['webtext10'] = $_POST['text10'];
				}
				if($_POST['text11'] == null)
				{
					$_SESSION['webtext11'] = "-----";
				}
				else
				{
					$_SESSION['webtext11'] = $_POST['text11'];
				}
				if($_POST['text12'] == null)
				{
					$_SESSION['webtext12'] = "-----";
				}
				else
				{
					$_SESSION['webtext12'] = $_POST['text12'];
				}
				if($_POST['text13'] == null)
				{
					$_SESSION['webtext13'] = "-----";
				}
				else
				{
					$_SESSION['webtext13'] = $_POST['text13'];
				}
				if($_POST['text14'] == null)
				{
					$_SESSION['webtext14'] = "-----";
				}
				else
				{
					$_SESSION['webtext14'] = $_POST['text14'];
				}
				if($_POST['text15'] == null)
				{
					$_SESSION['webtext15'] = "-----";
				}
				else
				{
					$_SESSION['webtext15'] = $_POST['text15'];
				}
				if($_POST['text16'] == null)
				{
					$_SESSION['webtext16'] = "-----";
				}
				else
				{
					$_SESSION['webtext16'] = $_POST['text16'];
				}

				$_SESSION['webradio1'] = $_POST['radio1'];
				$_SESSION['webradio2'] = $_POST['radio2'];
				$_SESSION['webradio3'] = $_POST['radio3'];
				$_SESSION['webradio4'] = $_POST['radio4'];
				$_SESSION['webradio5'] = $_POST['radio5'];
				$_SESSION['webradio6'] = $_POST['radio6'];
				$_SESSION['webradio7'] = $_POST['radio7'];
				$_SESSION['webradio8'] = $_POST['radio8'];
				$_SESSION['webradio9'] = $_POST['radio9'];
				$_SESSION['webradio10'] = $_POST['radio10'];
				echo "done";
			}
	}
}
?>
