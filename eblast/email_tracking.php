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

$ip_address = @$REMOTE_ADDR; 
$date_time = date("Y-m-d H:i:s");
$action = $_GET['action'];
$email = $_GET['email'];
$url = $_GET['url'];
$list = $_GET['list'];
$blast = $_GET['blast'];

switch($action) {
	case 'open';
	//insert into db
	$insert="INSERT INTO tracking(ip_address,email,type,date,list,blast) VALUES('$ip_address','$email','open','$date_time', '$list', '$blast')";
	$request=@mysql_query($insert);
	
	if($request){
		header("Content-type: image/gif"); //or jpeg, etc. depending
		print file_get_contents("http://www.markitmedia.net/eblast/blank.gif");
	} else {
		print("error:");
		print_r($request);
	}
	break;
	
	case 'click';
	//insert into db
	$insert="INSERT INTO tracking(ip_address,email,type,url,date,list,blast) VALUES('$ip_address','$email','click','$url','$date_time', '$list', '$blast')";
	$request=@mysql_query($insert);
	
	if($request){
		header("location:".$url); //or jpeg, etc. depending
	} else {
		header("location:http://www.markitmedia.com");
	}
	break;
}

?>