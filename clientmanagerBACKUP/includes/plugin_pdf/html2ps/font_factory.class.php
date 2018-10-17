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
class FontFactory {
  var $fonts;
  var $error_message;

  var $_trueType;

  function error_message() { 
    return $this->error_message;
  }

  function FontFactory() {
    $this->fonts = array();
  }

  /**
   * Note that typeface  is not a font file  name; example of typeface
   * name  could  be  'Times-Roman'  or  'ArialUnicodeMS'.  Note  that
   * typeface  names  are  for  internal  use only,  as  they  do  not
   * correspond  to  any system  font  names/parameters; all  typeface
   * names and their relateions to system fonts are defined in html2ps
   * config
   *
   * @param $typeface String name of the font typeface
   * @param $encoding String 
   * 
   */
  function &getTrueType($typeface, $encoding) {
    if (!isset($this->fonts[$typeface][$encoding])) {
      global $g_font_resolver_pdf;
      $fontfile = $g_font_resolver_pdf->ttf_mappings[$typeface];

      $font = FontTrueType::create($fontfile, $encoding);
      if (is_null($font)) { 
        $dummy = null;
        return $dummy; 
      };

      $this->fonts[$typeface][$encoding] = $font;
    };

    return $this->fonts[$typeface][$encoding];
  }

  function &get_type1($name, $encoding) {
    if (!isset($this->fonts[$name][$encoding])) {
      global $g_font_resolver;

      $font =& FontType1::create($name, $encoding, $g_font_resolver, $this->error_message);
      if (is_null($font)) { 
        $dummy = null;
        return $dummy; 
      };

      $this->fonts[$name][$encoding] = $font;
    };

    return $this->fonts[$name][$encoding];
  }
}

?>