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
require_once(HTML2PS_DIR . 'value.generic.length.php');

define('VALUE_NORMAL', 0);
define('VALUE_AUTO',   1);
define('VALUE_PERCENTAGE', 2);

class CSSValuePercentage extends CSSValue {
  var $_value;
  var $_status;

  function init($value, $status) {
    $this->_value = $value;
    $this->_status = $status;
  }

  function &_fromString($value, &$class_object) {
    if ($value == 'inherit') {
      $dummy = CSS_PROPERTY_INHERIT;
      return $dummy;
    };

    if ($value == 'auto' || $value == '') {
      $class_object->init(null, VALUE_AUTO);
      return $class_object;
    };

    $strlen = strlen($value);
    if ($value{$strlen-1} == '%') {
      $class_object->init((float)$value, VALUE_PERCENTAGE);
      return $class_object;
    };

    $class_object->init(Value::fromString($value), VALUE_NORMAL);
    return $class_object;
  }

  function units2pt($font_size) {
    if ($this->isNormal()) {
      $this->_value->units2pt($font_size);
    };
  }

  function getPoints($base_size = 0) {
    if ($this->isPercentage()) {
      return $base_size * $this->getPercentage();
    } else {
      return $this->_value->getPoints();
    };
  }

  function isAuto() {
    return $this->_status == VALUE_AUTO;
  }

  function isNormal() {
    return $this->_status == VALUE_NORMAL;
  }

  function isPercentage() {
    return $this->_status == VALUE_PERCENTAGE;
  }

  function &_copy(&$value) {
    if ($this->isNormal()) {
      $value->_value  = $this->_value->copy();
    } else {
      $value->_value  = $this->_value;
    };

    $value->_status = $this->_status;
    return $value;
  }

  function getPercentage() {
    if ($this->_status != VALUE_PERCENTAGE) {
      die("Invalid percentage value type");
    };

    return $this->_value;
  }
}

?>