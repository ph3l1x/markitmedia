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
// $Header: /cvsroot/html2ps/css.list-style-image.inc.php,v 1.6 2006/09/07 18:38:14 Konstantin Exp $

class CSSListStyleImage extends CSSSubFieldProperty {
  /**
   * CSS 2.1: default value for list-style-image is none
   */
  function default_value() { 
    return new ListStyleImage(null, null); 
  }

  function parse($value, &$pipeline) {
    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    };

    global $g_config;
    if (!$g_config['renderimages']) {
      return CSSListStyleImage::default_value();
    };

    if (preg_match('/url\(([^)]+)\)/',$value, $matches)) { 
      $url = $matches[1];

      $full_url = $pipeline->guess_url(css_remove_value_quotes($url));
      return new ListStyleImage($full_url,
                                ImageFactory::get($full_url, $pipeline));
    };

    /**
     * 'none' value and all unrecognized values
     */
    return CSSListStyleImage::default_value();
  }

  function get_property_code() {
    return CSS_LIST_STYLE_IMAGE;
  }

  function get_property_name() {
    return 'list-style-image';
  }
}

?>