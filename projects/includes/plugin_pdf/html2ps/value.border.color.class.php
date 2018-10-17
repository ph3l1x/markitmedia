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

class BorderColor extends CSSValue {
  var $left;
  var $right;
  var $top;
  var $bottom;

  function &copy() {
    $value =& new BorderColor($this->top, $this->right, $this->bottom, $this->left);
    return $value;
  }

  function BorderColor($top, $right, $bottom, $left) {
    $this->left   = $left->copy();
    $this->right  = $right->copy();
    $this->top    = $top->copy();
    $this->bottom = $bottom->copy();
  }
}

?>