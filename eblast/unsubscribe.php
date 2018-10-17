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


$email = $_GET['email'];
$list = $_GET['list'];

//insert into db
$delete="DELETE FROM $list WHERE email_address = '$email'";
$request=@mysql_query($delete);


if($request){
	print("Thank you, you have been unsubscribed");
} else {
	print("Please allow time for you to be unsubcribed");
	mail('info@markitmedia.net', 'email list unsubscribe', 'please unsubcribe ' . $email);
}

?>