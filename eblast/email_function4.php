<?php

include "includes/libmail.php";

// connect to your database in the usual way
define("DBSERVER","localhost");
define("DBNAME","eblastmarkit");
define("DBUSER","eblastmarkit");
define("DBPASSWORD","Dennison1");

mysql_connect(DBSERVER, DBUSER, DBPASSWORD)
	or die("Could not connect to server");

mysql_select_db(DBNAME)
	or die("Could not connect to DB");

echo "connected";

//DB select
$select = "SELECT email_address FROM navajopto";
//$select = "SELECT email_address FROM navajopto WHERE email_address IN ('marc_medina@cox.net')";
$request = @mysql_query($select);
while ($row = mysql_fetch_array($request)) {
	echo $row["email_address"];
	
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
	$m->Attach( "templates/navajopto/Target-Poster-Letter_01.pdf", "application/pdf", "attachment" );
	
	$m->Send();	// send the mail
	echo "Mail was sent:";
	//echo $m->Get(); // show the mail source
	unlink($tmp);
}
echo "<br /><br />All emails sent";

?>