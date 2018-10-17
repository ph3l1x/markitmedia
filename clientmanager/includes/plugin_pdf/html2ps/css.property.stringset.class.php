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