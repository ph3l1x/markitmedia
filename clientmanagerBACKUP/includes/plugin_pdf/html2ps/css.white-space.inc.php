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
// $Header: /cvsroot/html2ps/css.white-space.inc.php,v 1.9 2007/01/24 18:55:52 Konstantin Exp $

define('WHITESPACE_NORMAL',   0);
define('WHITESPACE_PRE',      1);
define('WHITESPACE_NOWRAP',   2);
define('WHITESPACE_PRE_WRAP', 3);
define('WHITESPACE_PRE_LINE', 4);

class CSSWhiteSpace extends CSSPropertyStringSet {
  function CSSWhiteSpace() { 
    $this->CSSPropertyStringSet(true, 
                                true,
                                array('normal'   => WHITESPACE_NORMAL,
                                      'pre'      => WHITESPACE_PRE,
                                      'pre-wrap' => WHITESPACE_PRE_WRAP,
                                      'nowrap'   => WHITESPACE_NOWRAP,
                                      'pre-line' => WHITESPACE_PRE_LINE)); 
  }

  function default_value() { 
    return WHITESPACE_NORMAL; 
  }

  function get_property_code() {
    return CSS_WHITE_SPACE;
  }

  function get_property_name() {
    return 'white-space';
  }
}

CSS::register_css_property(new CSSWhiteSpace);
  
?>