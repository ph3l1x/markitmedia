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

define('PAGE_BREAK_AUTO'  ,0);
define('PAGE_BREAK_ALWAYS',1);
define('PAGE_BREAK_AVOID' ,2);
define('PAGE_BREAK_LEFT'  ,3);
define('PAGE_BREAK_RIGHT' ,4);

class CSSPageBreak extends CSSPropertyStringSet {
  function CSSPageBreak() { 
    $this->CSSPropertyStringSet(false, 
                                false,
                                array('inherit' => CSS_PROPERTY_INHERIT,
                                      'auto'    => PAGE_BREAK_AUTO,
                                      'always'  => PAGE_BREAK_ALWAYS,
                                      'avoid'   => PAGE_BREAK_AVOID,
                                      'left'    => PAGE_BREAK_LEFT,
                                      'right'   => PAGE_BREAK_RIGHT)); 
  }

  function default_value() { 
    return PAGE_BREAK_AUTO; 
  }
}
?>