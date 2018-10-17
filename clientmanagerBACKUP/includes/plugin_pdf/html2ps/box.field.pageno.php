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
class BoxTextFieldPageNo extends TextBoxString {
  function BoxTextFieldPageNo() {
    $this->TextBoxString('', 'iso-8859-1');
  }

  function from_box(&$box) {
    $field = new BoxTextFieldPageNo;

    $field->copy_style($box);

    $field->words = array('000');
    $field->encodings = array('iso-8859-1');
    $field->_left      = $box->_left;
    $field->_top       = $box->_top;
    $field->baseline   = $box->baseline;

    return $field;
  }

  function show(&$viewport) {
    $font = $this->get_css_property(CSS_FONT);

    $this->words[0] = sprintf('%d', $viewport->current_page);

    $field_width = $this->width;
    $field_left  = $this->_left;

    if ($font->size->getPoints() > 0) {
      $value_width = $viewport->stringwidth($this->words[0], 
                                            $this->_get_font_name($viewport,0), 
                                            $this->encodings[0],
                                            $font->size->getPoints());
      if (is_null($value_width)) { return null; };
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

  function show_fixed(&$driver) {
    $font = $this->get_css_property(CSS_FONT);

    $this->words[0] = sprintf('%d', $driver->current_page);

    $field_width = $this->width;
    $field_left  = $this->_left;

    if ($font->size->getPoints() > 0) {
      $value_width = $driver->stringwidth($this->words[0], 
                                          $this->_get_font_name($driver, 0), 
                                          $this->encodings[0], 
                                          $font->size->getPoints());
      if (is_null($value_width)) { return null; };
    } else {
      $value_width = 0;
    };
    $this->width  = $value_width;
    $this->_left += ($field_width - $value_width) / 2;

    if (is_null(TextBoxString::show_fixed($driver))) {
      return null;
    };

    $this->width = $field_width;
    $this->_left = $field_left;

    return true;
  }
}
?>