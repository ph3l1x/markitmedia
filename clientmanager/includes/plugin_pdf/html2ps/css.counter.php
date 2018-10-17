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