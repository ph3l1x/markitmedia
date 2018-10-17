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
// $Header: /cvsroot/html2ps/converter.class.php,v 1.6 2006/06/25 13:55:35 Konstantin Exp $

class Converter {
  function create() {
//     if (function_exists('iconv')) {
//       return new IconvConverter;
//     } else {
      return new PurePHPConverter;
//     }
  }
}

class IconvConverter {
  function to_utf8($string, $encoding) {
    return iconv(strtoupper($encoding), "UTF-8", $string);
  }
}

class PurePHPConverter {
  function apply_aliases($encoding) {
    global $g_encoding_aliases;

    if (isset($g_encoding_aliases[$encoding])) {
      return $g_encoding_aliases[$encoding];
    }

    return $encoding;
  }

  function to_utf8($html, $encoding) {
    global $g_utf8_converters;

    $encoding = $this->apply_aliases($encoding);

    if ($encoding === 'iso-8859-1') {
      return utf8_encode($html);
    } elseif ($encoding === 'utf-8') {
      return $html;
    } elseif(isset($g_utf8_converters[$encoding])) {
      return $this->something_to_utf8($html, $g_utf8_converters[$encoding][0]);
    } else {
      die("Unsupported encoding detected: '$encoding'");
    };
  }

  function something_to_utf8($html, &$mapping) {
    for ($i=0; $i < strlen($html); $i++) {
      $replacement = code_to_utf8($mapping[$html{$i}]);
      if ($replacement != $html{$i}) {
        $html = substr_replace($html, $replacement, $i, 1);
        $i += strlen($replacement) - 1;
      };
    };
    return $html;
  }
}
?>