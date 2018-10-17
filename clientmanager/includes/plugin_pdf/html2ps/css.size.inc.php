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

class CSSSize extends CSSPropertyHandler {
  function CSSSize() { 
    $this->CSSPropertyHandler(false, false); 
  }

  function default_value() { 
    $null = null;
    return $null;
  }

  // <length>{1,2} | auto | [ <page-size> || [ portrait | landscape] ]
  function parse($value) {
    if ($value == '') {
      return null;
    };

    // First attempt to create media with predefined name
    if (preg_match('/^(\w+)(?:\s+(portrait|landscape))?$/', $value, $matches)) {
      $name = $matches[1];
      $landscape = isset($matches[2]) && $matches[2] == 'landscape';

      $media =& Media::predefined($name);

      if (is_null($media)) {
        return null;
      };

      return array('size' => array('width' => $media->get_width(),
                                   'height' => $media->get_height()),
                   'landscape' => $landscape);
    };

    // Second, attempt to create media with predefined size
    $parts = preg_split('/\s+/', $value);
    $width_str = $parts[0];
    $height_str = isset($parts[1]) ? $parts[1] : $parts[0];

    $width = units2pt($width_str);
    $height = units2pt($height_str);

    if ($width == 0 ||
        $height == 0) {
      return null;
    };

    return array('size' => array('width' => $width / mm2pt(1) / pt2pt(1),
                                 'height' => $height / mm2pt(1) / pt2pt(1)),
                 'landscape' => false);
  }

  function get_property_code() {
    return CSS_SIZE;
  }

  function get_property_name() {
    return 'size';
  }
}

CSS::register_css_property(new CSSSize());

?>