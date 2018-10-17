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