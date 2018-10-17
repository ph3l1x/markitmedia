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
// $Header: /cvsroot/html2ps/css.background.repeat.inc.php,v 1.8 2006/07/09 09:07:44 Konstantin Exp $

define('BR_REPEAT',0);
define('BR_REPEAT_X',1);
define('BR_REPEAT_Y',2);
define('BR_NO_REPEAT',3);

class CSSBackgroundRepeat extends CSSSubFieldProperty {
  function get_property_code() {
    return CSS_BACKGROUND_REPEAT;
  }

  function get_property_name() {
    return 'background-repeat';
  }

  function default_value() { return BR_REPEAT; }

  function parse($value) {
    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    // Note that we cannot just compare $value with these strings for equality, 
    // as 'parse' can be called with composite 'background' value as a parameter,
    // say, 'black url(picture.gif) repeat', instead of just using 'repeat'

    // Also, note that 
    // 1) 'repeat-x' value will match 'repeat' term 
    // 2) background-image 'url' values may contain these values as substrings
    // to avoid these problems, we'll add spaced to the beginning and to the end of value,
    // and will search for space-padded values, instead of raw substrings
    $value = " ".$value." ";
    if (strpos($value, ' repeat-x ')  !== false) { return BR_REPEAT_X; };
    if (strpos($value, ' repeat-y ')  !== false) { return BR_REPEAT_Y; };
    if (strpos($value, ' no-repeat ') !== false) { return BR_NO_REPEAT; };
    if (strpos($value, ' repeat ')    !== false) { return BR_REPEAT; };
    return CSSBackgroundRepeat::default_value();
  }
}

?>