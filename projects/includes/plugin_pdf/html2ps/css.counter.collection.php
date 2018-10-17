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

class CSSCounterCollection {
  var $_counters;

  function CSSCounterCollection() {
    $this->_counters = array();
  }

  function add(&$counter) {
    $this->_counters[$counter->get_name()] =& $counter;
  }

  function &get($name) {
    if (!isset($this->_counters[$name])) {
      $null = null;
      return $null;
    };

    return $this->_counters[$name];
  }
}

?>