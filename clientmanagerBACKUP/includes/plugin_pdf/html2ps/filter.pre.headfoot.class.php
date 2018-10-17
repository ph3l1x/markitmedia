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
class PreTreeFilterHeaderFooter extends PreTreeFilter {
  var $header_html;
  var $footer_html;

  function PreTreeFilterHeaderFooter($header_html, $footer_html) {
    $this->header_html = null;
    $this->footer_html = null;

    if (trim($header_html) != "") {
      $this->header_html = "<body style=\"position: fixed; margin: 0; padding: 1px; width: 100%; left: 0; right: 0; bottom: 100%; text-align: center;\">".trim($header_html)."</body>";
    };

    if (trim($footer_html) != "") {
      $this->footer_html  = "<body style=\"position: fixed; margin: 0; padding: 1px; width: 100%; left: 0; right: 0; top: 100%; text-align: center;\">".trim($footer_html)."</body>";
    };
  }

  function process(&$tree, $data, &$pipeline) {
    $parser = new ParserXHTML();

    $null = null;

    if ($this->header_html) {
      $box =& $parser->process($this->header_html, $pipeline, $null);
      $tree->add_child($box);
    };

    if ($this->footer_html) {
      $box =& $parser->process($this->footer_html, $pipeline, $null);
      $tree->add_child($box);
    };
  }
}
?>