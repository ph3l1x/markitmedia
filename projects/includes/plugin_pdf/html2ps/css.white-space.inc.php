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