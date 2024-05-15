<div class="all-alert-back-div">
    <div class="success-alert-div animated fadeInUp">
        <div class="icon"><i class="bi-check-all"></i></div> 
        <div class="text"><p>PASSWORD RESET SUCCESSFUL! Check your email to confirm.</p></div>
    </div>
</div>

<div id="get-more-div"></div>
<div id="get-more-div-secondary"></div>












<div class="sidenavdiv">
    <div class="sidenavdiv-in" onclick="_close_side_nav()"></div>
</div>


<div class="live-chat-back-div"> 

    <a href="tel:1-800-658-5679" title="Call Customer Care">
        <div class="chat-div">
            <div class="icon-div" style="background:#008040;"><i class="bi-telephone-outbound"></i></div>
            <div class="text">1-800-658-5679</div>
          <br clear="all" />
        </div>
    </a>
    <a href="https://api.whatsapp.com/send?text=Hello 1stClassic&amp;phone=+14159371660" target="_blank" title="Whatsapp">
        <div class="chat-div">
            <div class="icon-div" style="background:#25D366;"><i class="bi-whatsapp"></i></div>
            <div class="text">+234-812-700-0262</div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://web.facebook.com/1stclassiclimos" target="_blank" title="Facebook">
        <div class="chat-div">
            <div class="icon-div" style="background:#2980b9;"><i class="bi-facebook"></i></div>
            <div class="text">Facebook Page </div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://twitter.com/1stclassiclimos" target="_blank" title="Twitter">
        <div class="chat-div">
            <div class="icon-div" style="background:#3498db;"><i class="bi-twitter"></i></div>
            <div class="text">Twitter Page</div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://www.instagram.com/1stclassiclimos/" target="_blank" title="Instagram">
        <div class="chat-div">
            <div class="icon-div" style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></div>
            <div class="text">Instagram Page</div>
          <br clear="all" />
        </div>
    </a>
  
</div>


<div class="index-menu-back-div"> 
    <div class="top-div">
        <div class="logo-div">
            <a href="<?php echo $website_url?>"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
        </div>
    </div>

    <div class="div-in">
        <div class="div">
            <a href="<?php echo $website_url;?>" title="Home Page">
            <li <?php if ($page=='index.php') {?> id="active-li"<?php }?>><i class="bi-house"></i> Home Page</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url ?>/about-us" title="About Us">
            <li <?php if ($page=='about-us.php') {?> id="active-li"<?php }?>><i class="bi-building"></i> About Us</li></a>
        </div>

        <div class="div">
            <li onclick="_open_li('service')"><i class="bi-activity"></i> Our Services <i class="bi-plus" id="side-expand"></i></li>
            <div class="sub-li" id="service-sub-li">
                <a href="<?php echo $website_url;?>/airport-transportation" title="Airport Transportation">
                <li> Airport Transportation</li></a>

                <a href="<?php echo $website_url;?>" title="Corporate Transportation Black Car Services ">
                <li> Corporate Transportation Black Car Services </li></a>

                <a href="<?php echo $website_url;?>" title="Point to Point Transportation Limousine Car Service">
                <li> Point to Point Transportation Limousine Car Service</li></a>

                <a href="<?php echo $website_url;?>" title="Prom and Graduation Transportation Limousine Car Service">
                <li> Prom and Graduation Transportation Limousine Car Service</li></a>

                <a href="<?php echo $website_url;?>" title="Night Out In Town Transportation Limousine Car Service">
                <li> Night Out In Town Transportation Limousine Car Service</li></a>

                <a href="<?php echo $website_url;?>" title="Sports Events Transportation Limousine Car Service ">
                <li> Sports Events Transportation Limousine Car Service </li></a>
            </div>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/tour-special-package-deals" title="Package Deals">
            <li <?php if ($page=='our-agents.php') {?> id="active-li"<?php }?>><i class="bi-box2-heart"></i> Package Deals</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/wine-country-region-of-northern-california" title="Wine Ttours">
            <li <?php if ($page=='wine-country-region-of-northern-california.php') {?> id="active-li"<?php }?>><i class="bi-cup-straw"></i> Wine Tours</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/fleet" title="Fleets">
            <li <?php if ($page=='fleet.php') {?> id="active-li"<?php }?>><i class="bi-truck"></i> Fleets</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/bookings" title="Bookings">
            <li <?php if ($page=='bookings.php') {?> id="active-li"<?php }?>><i class="bi-currency-dollar"></i> Look Up Rate</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/service-locations" title="Service Locations">
            <li <?php if ($page=='service-locations.php') {?> id="active-li"<?php }?>><i class="bi-geo-alt-fill"></i> Service Locations</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/blog/" title="Blog">
            <li <?php if ($page=='blog.php') {?> id="active-li"<?php }?>><i class="bi-image-alt"></i> Blog</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/faq" title="Frequently Asked Questions">
            <li <?php if ($page=='faq.php') {?> id="active-li"<?php }?>><i class="bi-question-octagon"></i> Frequently Asked Questions</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/contact-us" title="Contact Us">
            <li <?php if ($page=='contact-us.php') {?> id="active-li"<?php }?>><i class="bi-telephone-inbound-fill"></i> Contact Us</li></a>
        </div>
        
        
        <div class="div puple">
            <a href="<?php echo $website_url?>/bookings" title="Bookings">
            <li><i class="bi-hand-index-thumb"></i> Book A Ride Now</li></a>
        </div>
            
        <div class="div hash">
            <a href="<?php echo $website_url?>/account-login" title="Account LogIn">
            <li><i class="bi-shield-lock"></i> Account Login</li></a>
        </div>

        <div class="div hash">
            <a href="<?php echo $website_url?>/account-register" title="Account Sign Up">
            <li><i class="bi-shield-lock"></i> Account Sign-Up</li></a>
        </div>

        <div class="menu-title" style="height:100px;"> &nbsp;</div>
    </div>
    
</div> 