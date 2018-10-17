<?php

include "includes/libmail.php";
	
//setup template
$template = file_get_contents("templates/error.html");
$template = str_replace("%JOB%",$_POST['job'], $template);
$template = str_replace("%FRONT%",$_POST['front'], $template);
$template = str_replace("%BACK%",$_POST['back'], $template);
$template = str_replace("%COMMENTS%",$_POST['comment'], $template);

//write template to temporary file. Using full path for mail class.
$tmp = "/home/mmweb/tmp/" . time() . "mail.html";
$fh = fopen($tmp, 'w') or die("can't open file");
fwrite($fh, $template);
fclose($fh);

//setup template and tracking
$m = new Mail(); // create the mail
$m->From( "Markit Media <donotreply@markitmedia.com>" );
$m->Organization( "Print Job Approved" );
$m->To( strtolower( 'info@markitmedia.com' ));
$m->Subject( "Print Job - Needs Corrections." );
$file = $tmp;
$m->Body( "" );
$m->Attach( $file, "text/html", "inline" );

$m->Send();	// send the mail
//echo $m->Get(); // show the mail source
unlink($tmp);

//Send to Thank You Page
header('location: thank-you-corrections.php');

?>