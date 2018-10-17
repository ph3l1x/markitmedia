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

class Stripe_Util_Set
{
  private $_elts;

  public function __construct($members=array())
  {
    $this->_elts = array();
    foreach ($members as $item)
      $this->_elts[$item] = true;
  }

  public function includes($elt)
  {
    return isset($this->_elts[$elt]);
  }

  public function add($elt)
  {
    $this->_elts[$elt] = true;
  }

  public function discard($elt)
  {
    unset($this->_elts[$elt]);
  }

  // TODO: make Set support foreach
  public function toArray()
  {
    return array_keys($this->_elts);
  }
}
