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

require_once(HTML2PS_DIR . 'value.generic.php');

class LineHeight_Absolute extends CSSValue {
  var $length;

  function apply($value) { 
    return $this->length; 
  }

  function is_default() { 
    return false; 
  }

  function LineHeight_Absolute($value) { 
    $this->length = $value; 
  }

  function units2pt($base) { 
    $this->length = units2pt($this->length, $base); 
  }

  function &copy() {
    $value =& new LineHeight_Absolute($this->length);
    return $value;
  }
}

class LineHeight_Relative extends CSSValue {
  var $fraction;

  function apply($value) { 
    return $this->fraction * $value; 
  }

  function is_default() { 
    return $this->fraction == 1.1; 
  }

  function LineHeight_Relative($value) { 
    $this->fraction = $value; 
  }

  function units2pt($base) { }

  function &copy() {
    $value =& new LineHeight_Relative($this->fraction);
    return $value;
  }
}

?>