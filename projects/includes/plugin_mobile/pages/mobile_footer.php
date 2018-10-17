</div>
</div>
</div>
        <?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-01-03 10:30:21 
  * IP Address: 119.95.119.2
  */ /* <div data-role="footer">
		<h4>Footer content</h4>
	</div><!-- /footer --> */ ?>

</div><!-- /page -->
<?php if(module_config::c('mobile_content_scroll',1) && module_security::is_logged_in()){ ?>
<script type="text/javascript">
    var contentscroll = [];
    var content = null;
    window.addEventListener("resize", function() {
        // Get screen size (inner/outerWidth, inner/outerHeight)
//        var headerheight = 20;
//        $('div[data-role="header"]').each(function(){
//            headerheight+= $(this).height();
//        });
//        if(content != null)content.width(window.innerWidth-10).height(window.innerHeight-headerheight);
//        if(contentscroll != null)contentscroll.refresh();
        for (var i in contentscroll){
            if(typeof contentscroll[i] == 'object'){
                contentscroll[i].refresh();
            }
        }
    }, false);

    $(function(){
        /*if(content == null){
            content = $('#mobile_content');
        }
        contentscroll = new iScroll(content[0] ,{
            onBeforeScrollStart: null,
            onTouchEnd: null,
            vScroll:true,
            hScroll:true,
            bounce: false,
            momentum: true,
            hScrollbar: false,
            vScrollbar: false
        });*/
        $('.iscroll').each(function(){
            contentscroll.push( new iScroll(this ,{
                onBeforeScrollStart: null,
                onTouchEnd: null,
                vScroll:true,
                hScroll:true,
                bounce: false,
                momentum: true,
                hScrollbar: false,
                vScrollbar: false
            }) );
        });
    });
</script>
<?php } ?>
</body>
</html>