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
// $Header: /cvsroot/html2ps/css.list-style.inc.php,v 1.8 2007/02/04 17:08:19 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.list-style.class.php');

class CSSListStyle extends CSSPropertyHandler {
  // CSS 2.1: list-style is inherited
  function CSSListStyle() { 
    $this->default_value = new ListStyleValue;
    $this->default_value->image    = CSSListStyleImage::default_value();
    $this->default_value->position = CSSListStylePosition::default_value();
    $this->default_value->type     = CSSListStyleType::default_value();

    $this->CSSPropertyHandler(true, true); 
  }

  function parse($value, &$pipeline) { 
    $style = new ListStyleValue;
    $style->image     = CSSListStyleImage::parse($value, $pipeline);
    $style->position  = CSSListStylePosition::parse($value);
    $style->type      = CSSListStyleType::parse($value);

    return $style;
  }

  function default_value() { return $this->default_value; }

  function get_property_code() {
    return CSS_LIST_STYLE;
  }

  function get_property_name() {
    return 'list-style';
  }
}

$ls = new CSSListStyle;
CSS::register_css_property($ls);
CSS::register_css_property(new CSSListStyleImage($ls,    'image'));
CSS::register_css_property(new CSSListStylePosition($ls, 'position'));
CSS::register_css_property(new CSSListStyleType($ls,     'type'));

?>