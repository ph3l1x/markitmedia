<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-01-03 10:30:21 
  * IP Address: 119.95.119.2
  */
// $Header: /cvsroot/html2ps/utils_number.php,v 1.2 2005/07/01 18:01:58 Konstantin Exp $

function arabic_to_roman($num) {
  $arabic = array(1,4,5,9,10,40,50,90,100,400,500,900,1000); 
  $roman = array("I","IV","V","IX","X","XL","L","XC","C","CD","D","CM","M");
  $i = 12;
  $result = "";
  while ($num) { 
    while ($num >= $arabic[$i]) { 
      $num -= $arabic[$i]; 
      $result .= $roman[$i];
    } 
    $i--; 
  } 

  return $result;
}
?>