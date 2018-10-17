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

/**
 * @version 1.0
 * @created 14-���-2006 17:49:11
 */
class WidthConstraint extends CSSValue {
  var $_min_width;

  function WidthConstraint() {
    $this->_min_width = Value::fromData(0, UNIT_PT);
  }

  function apply($w, $pw) {
    $width = $this->_apply($w, $pw);
    $width = max($this->_min_width->getPoints(), $width);
    return $width;
  }

  function &copy() {
    $copy =& $this->_copy();

    if ($this->_min_width == CSS_PROPERTY_INHERIT) {
      $copy->_min_width = CSS_PROPERTY_INHERIT;
    } else {
      $copy->_min_width = $this->_min_width->copy();
    };

    return $copy;
  }

  function units2pt($base) {
    $this->_units2pt($base);
    $this->_min_width->units2pt($base);
  }

  function isNull() { 
    return false; 
  }

  function isFraction() {
    return false;
  }

  function isConstant() {
    return false;
  }
}
?>