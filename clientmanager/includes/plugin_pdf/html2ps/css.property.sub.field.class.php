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

class CSSSubFieldProperty extends CSSSubProperty {
  var $_owner;
  var $_owner_field;

  function CSSSubFieldProperty(&$owner, $field) {
    $this->CSSSubProperty($owner);
    $this->_owner_field = $field;
  }

  function set_value(&$owner_value, &$value) {
    $field = $this->_owner_field;
    $owner_value->$field = $value;
  }

  function &get_value(&$owner_value) {
    $field = $this->_owner_field;
    return $owner_value->$field;
  }
}

?>