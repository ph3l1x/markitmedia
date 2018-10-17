<?php

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$message = $_POST['message'];
$signature = $_POST['signature'];
$reply = $_POST['reply'];

//Get HTML TEMPLATE
$template = file_get_contents("templates/markit/template.html");

//setup template and tracking
$template2 = str_replace("%EMAIL%",$email, $template);
$template2 = str_replace("%NAME%",$fname . ' ' . $lname, $template2);
$template2 = str_replace("%MESSAGE%",$message, $template2);
$template2 = str_replace("%SIGNATURE%",$signature, $template2);
$msg = $template2;

// take weight off the server CPU by waiting 10 seconds between each mailout.
//sleep(5);
$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers.= "From: MarkIT Media <$reply>\n";
if (!mail($email,$subject = "MarkIT Media",$message = $msg, $headers)) {
	echo "ERROR : Mail has not been sent to " .$email . "<br />\n";
} else {
	echo"Success";
}

?>