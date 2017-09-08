<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Gracias por contactarnos. Nos contactaremos lo mas pronto posible '
	);

	$body = 'Name: ' .$name. "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
    $name = @trim(stripslashes($_POST['name']));
    $email = @trim(stripslashes($_POST['email']));
    $subject = @trim(stripslashes($_POST['subject']));
    $message = @trim(stripslashes($_POST['message']));

    $email_from = $email;
    $email_to = 'andrea.farias@inecol.mx';//replace with your email


    $success = @mail($email_to, $subject, $body, "FROM: $email_from");

    echo json_encode($status);
    die;
