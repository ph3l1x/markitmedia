<?php
//get vars
$page = 0;
$pageName = 'Home Page - Quick Quote';
$title = 'Web Design Scottsdale, Print, Graphics, SEO, Marketing, Phoenix Arizona';
$description = 'Call (480) 245-4287 - Markit Media is a Professional Website Development, Print, Graphic Design, Marketing, SEO, Studio in Old Town Scottsdale, Arizona.';
$keywords = 'Scottsdale Web Design, Web Development Phoenix, LAMP Developer, Magento Commerce, Scottsdale Print, Scottsdale Graphic Design, SEO Scottsdale, Marketing Scottsdale, Php Programming Scottsdale, magento web development,';
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and eCommerce web sites with HTML and Flash designs. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('header-googlesearch.php');
?>

<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
				<div id="cse" style="width:950px;">Loading</div>
				<script src="//www.google.com/jsapi" type="text/javascript"></script>
				<script type="text/javascript"> 
				  google.load('search', '1', {language : 'en'});
				  google.setOnLoadCallback(function() {
					var customSearchOptions = {};  var customSearchControl = new google.search.CustomSearchControl(
					  '018197743786862697931:yxqu9cobdy0', customSearchOptions);
					customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
					customSearchControl.draw('cse');
					function parseParamsFromUrl() {
					  var params = {};
					  var parts = window.location.search.substr(1).split('\x26');
					  for (var i = 0; i < parts.length; i++) {
						var keyValuePair = parts[i].split('=');
						var key = decodeURIComponent(keyValuePair[0]);
						params[key] = keyValuePair[1] ?
							decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
							keyValuePair[1];
					  }
					  return params;
					}
				
					var urlParams = parseParamsFromUrl();
					var queryParamName = "q";
					if (urlParams[queryParamName]) {
					  customSearchControl.execute(urlParams[queryParamName]);
					}
				  }, true);
				</script>
				<link rel="stylesheet" href="css/google-search.css" type="text/css" /> 
            </div>
            <div class="hr"></div>
<?php
require_once('footer.php');
?>