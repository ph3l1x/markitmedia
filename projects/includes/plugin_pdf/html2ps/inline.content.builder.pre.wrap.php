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

class InlineContentBuilderPreWrap extends InlineContentBuilder {
  function InlineContentBuilderPreWrap() {
    $this->InlineContentBuilder();
  }

  /**
   * CSS 2.1 16.6 Whitespace: the 'white-space' property
   *
   * pre-wrap:
   *
   * This  value prevents  user  agents from  collapsing sequences  of
   * whitespace.   Lines are  broken  at newlines  in  the source,  at
   * occurrences  of "\A" in  generated content,  and as  necessary to
   * fill line boxes.
   */
  function build(&$box, $text, &$pipeline) {
    $text = $this->remove_trailing_linefeeds($text);
    $parent =& $box->get_parent_node();
    $lines = $this->break_into_lines($text);

    for ($i=0, $size = count($lines); $i<$size; $i++) {
      $line = $lines[$i];

      $words = $this->break_into_words($line);
      foreach ($words as $word) {
        $word .= ' ';
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