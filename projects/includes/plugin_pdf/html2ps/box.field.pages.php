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
/**
 * Handles the '##PAGES##' text field.
 *
 */
class BoxTextFieldPages extends TextBoxString {
  function BoxTextFieldPages() { 
    $this->TextBoxString("", "iso-8859-1");
  }

  function from_box(&$box) {
    $field = new BoxTextFieldPages;

    $field->copy_style($box);

    $field->words      = array("000");
    $field->encodings  = array("iso-8859-1");
    $field->_left      = $box->_left;
    $field->_top       = $box->_top;
    $field->baseline   = $box->baseline;

    return $field;
  }

  function show(&$viewport) {
    $font = $this->get_css_property(CSS_FONT);

    $this->words[0] = sprintf("%d", $viewport->expected_pages);

    $field_width = $this->width;
    $field_left  = $this->_left;

    if ($font->size->getPoints() > 0) {
      $value_width = $viewport->stringwidth($this->words[0], 
                                            $this->_get_font_name($viewport, 0), 
                                            $this->encodings[0], 
                                            $font->size->getPoints());
      if (is_null($value_width)) {
        return null;
      };
    } else {
      $value_width = 0;
    };
    $this->width  = $value_width;
    $this->_left += ($field_width - $value_width) / 2;

    if (is_null(TextBoxString::show($viewport))) {
      return null;
    };

    $this->width = $field_width;
    $this->_left = $field_left;

    return true;
  }

  function show_fixed(&$viewport) {
    $font = $this->get_css_property(CSS_FONT);

    $this->words[0] = sprintf("%d", $viewport->expected_pages);

    $field_width = $this->width;
    $field_left  = $this->_left;

    if ($font->size->getPoints() > 0) {
      $value_width = $viewport->stringwidth($this->words[0], 
                                            $this->_get_font_name($viewport, 0), 
                                            $this->encodings[0], 
                                            $font->size->getPoints());
      if (is_null($value_width)) {
        return null;
      };
    } else {
      $value_width = 0;
    };
    $this->width  = $value_width;
    $this->_left += ($field_width - $value_width) / 2;

    if (is_null(TextBoxString::show_fixed($viewport))) {
      return null;
    };

    $this->width = $field_width;
    $this->_left = $field_left;

    return true;
  }
}
?>