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