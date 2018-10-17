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

require_once(HTML2PS_DIR . 'pipeline.class.php');

class PipelineFactory {
  function &create_default_pipeline($encoding, $filename) {
    $pipeline =& new Pipeline(); 

    if (isset($GLOBALS['g_config'])) {
      $pipeline->configure($GLOBALS['g_config']);
    } else {
      $pipeline->configure(array());
    };

//     if (extension_loaded('curl')) {
//       require_once(HTML2PS_DIR.'fetcher.url.curl.class.php');
//       $pipeline->fetchers[] = new FetcherUrlCurl();  
//     } else {
    require_once(HTML2PS_DIR . 'fetcher.url.class.php');
    $pipeline->fetchers[] = new FetcherURL();
//     };

    $pipeline->data_filters[] = new DataFilterDoctype();
    $pipeline->data_filters[] = new DataFilterUTF8($encoding);
    $pipeline->data_filters[] = new DataFilterHTML2XHTML();
    $pipeline->parser = new ParserXHTML();
    $pipeline->pre_tree_filters = array();
    $pipeline->layout_engine = new LayoutEngineDefault();
    $pipeline->post_tree_filters = array();
    $pipeline->output_driver = new OutputDriverFPDF();   
    $pipeline->output_filters = array();
    $pipeline->destination = new DestinationDownload($filename, ContentType::pdf());

    return $pipeline;
  }
}

?>
