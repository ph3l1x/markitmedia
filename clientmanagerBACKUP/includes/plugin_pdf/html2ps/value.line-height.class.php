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