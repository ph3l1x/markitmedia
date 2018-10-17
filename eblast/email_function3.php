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
//$select = "SELECT email FROM markitmedia where length(email) > 1";
$select = "SELECT email FROM markitmedia WHERE id > 109";
$request = @mysql_query($select);
while ($row = mysql_fetch_array($request)) {
	echo $row["email"];
	//setup template and tracking
	$m = new Mail(); // create the mail
	$m->From( "MarkIT Media <donotreply@markitmedia.net>" );
	$m->Organization( "MarkIT Media" );
	$m->To( $row["email"] );
	$m->Subject( "We Moved" );
	$file = "templates/markit/template.html";
	$m->Body( "" );
	$m->Attach( $file, "text/html", "inline" );
	
	$m->Send();	// send the mail
	echo "Mail was sent:";
	//echo $m->Get(); // show the mail source
}

?>