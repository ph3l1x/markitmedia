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

/**
 * "Singleton"
 */
class CSSCache {
  function get() {
    global $__g_css_manager;

    if (!isset($__g_css_manager)) {
      $__g_css_manager = new CSSCache();
    };

    return $__g_css_manager;
  }

  function _getCacheFilename($url) {
    return CACHE_DIR.md5($url).'.css.compiled';
  }

  function _isCached($url) {
    $cache_filename = $this->_getCacheFilename($url);
    return is_readable($cache_filename);
  }

  function &_readCached($url) {
    $cache_filename = $this->_getCacheFilename($url);
    $obj = unserialize(file_get_contents($cache_filename));
    return $obj;
  }

  function _putCached($url, $css) {
    file_put_contents($this->_getCacheFilename($url), serialize($css));
  }

  function &compile($url, $css, &$pipeline) {
    if ($this->_isCached($url)) {
      return $this->_readCached($url);
    } else {
      $cssruleset = new CSSRuleset();
      $cssruleset->parse_css($css, $pipeline);
      $this->_putCached($url, $cssruleset);
      return $cssruleset;
    };
  }
}

?>