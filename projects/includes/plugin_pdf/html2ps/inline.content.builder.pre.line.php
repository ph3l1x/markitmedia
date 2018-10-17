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

class InlineContentBuilderPreLine extends InlineContentBuilder {
  function InlineContentBuilderPreLine() {
    $this->InlineContentBuilder();
  }

  /**
   * CSS 2.1 p.16.6
   * white-space: normal
   * This value directs user agents to collapse sequences of whitespace, and break lines as necessary to fill line boxes.
   */
  function build(&$box, $text, &$pipeline) {
    $text = $this->remove_leading_linefeeds($text);
    $text = $this->remove_trailing_linefeeds($text);
    $lines = $this->break_into_lines($text);
    $parent =& $box->get_parent_node();

    for ($i=0, $size = count($lines); $i<$size; $i++) {
      $line = $lines[$i];

      $words = $this->break_into_words($this->collapse_whitespace($line));
      foreach ($words as $word) {
        $box->process_word($word, $pipeline);

        $whitespace =& WhitespaceBox::create($pipeline);
        $box->add_child($whitespace);
      };

      if ((!$parent || $parent->isBlockLevel()) && $i < $size - 1) {
        $this->add_line_break($box, $pipeline);
      };
    };
  }
}

?>