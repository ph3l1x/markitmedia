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
// $Header: /cvsroot/html2ps/xhtml.style.inc.php,v 1.7 2007/03/15 18:37:36 Konstantin Exp $

function process_style(&$html) {
  $styles = array();

  if (preg_match('#^(.*)(<style[^>]*>)(.*?)(</style>)(.*)$#is', $html, $matches)) {
    $styles = array_merge(array($matches[2].process_style_content($matches[3]).$matches[4]),
                          process_style($matches[5]));
    $html = $matches[1].$matches[5];
  };

  return $styles;
}

function process_style_content($html) {
  // Remove CDATA comment bounds inside the <style>...</style> 
  $html = preg_replace("#<!\[CDATA\[#","",$html); 
  $html = preg_replace("#\]\]>#is","",$html);

  // Remove HTML comment bounds inside the <style>...</style> 
  $html = preg_replace("#<!--#is","",$html); 
  $html = preg_replace("#-->#is","",$html);

  // Remove CSS comments
  $html = preg_replace("#/\*.*?\*/#is","",$html);

  // Force CDATA comment
  $html = '<![CDATA['.$html.']]>';

  return $html;
}

function insert_styles($html, $styles) {
  // This function is called after HTML code has been fixed; thus, 
  // HEAD closing tag should be present

  $html = preg_replace('#</head>#', join("\n", $styles)."\n</head>", $html);
  return $html;
}

?>