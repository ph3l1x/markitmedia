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

class CSSPropertyStringSet extends CSSPropertyHandler {
  var $_mapping;
  var $_keys;

  function CSSPropertyStringSet($inherit, $inherit_text, $mapping) {
    $this->CSSPropertyHandler($inherit, $inherit_text);

    $this->_mapping = $mapping;

    /**
     * Unfortunately, isset($this->_mapping[$key]) will return false
     * for $_mapping[$key] = null. As CSS_PROPERTY_INHERIT value is 'null',
     * this should be avoided using the hack below
     */
    $this->_keys    = $mapping;
    foreach ($this->_keys as $key => $value) {
      $this->_keys[$key] = 1;
    };
  }

  function parse($value) {
    $value = trim(strtolower($value));

    if (isset($this->_keys[$value])) {
      return $this->_mapping[$value];
    };

    return $this->default_value();
  }
}

?>