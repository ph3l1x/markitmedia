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

class InlineContentBuilderPre extends InlineContentBuilder {
  function InlineContentBuilderPre() {
    $this->InlineContentBuilder();
  }

  /**
   * CSS 2.1 16.6 Whitespace: the 'white-space' property
   *
   * pre
   *
   * This  value prevents  user  agents from  collapsing sequences  of
   * whitespace. Lines are  only broken at newlines in  the source, or
   * at occurrences of "\A" in generated content.
   */
  function build(&$box, $text, &$pipeline) {
    $text = $this->remove_trailing_linefeeds($text);
    $lines = $this->break_into_lines($text);

    $parent =& $box->get_parent_node();

    for ($i=0, $size = count($lines); $i<$size; $i++) {
      $line = $lines[$i];
      $box->process_word($line, $pipeline);

      if ((!$parent || $parent->isBlockLevel()) && $i < $size - 1) {
        $this->add_line_break($box, $pipeline);
      };
    };
  }
}

?>