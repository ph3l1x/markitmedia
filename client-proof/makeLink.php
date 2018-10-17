<?php 
extract($_REQUEST);

include "includes/libmail.php";

//create link based on variable
$link = 'http://www.mmweb.co/proof/?j=' . $name . '&f=' . $front . '&b=' . $back;

//setup template
$template = file_get_contents("templates/link.html");
$template = str_replace("%LINK%",$link, $template);

//write template to temporary file. Using full path for mail class.
$tmp = "/home/mmweb/tmp/" . time() . "mail.html";
$fh = fopen($tmp, 'w') or die("can't open file");
fwrite($fh, $template);
fclose($fh);

//setup template and tracking
$m = new Mail(); // create the mail
$m->From( "Markit Media <print@markitmedia.net>" );
$m->To( strtolower( $email ));
$m->CC( strtolower( $ccemail ));
$m->Subject( "Print Proof Preview (needs approval)" );
$file = $tmp;
$m->Body( "" );
$m->Attach( $file, "text/html", "inline" );

$m->Send();	// send the mail
//echo $m->Get(); // show the mail source
unlink($tmp);

//Send to Thank You Page
header('location: sent.php');
?>
