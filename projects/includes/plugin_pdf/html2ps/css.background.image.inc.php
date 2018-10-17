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
// $Header: /cvsroot/html2ps/css.background.image.inc.php,v 1.16 2006/07/09 09:07:44 Konstantin Exp $

class CSSBackgroundImage extends CSSSubFieldProperty {
  function get_property_code() {
    return CSS_BACKGROUND_IMAGE;
  }

  function get_property_name() {
    return 'background-image';
  }

  function default_value() { 
    return new BackgroundImage(null, null); 
  }

  function parse($value, &$pipeline) {
    global $g_config;
    if (!$g_config['renderimages']) {
      return CSSBackgroundImage::default_value();
    };

    if ($value === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }
    
    // 'url' value
    if (preg_match("/url\((.*[^\\\\]?)\)/is",$value,$matches)) {
      $url = $matches[1];

      $full_url = $pipeline->guess_url(css_remove_value_quotes($url));
      return new BackgroundImage($full_url,
                                 ImageFactory::get($full_url, $pipeline));
    }

    // 'none' and unrecognzed values
    return CSSBackgroundImage::default_value();
  }
}

?>