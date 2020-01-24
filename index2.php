<?php

	require_once('PHPMailer/PHPMailerAutoload.php');

	if (isset($_POST['submit'])){

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = '465';
		$mail->isHTML();
		$mail->Username = 'newtestdr@gmail.com';
		$mail->Password = '0771878984';
		$mail->SetFrom($email);
		$mail->Subject = $subject;
		$mail->Body = "Name: {$fname} {$lname}. <br> Email: {$email} <br><br> {$message}";
		$mail->AddAddress('yasithan.donz@gmail.com');

		$mail->Send();

		header("Location:https://yasithan.github.io/studio/contact.html");
	}

?>