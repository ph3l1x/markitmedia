<?php
//send emails
include_once('../includes/libmail.php');
//get vars
extract($_REQUEST);
//setup template and tracking
$m = new Mail(); // create the mail
$m->From( "Markit Media <" . $email . ">" );
$m->To( 'info@markitmedia.net' );
$m->Subject( "Markit Media Career Application" );
$m->Body( 
	"Name: " . $name . "\n" .
	"Phone: " . $phone . "\n" .
	"Email: " . $email . "\n" .
	"Applying for: " . implode(", ", $job) . "\n" . 
	"Comments: " . $service . "\n"  
);
$m->Send();	// send the mail

header('location: ../thank-you/index.php');
?>