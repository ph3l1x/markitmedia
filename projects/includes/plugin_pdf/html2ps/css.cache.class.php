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