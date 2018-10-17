<?php
//send emails
include_once('../includes/libmail.php');
require_once('../includes/recaptchalib.php');
$secretkey = "6Ley5TgUAAAAAEGSnTymJKfF1Y74jURzIkslOJoQ";


// honeypot for bot

if (strlen($comments) > 0)
	exit(0);


if( isset( $_POST['g-recaptcha-response'] ) ) {
	$captcha = $_POST['g-recaptcha-response'];
	if( !captcha ){
		echo 'Something went wrong. Please try back later.';
		die;
	}
	
	
	$ch = curl_init();

	curl_setopt_array($ch, [
		CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => [
			'secret' => $secretkey,
			'response' => $captcha,
			'remoteip' => $_SERVER['REMOTE_ADDR']
		],
		CURLOPT_RETURNTRANSFER => true
	]);

	$output = curl_exec($ch);
	curl_close($ch);

	$json = json_decode($output);


	
	if( $json->success == false ){
		die('spam');
	}

	extract($_REQUEST);
	
	//DB Sign Up
	// connect to your database in the usual way
	define("DBSERVER","localhost");
	define("DBNAME","markitsi_contact");
	define("DBUSER","markitsi_contact");
	define("DBPASSWORD","Psx@rsRt#xgin!");
	
	mysql_connect(DBSERVER, DBUSER, DBPASSWORD)
	or die("Could not connect to server");
	
	mysql_select_db(DBNAME)
	or die("Could not connect to DB");
	
	//DB select
	if ($newsletter) {
		//$insert = "INSERT INTO markitmedia ( '$email', '$name', '$phone')";
		$insert = "INSERT INTO  `markitsi_contact`.`markitmedia` ( `id`, `email` ,`name` ,`phone`)VALUES (null, '$email',  '$name',  '$phone')";

		mysql_query($insert) or die("Could not insert into the DB");
		
		
	}
	$m = new Mail(); // create the mail
	$m->From( "Markit Media <noreply@markitmedia.com>" );
	$m->To( 'info@markitmedia.net' );
	if ($page == 'Contact Us') {
		$m->Subject( "Markit Media Contact Inquiry" );
	} else {
		$m->Subject( "Markit Media Quote Request" );
	}
	$m->Body( 
		"Name: " . $name . "\n" .
		"Phone: " . $phone . "\n" .
		"Email: " . $email . "\n" .
		"Company: " . $company . "\n" . 
		"Page: " . $page . "\n" .
		"Comments: " . $service . "\n"  
	);

	if ($email) {
		$m->Send();	// send the mail
		header('location: ../thank-you/index.php');
	} else {
		header('location: ../contact-us');
	}
}
?>