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