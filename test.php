<?php
//get vars
$page = 0;
$pageName = 'Home Page - Quick Quote';
$title = 'Markit Media - Scottsdale Printing, Graphics, Website Design, SEO';
$description = "Call 480.245.4287 Scottsdale's Best Print Shop, Signs, Web Marketing, Graphic Design, Website Developer & (SEO) Search Engine Optimization in Old Town Scottsdale Serving the Phoenix Area";
$keywords = "Scottsdale Web Design, Web Development Phoenix, LAMP Developer Scottsdale, Magento ECommerce Scottsdale, Scottsdale Printing, Scottsdale Graphic Design, Search Engine Optimization Scottsdale, Marketing Scottsdale, Php Programming Scottsdale, magento website development phoenix,";
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and eCommerce web sites. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('header.php');
?>

<div class="wrapper">
    <div id="slider-2">


    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider2_container" style="position: relative; width: 999px;
        height: 502px; overflow: hidden;">
        <style>
            /* this line can be removed, but it really helps in case of css conflicts in your page */
            .slider1 div { position: relative; margin: 0px; padding: 0px; }
        </style>

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center; top: 0px; left: 0px;width: 100%;height:100%; background-color: rgba(255, 255, 255, 0.8);">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 999px;  height: 502px;
            overflow: hidden;">
            
          
            
            <div>

                <a href="https://www.youtube.com/watch?v=Euro-NmKAck" target="_blank"><img
                        src="images/MarkitMedia_YoutubeCreateVideo_3.png" style="border-radius: 23px;"/></a>
            </div>
            <div>

                <img src="images/milliondollarslider1_3.jpg" style="border-radius: 23px;"/>

            </div>
            <div>

                <a href="http://markitmedia.espwebsite.com/"><img src="images/slide_f_3.png"
                                                                                  style="border-radius: 23px;"/></a>
            </div>
            <div>

                <a href="marketing/seo-sem-marketing"><img src="images/MarkitMedia_SEO_Web_3.png"
                                                           style="border-radius: 23px;"/></a>
            </div>
            <div>

                <img src="images/MarkitMedia_TradeShowDisplay_Slider2_3.jpg" style="border-radius: 23px;"/>
            </div>

        </div>

        <!-- Bullet Navigator Skin Begin -->
        <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div (normal)
            .jssorb03 div:hover (normal mouseover)
            .jssorb03 .av (active)
            .jssorb03 .av:hover (active mouseover)
            .jssorb03 .dn (mousedown)
            */
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
            {
            background: url(../img/b03.png) no-repeat;
            overflow:hidden;
            cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="position: absolute; bottom: 16px; left: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"
                 style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;">
                <NumberTemplate></NumberTemplate>
            </div>
        </div>
        <!-- Bullet Navigator Skin End -->

        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 20 css */
            /*
            .jssora20l (normal)
            .jssora20r (normal)
            .jssora20l:hover (normal mouseover)
            .jssora20r:hover (normal mouseover)
            .jssora20ldn (mousedown)
            .jssora20rdn (mousedown)
            */
            .jssora20l, .jssora20r, .jssora20ldn, .jssora20rdn
            {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url(../img/a20.png) no-repeat;
            overflow:hidden;
            }
            .jssora20l { background-position: -3px -33px; }
            .jssora20r { background-position: -63px -33px; }
            .jssora20l:hover { background-position: -123px -33px; }
            .jssora20r:hover { background-position: -183px -33px; }
            .jssora20ldn { background-position: -243px -33px; }
            .jssora20rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">slideshow</a>
        <!-- Trigger -->

    </div>
    <!-- Jssor slider End -->


</div>
    <!-- slider- 2 End -->
    <div id="quote">
    <div id="form_note">
        <p> GET A QUICK QUOTE </p>
    </div>

        
        
        
        
        
    <form id="quick" action="functions/process_markit.php"  onsubmit="validate_form(this)" method="post">
        <input type="hidden" name="page" value="Home Page - Quick Quote"/>

  <div class="wrap_field">     
      <div class="wrap_label">
        <label class="quote_label" id="title1" for="Field1">Name:</label>
      </div>
        
        <div class="field">
            <input id="name" class="text" type="text" name="name"/>
        </div>
        
   </div>      
        
        
        
        
  <div class="wrap_field">  
      <div class="wrap_label">
        <label class="quote_label" id="title2" for="Field1">E-Mail:</label>
      </div>
      
        <div class="field">
            <input id="email" class="text" type="text" name="email"/>
        </div>
   </div>      
  
        
        
  <div class="wrap_field">  
      <div class="wrap_label">
        <label class="quote_label" id="title2" for="Field1">Phone:</label>
      </div>     
        
        <div class="field">
            <input  class="text" type="text" name="phone"/>
        </div>
  </div>
        
        
        
        
        
        
        <div class="field" style="display:none;">
            <textarea id="comments" name="comments"></textarea>
        </div>
        
        
        <select style="display:none;" name="service" id="source">
            <option value="0" selected="selected">*Please Select Service</option>
            <option value="Web Design">Web Design</option>
            <option value="Print">Print</option>
            <option value="Graphic Design">Graphic Design</option>
            <option value="Marketing">Marketing</option>
            <option value="Business Starter Package">Business Starter Package</option>
            <option value="Other">Other</option>
        </select>

        
        
       
    <div class="wrap_field">  
      <div class="wrap_label">
        <label class="quote_label" id="title2" for="Field1">Service:</label>
      </div>     
      
        
        
    <div class="field"> 
        <div id="dropdown"> </div>
      </div> 
        
        
        </div>      
     <div id='recaptcha' class="g-recaptcha"
          data-sitekey="6LfLbh0UAAAAAOiZXYkyuA64p3tihISq7DIibxcU"
          data-callback="onSubmit"
          data-size="invisible"></div>
    <!-- <button id='btnsubmit'>submit</button> -->
      <!-- <input id='submit' type="submit" value="Submit"> -->
   <input id="btnsubmit" class="img" type="image" src="images/quote_btn.png" width="169" height="72" border="0"/> 
       <!-- <button class="g-recaptcha" data-sitekey="6LfLbh0UAAAAAOiZXYkyuA64p3tihISq7DIibxcU" data-callback='onSubmit'>Submit</button> -->
       

   <script>onload();</script>
    </form>
        
        
        
        
        
        
        
</div>
    <div class="clear"></div>
    <div id="boxes">

    <div class="maincontent">
        <div class="section group">


            <div class="col span_1_of_4 col1">

                <div class="redbox" id="box1-2" style="background-image: url(/images/box1.png); background-repeat: no-repeat;">
                    <a href="web-design/">We have a range of web services for small to large businesses.</a>
                </div>

            </div>
            <div class="col span_1_of_4 col2">

                <div class="redbox" id="box2-2" style="background-image: url(/images/box2.png); background-repeat: no-repeat;">
                    <a href="marketing/seo-sem-marketing">Rank your business online with Search Engine Optimization and
                        Marketing.</a>
                </div>

            </div>

            <div class="floatbreak"></div>

            <div class="col span_1_of_4 col3">

                <div class="redbox" id="box3-2" style="background-image: url(/images/box3.png); background-repeat: no-repeat;">
                    <a href="graphics/">Brand your business with professional graphic design and printed material.</a>
                </div>

            </div>

            <div class="col span_1_of_4 col4">

                <div class="redbox" id="box4-2" style="background-image: url(/images/box4.png); background-repeat: no-repeat;">
                    <a href="http://promo.markitmedia.com/">Looking for promo products?<br>
You’ve come to the right place!</a>
                </div>

            </div>


        </div>
    </div>

</div>
    <div class="clear"></div>
</div>


<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">
			
<div class="ribbon_0">	<img src="images/welcome_bg.png" width="979" height="79" border="0" /> </div>


    <div class="left main_page">
        <div id="left_ribbon" style="margin-bottom: 15px;"><H2>WELCOME TO MARKIT MEDIA</H2></div>
                	<h1>Old Town Scottsdale's Complete Marketing, Print, Web and Graphic Design Company for the Greater Phoenix Area</h1>
                    <p>Markit Media Group specializes in custom graphic and web design, marketing and advertising for small to large companies and startup businesses. We will work closely with you to create a professional looking website that is easy to use, a logo design that dazzles, and a marketing plan that actually builds business.</p>
                    <p>Markit Media Group provides custom, professional, affordable website design and development services. We'll create a unique website that appeals to your audience and communicates your message to them.</p>
<p>Markit Media provides everything you need to market your business locally and online.</p>
<p><strong>We can help you</strong>:</p>
<ul class="we-can-help" style="padding-left:1em">
 <li>Get a better mobile responsive and user friendly website</li>
 <li>Improve local search engine visibility (SEO)</li>
 <li>Maintain a relevant blog</li>
 <li>Create effective email campaigns</li>
 <li>Be active and make an impact on social media</li>
 <li>Get quality advice one-on-one with a marketing coach</li>
 <li>Run targeted AdWords and Facebook Advertising campaigns</li>
 <li>Build a long-term marketing plan that works specifically for your business</li>
 <li>Creative printing from posters to business cards, flyers, banners, etc.</li>
</ul>                
</div>
                <div class="right">
                    <div id="right_ribbon"><H2>SPECIALS/ SERVICES</H2></div>
                	<div class="special">
                        <img src="images/business_cards.jpg" width="140" height="82" align="left" border="0">
                         <h2><a href="print/business-cards">$59 Business Cards</a></h2>
                        <p>1,000 Full color, UV Coated, 16pt Business Cards.</p>
                        
                        <div class="clear"></div>
                    </div>
                    
                    
                    <div class="special">
                        <img src="images/flyers.jpg" width="140" height="82" align="left" border="0" />
                        <h2><a href="print/flyers-postcards">$99 4x6 Flyers</a></h2>
                        <p>1,000 Full color, UV Coated, 16pt Flyers / Postcards.</p>
                        <div class="clear"></div>
                    </div>
                    
                    
                    <div class="special">
                        <img src="images/Craigslist-Business-Starter-Package.jpg" width="140" height="auto" align="left" border="0" />
                        <h2><a href="web-design/business-starter-package">$2975 Business Starter Package</a></h2>
                        <p>5 Page Custom Design Website, Basic SEO and Analytics, Logo Design, 1,000 Business Cards, 1,000 4x6 Flyers, Custom Letterhead / Envelope Design.</p>
                        <div class="clear"></div>
                    </div>

                   <div class="youtube-container">
                    	<iframe id="yt_main" width="415" height="233" src="https://www.youtube.com/embed/bH5obomQIMI" frameborder="0" allowfullscreen></iframe>
		          </div>


                </div>   <!-- End right -->

		<div class="clear"></div>
            </div>
        	<div class="hr"></div>
        	<div class="portfolio main_page">
            	<div class="left">
            		<a href="portfolio/"><img src="images/portfolio_header.png" alt="Our Portfolio" width="213" height="84" border="0" /></a>
                    <p>View our latest work for great clients, ranging from web, graphics and print.</p>
                </div>
                <div class="right content_block_03">
                	<img src="images/portfolio_img.jpg" class="rimg_01" width="700" height="191" border="0" />
                </div>
                <div class="clear"></div>
            </div>
            <div class="hr"></div>

<?php
require_once('footer.php');
?>