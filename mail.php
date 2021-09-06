<?php require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'cigarsPHP@gmail.com';
$mail->Password = '315abba34';
$mail->setFrom($_POST['email']);
$mail->addAddress('cigarsPHP@gmail.com');
$mail->Subject = 'Hello from PHPMailer!';
$mail->Body = $_POST['message']."        ".$_POST['email'];
   $array = get_object_vars($mail);
//send the message, check for errors
   
    if (!$mail->send()) {
            echo "ERROR: " . $mail->ErrorInfo;
}  else if (isset($_POST['submit'])){
            echo "Thank you! Your message has been sent";
            
}


/*	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check Email
			if(c){
				// Failed
				$msg = 'Please use a valid email';
				
			} else {
				// Passed
				$toEmail = 'cigarsPHP.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';
                }}
				/* Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}*/
?>
