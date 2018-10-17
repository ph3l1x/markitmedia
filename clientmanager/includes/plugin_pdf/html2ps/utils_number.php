<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2014-04-21 08:00:26 
  * IP Address: 70.166.101.44
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