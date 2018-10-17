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
// $Header: /cvsroot/html2ps/css.word-spacing.inc.php,v 1.2 2006/09/07 18:38:15 Konstantin Exp $

class CSSWordSpacing extends CSSPropertyHandler {
  var $_default_value;

  function CSSWordSpacing() { 
    $this->CSSPropertyHandler(false, true); 

    $this->_default_value = Value::fromString("0");
  }

  function default_value() { 
    return $this->_default_value;
  }

  function parse($value) {
    $value = trim($value);

    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    };

    if ($value === 'normal') { 
      return $this->_default_value; 
    };

    return Value::fromString($value);
  }

  function get_property_code() {
    return CSS_WORD_SPACING;
  }

  function get_property_name() {
    return 'word-spacing';
  }
}

CSS::register_css_property(new CSSWordSpacing);

?>
