<?php
//send emails
include_once('../includes/libmail.php');
//get vars
extract($_REQUEST);

//DB Sign Up
// connect to your database in the usual way
define("DBSERVER","localhost");
define("DBNAME","eblastmarkit");
define("DBUSER","eblastmarkit");
define("DBPASSWORD","Dennison1");

mysql_connect(DBSERVER, DBUSER, DBPASSWORD)
	or die("Could not connect to server");

mysql_select_db(DBNAME)
	or die("Could not connect to DB");

//DB select
if ($newsletter) {
	$insert = "INSERT INTO markitmedia (email, fname, phone) VALUES ('$email', '$name', '$phone')";
	$request = @mysql_query($insert);
}
$m = new Mail(); // create the mail
$m->From( "Markit Media <" . $email . ">" );
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

if ($page) {
	$m->Send();	// send the mail
	header('location: ../thank-you/index.php');
} else {
	header('location: ../contact-us');
}
?>