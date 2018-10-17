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

require_once(HTML2PS_DIR . 'inline.content.builder.php');

class InlineContentBuilderNowrap extends InlineContentBuilder {
  function InlineContentBuilderNowrap() {
    $this->InlineContentBuilder();
  }

  /**
   * CSS 2.1, p 16.6
   * white-space: nowrap
   * This value collapses whitespace as for 'normal', but suppresses line breaks within text
   */
  function build(&$box, $raw_content, &$pipeline) {
    $raw_content = $this->remove_leading_linefeeds($raw_content);
    $raw_content = $this->remove_trailing_linefeeds($raw_content);
    $box->process_word($this->collapse_whitespace($raw_content), $pipeline);
  }
}

?>