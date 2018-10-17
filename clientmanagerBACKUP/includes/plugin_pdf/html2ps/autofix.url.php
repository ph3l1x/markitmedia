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

class AutofixUrl {
  function AutofixUrl() {
  }

  function apply($url) {
    $parts = @parse_url($url);
    if ($parts === FALSE) {
      return null;
    };

    $path = isset($parts['path']) ? $parts['path'] : '/';

    /*
     * Check if path contains only RFC1738 compliant symbols and fix it
     * No graphic: 00-1F, 7F, 80-FF
     * Unsafe: 'space',<>"#%{}|\^~[]`
     * Reserved: ;/?:@=&
     *
     * Normally, slash is allowed in path part, and % may be a part of encoded character
     */
    $no_graphic_found = preg_match('/[\x00-\x1F\x7F\x80-\xFF]/', $path);
    $unsafe_found = preg_match('/[ <>\"#{}\|\^~\[\]`]/', $path);
    $unsafe_percent_found = preg_match('/%[^\dA-F]|%\d[^\dA-F]/i', $path);
    $reserved_found = preg_match('/;\?:@=&/', $path);

    if ($no_graphic_found || 
        $unsafe_found || 
        $unsafe_percent_found || 
        $reserved_found) {
      $path = join('/', array_map('rawurlencode', explode('/',$path)));
    };

    // Build updated URL
    $url_fixed = '';

    if (isset($parts['scheme'])) {
      $url_fixed .= $parts['scheme'];
      $url_fixed .= '://';

      if (isset($parts['user'])) {
        $url_fixed .= $parts['user'];
        if (isset($parts['pass'])) {
          $url_fixed .= ':';
          $url_fixed .= $parts['pass'];
        };
        $url_fixed .= '@';
      };
      
      if (isset($parts['host'])) {
        $url_fixed .= $parts['host'];
      };
      
      if (isset($parts['port'])) {
        $url_fixed .= ':';
        $url_fixed .= $parts['port'];
      };
    };
    
    $url_fixed .= $path;
   
    if (isset($parts['query'])) {
      $url_fixed .= '?';
      $url_fixed .= $parts['query'];
    };

    if (isset($parts['fragment'])) {
      $url_fixed .= '#';
      $url_fixed .= $parts['fragment'];
    };

    return $url_fixed;
  }
}

?>