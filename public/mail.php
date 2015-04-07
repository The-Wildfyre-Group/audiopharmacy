<?php
	$name = '';
	$email = ''; 
	$tel = '';
	$message = '';
	 
	if(isset($_POST['email'])) {        
		$name = $_POST['name'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$message = $_POST['message'];

		if(get_magic_quotes_gpc()) {
			$message = stripslashes($message);
		}		
		 $address = "hello@hello.com"; //replace our mail address with yours
		 $subject = 'Bandit: from: '.$name;
		 $body = "Message from $name:\r\n\n";
		 $content = "\"$message\"\r\n\n";
		 $reply = "You can contact $name via email, $email, or telephone: $tel";
		 $msg = $body . $content . $reply;
		 if(mail($address, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n","-f $address"))
		 {    
			die( json_encode(array('status' => true, 'msg' => '<p>Message Sent Successfully!<p>'))); //customize success message
		 }
		 else
		 {
			die( json_encode(array('status' => false, 'msg' => '<p>Message not sent!<p>'))); //customize faliure message
		 }
	}
	else
	{
		die( json_encode(array('status' => false, 'msg' => '<p>Message not sent!<p>'))); //customize faliure message
	}
?>