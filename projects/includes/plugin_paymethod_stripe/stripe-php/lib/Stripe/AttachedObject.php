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

class Stripe_AttachedObject extends Stripe_Object
{
  public function replaceWith($properties)
  {
    $removed = array_diff(array_keys($this->_values), array_keys($properties));
    // Don't unset, but rather set to null so we send up '' for deletion.
    foreach ($removed as $k) {
      $this->$k = null;
    }

    foreach ($properties as $k => $v) {
      $this->$k = $v;
    }
  }
}
