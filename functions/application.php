<?php

//send emails
include_once('../includes/libmail.php');
require_once('../includes/recaptchalib.php');


$secretkey = "6Ley5TgUAAAAAEGSnTymJKfF1Y74jURzIkslOJoQ";


if( isset( $_POST['g-recaptcha-response'] ) ) {
    
   $captcha = $_POST['g-recaptcha-response'];
   if( !captcha ){
    echo 'Something went wrong. Please try back later.';
    die;
    }


$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => [
        'secret' => $secretkey,
        'response' => $captcha,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ],
    CURLOPT_RETURNTRANSFER => true
]);

$output = curl_exec($ch);
curl_close($ch);

$json = json_decode($output);


if( $json->success == false ){
    die('spam');
}
extract($_REQUEST);

//setup template and tracking

$m = new Mail(); // create the mail

$m->From( "Markit Media <noreply@markitmedia.com>" );

$m->To( 'info@markitmedia.net' );

$m->Subject( "Markit Media Career Application" );

$m->Body( 

	"Name: " . $name . "\n" .

	"Phone: " . $phone . "\n" .

	"Email: " . $email . "\n" .

	"Applying for: " . implode(", ", $job) . "\n" . 

	"Comments: " . $service . "\n"  

);

$m->Send();	// send the mail



header('location: ../thank-you/index.php');
} else {
    header('location: http://markitmedia.com');
    

}

?>