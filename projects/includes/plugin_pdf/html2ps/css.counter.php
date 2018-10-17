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

class CSSCounter {
  var $_name;
  var $_value;
  
  function CSSCounter($name) {
    $this->set_name($name);
    $this->reset();
  }

  function get() {
    return $this->_value;
  }

  function get_name() {
    return $this->_name;
  }

  function reset() {
    $this->_value = 0;
  }

  function set($value) {
    $this->_value = $value;
  }

  function set_name($value) {
    $this->_name = $value;
  }
}

?>