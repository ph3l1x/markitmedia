<?php
//send emails
include_once('../includes/libmail.php');

//setup template
	$template = file_get_contents("templates/navajopto/template.html");
	$template = str_replace("%EMAIL%",strtolower($row["email_address"]), $template);
	
	//write template to temporary file. Using full path for mail class.
	$tmp = "/home/mmweb/tmp/" . time() . "mail.html";
	$fh = fopen($tmp, 'w') or die("can't open file");
	fwrite($fh, $template);
	fclose($fh);
	
	//setup template and tracking
	$m = new Mail(); // create the mail
	$m->From( "Navajo PTO <donotreply@navajopto.org>" );
	$m->Organization( "Navajo PTO" );
	$m->To( strtolower($row["email_address"]) );
	$m->Subject( "Buffalo Blast Newsletter" );
	$file = $tmp;
	$m->Body( "" );
	$m->Attach( $file, "text/html", "inline" );
	//$m->Attach( "templates/navajopto/Childhelp-Speaker-Series-Media-Advisory.pdf", "application/pdf", "attachment" );
	
	$m->Send();	// send the mail
	echo "Mail was sent:";
	//echo $m->Get(); // show the mail source
	unlink($tmp);
?>