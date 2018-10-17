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
// $Header: /cvsroot/html2ps/css.background.inc.php,v 1.23 2007/03/15 18:37:30 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.background.php');

class CSSBackground extends CSSPropertyHandler {
  var $default_value;

  function get_property_code() {
    return CSS_BACKGROUND;
  }

  function get_property_name() {
    return 'background';
  }

  function CSSBackground() {
    $this->default_value = new Background(CSSBackgroundColor::default_value(),
                                          CSSBackgroundImage::default_value(),
                                          CSSBackgroundRepeat::default_value(),
                                          CSSBackgroundPosition::default_value(),
                                          CSSBackgroundAttachment::default_value());

    $this->CSSPropertyHandler(true, false);
  }

  function inherit($state, &$new_state) { 
    // Determine parent 'display' value
    $parent_display = $state[CSS_DISPLAY];

    // If parent is a table row, inherit the background settings
    $this->replace_array(($parent_display == 'table-row') ? $state[CSS_BACKGROUND] : $this->default_value(),
                         $new_state);
  }

  function default_value() {
    return $this->default_value->copy();
  }

  function parse($value, &$pipeline) {
    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    $background = new Background(CSSBackgroundColor::parse($value),
                                 CSSBackgroundImage::parse($value, $pipeline),
                                 CSSBackgroundRepeat::parse($value),
                                 CSSBackgroundPosition::parse($value),
                                 CSSBackgroundAttachment::parse($value));

    return $background;
  }
}

$bg = new CSSBackground;

CSS::register_css_property($bg);
CSS::register_css_property(new CSSBackgroundColor($bg, '_color'));
CSS::register_css_property(new CSSBackgroundImage($bg, '_image'));
CSS::register_css_property(new CSSBackgroundRepeat($bg, '_repeat'));
CSS::register_css_property(new CSSBackgroundPosition($bg, '_position'));
CSS::register_css_property(new CSSBackgroundAttachment($bg, '_attachment'));

?>