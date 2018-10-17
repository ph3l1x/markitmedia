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