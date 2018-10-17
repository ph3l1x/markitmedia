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

class CSSFontFamily extends CSSSubFieldProperty {
  function default_value() {
    return 'times';
  }

  function parse($value) {
    if ($value == 'inherit') {
      return CSS_PROPERTY_INHERIT;
    }

    $subvalues = preg_split("/\s*,\s*/",$value);

    foreach ($subvalues as $subvalue) {
      $subvalue = trim(strtolower($subvalue));   
    
      // Check if current subvalue is not empty (say, in case of 'font-family:;' or 'font-family:family1,,family2;')
      if ($subvalue !== "") {

        // Some multi-word font family names can be enclosed in quotes; remove them
        if ($subvalue{0} == "'") {
          $subvalue = substr($subvalue,1,strlen($subvalue)-2);
        } elseif ($subvalue{0} == '"') {
          $subvalue = substr($subvalue,1,strlen($subvalue)-2);
        };
      
        global $g_font_resolver;
        if ($g_font_resolver->have_font_family($subvalue)) { return $subvalue; };

        global $g_font_resolver_pdf;
        if ($g_font_resolver_pdf->have_font_family($subvalue)) { return $subvalue; };
      };
    };

    // Unknown family type
    return "times";
  }

  function get_property_code() {
    return CSS_FONT_FAMILY;
  }

  function get_property_name() {
    return 'font-family';
  }

}

?>