<?php

$con = mysql_connect("localhost","legalnotice","mmGr0up20!2");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());  
  }

mysql_select_db('legalnotice');
// some code

$key = "6f6feb7322998cb4779758db";// 24 bit Key
$bit_check=8;// bit amount for diff algor.

$str = time();
$tmp = md5($str);
$tmp2 = substr($tmp, 0, 24);
$iv = substr($tmp, 0, 8);// 8 bit IV

function encrypt($text,$key,$iv,$bit_check) {
	$text_num =str_split($text,$bit_check);
	$text_num = $bit_check-strlen($text_num[count($text_num)-1]);
	for ($i=0;$i<$text_num; $i++) {$text = $text . chr($text_num);}
	$cipher = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
	mcrypt_generic_init($cipher, $key, $iv);
	$decrypted = mcrypt_generic($cipher,$text);
	mcrypt_generic_deinit($cipher);
	return base64_encode($decrypted);
}

function decrypt($encrypted_text,$key,$iv,$bit_check){
	$cipher = mcrypt_module_open(MCRYPT_TRIPLEDES,'','cbc','');
	mcrypt_generic_init($cipher, $key, $iv);
	$decrypted = mdecrypt_generic($cipher,base64_decode($encrypted_text));
	mcrypt_generic_deinit($cipher);
	$last_char=substr($decrypted,-1);
	for($i=0;$i<$bit_check-1; $i++){
		if(chr($i)==$last_char){
			$decrypted=substr($decrypted,0,strlen($decrypted)-$i);
			break;
		}
	}
	return $decrypted;
}

//insert into DB 
$cc = encrypt("1234-1234-1234-1234",$key,$iv,$bit_check);

// For more examples, see mysql_real_escape_string()
//$query = "INSERT INTO user_num_data (uid, uni, num) VALUE (1, '$iv', '$cc')";
$query =  'SELECT * FROM user_num_data WHERE id = 1';
// Perform Query
$result = mysql_query($query);

$row = mysql_fetch_array($result); 

echo decrypt($row['num'], $key, $row['uni'], $bit_check);
?>