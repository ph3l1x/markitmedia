<?php
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

//Get HTML TEMPLATE
$template = file_get_contents("templates/navajopto/template.html");

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers.= "From: Navajo PTO <donotreply@navajopto.org>\n";
$headers.= "Reply-To: donotreply@navajopto.org";

//DB select
//$select = "SELECT email_address as email FROM navajopto";
$select = "SELECT email_address as email FROM navajopto WHERE email_address IN ('marc_medina@cox.net')";
$request = @mysql_query($select);
while ($row = mysql_fetch_array($request)) {
	//setup template and tracking
	$template2 = str_replace("%EMAIL%",$row['email'], $template);
	$msg = $template2;
	$msg.= '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<body>
	<img src="http://www.markitmedia.net/eblast/email_tracking.php?action=open&email='.$row['email'].'&list=navajopto" width="10" height="10" alt="tracking" border="0" />
	</body>
	</html>';
	// take weight off the server CPU by waiting 10 seconds between each mailout.
	//sleep(10);
	if (!mail($row["email"],
	$subject = "Buffalo Blast Newsletter",
	$message = $msg, $headers))
	
	{
	
	echo "ERROR : Mail has not been sent to " .$row["id"] . ", " . $row["email"] . "<br />\n";
	echo "email does not exist.  Delete email";
	} else {
	echo $row["email"] . "<br />\n";
	}
}

?>