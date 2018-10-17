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

class InlineContentBuilderFactory {
  function &get($whitespace) {
    switch ($whitespace) {
    case WHITESPACE_NORMAL:
      require_once(HTML2PS_DIR . 'inline.content.builder.normal.php');
      $builder =& new InlineContentBuilderNormal();
      break;
    case WHITESPACE_PRE:
      require_once(HTML2PS_DIR . 'inline.content.builder.pre.php');
      $builder =& new InlineContentBuilderPre();
      break;
    case WHITESPACE_NOWRAP:
      require_once(HTML2PS_DIR . 'inline.content.builder.nowrap.php');
      $builder =& new InlineContentBuilderNowrap();
      break;
    case WHITESPACE_PRE_WRAP:
      require_once(HTML2PS_DIR . 'inline.content.builder.pre.wrap.php');
      $builder =& new InlineContentBuilderPreWrap();
      break;
    case WHITESPACE_PRE_LINE:
      require_once(HTML2PS_DIR . 'inline.content.builder.pre.line.php');
      $builder =& new InlineContentBuilderPreLine();
      break;
    default:
      trigger_error('Internal error: unknown whitespace enumeration value', E_USER_ERROR);
    };

    return $builder;
  }
}

?>