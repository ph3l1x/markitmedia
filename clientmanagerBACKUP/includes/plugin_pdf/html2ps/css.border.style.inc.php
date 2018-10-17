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
// $Header: /cvsroot/html2ps/css.border.style.inc.php,v 1.6 2006/11/11 13:43:52 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.border.style.class.php');

class CSSBorderStyle extends CSSSubProperty {
  var $_defaultValue;

  function CSSBorderStyle(&$owner) {
    $this->CSSSubProperty($owner);

    $this->_defaultValue = new BorderStyle(BS_NONE,
                                           BS_NONE,
                                           BS_NONE,
                                           BS_NONE);
  }

  function set_value(&$owner_value, &$value) {
    if ($value != CSS_PROPERTY_INHERIT) {
      $owner_value->top->style    = $value->top;
      $owner_value->right->style  = $value->right;
      $owner_value->bottom->style = $value->bottom;
      $owner_value->left->style   = $value->left;
    } else {
      $owner_value->top->style    = CSS_PROPERTY_INHERIT;
      $owner_value->right->style  = CSS_PROPERTY_INHERIT;
      $owner_value->bottom->style = CSS_PROPERTY_INHERIT;
      $owner_value->left->style   = CSS_PROPERTY_INHERIT;
    };
  }

  function get_value(&$owner_value) {
    return new BorderStyle($owner_value->top->style, 
                           $owner_value->right->style, 
                           $owner_value->bottom->style, 
                           $owner_value->left->style);
  }

  function get_property_code() {
    return CSS_BORDER_STYLE;
  }

  function get_property_name() {
    return 'border-style';
  }

  function default_value() {
    return $this->_defaultValue;
  }

  function parse_style($value) {
    switch ($value) {
    case "solid":  
      return BS_SOLID; 
    case "dashed": 
      return BS_DASHED; 
    case "dotted": 
      return BS_DOTTED; 
    case "double": 
      return BS_DOUBLE; 
    case "inset":  
      return BS_INSET; 
    case "outset": 
      return BS_OUTSET; 
    case "groove": 
      return BS_GROOVE; 
    case "ridge":  
      return BS_RIDGE; 
    default:       
      return BS_NONE; 
    };
  }

  function parse_in($value) {
    $values = explode(" ",$value);

    switch (count($values)) {
    case 1:
      $v1 = $this->parse_style($values[0]);
      return array($v1, $v1, $v1, $v1);
    case 2:
      $v1 = $this->parse_style($values[0]);
      $v2 = $this->parse_style($values[1]);
      return array($v1, $v2, $v1, $v2);
    case 3:
      $v1 = $this->parse_style($values[0]);
      $v2 = $this->parse_style($values[1]);
      $v3 = $this->parse_style($values[2]);
      return array($v1, $v2, $v3, $v2);
    case 4:
      $v1 = $this->parse_style($values[0]);
      $v2 = $this->parse_style($values[1]);
      $v3 = $this->parse_style($values[2]);
      $v4 = $this->parse_style($values[3]);
      return array($v1, $v2, $v3, $v4);
    default:
      return $this->default_value();
    };   
  }

  function parse($value) {
    if ($value == 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    $values = $this->parse_in($value);

    return new BorderStyle($values[0], 
                           $values[1],
                           $values[2],
                           $values[3]);
  }
}

?>