
<?php include 'alert.php'?>

<header class="fadeInDown animated"> 
    <div class="header-top-div">
        <div class="div-in">
            <div class="contact-back-div">
                <div class="contact-div email-div"><i class="bi-envelope"></i> <p>info@1stclassiclimos.com</p></div>
                <div class="contact-div"><i class="bi-telephone"></i> <p>1-800-658-5679</p></div>
                <div class="contact-div time-div"><i class="bi-clock"></i> <p>Mon - Sun 24/7 Service</p></div>
            </div>

            <div class="media-back-div">
                <ul>
                    <a href="https://api.whatsapp.com/send?text=Hello 1stClassic&amp;phone=+14159371660" target="_blank" title="Whatsapp">
                    <li><i class="bi-whatsapp"></i></li></a>
                    <a href="https://web.facebook.com/1stclassiclimos" target="_blank" title="Facebook">
                    <li class="li"><i class="bi-facebook"></i></li></a>
                    <a href="https://twitter.com/1stclassiclimos" target="_blank" title="Twitter">
                    <li class="li"><i class="bi-twitter"></i></li></a>
                    <a href="https://www.linkedin.com/company/1stclassiclimos" target="_blank" title="Linkedin">
                    <li class="li"><i class="bi-linkedin"></i></li></a>
                    <a href="https://www.instagram.com/1stclassiclimos/" target="_blank" title="Instagram">
                    <li class="li"><i class="bi-instagram"></i></li></a>
                    <a href="https://www.pinterest.com/1stclassic" target="_blank" title="Pinterest">
                    <li class="li"><i class="bi-pinterest"></i></li></a>
                </ul>
            </div>
        </div>   
    </div> 

    <div class="header-div-in">
        <div class="logo-div">
            <a href="<?php echo $website_url?>">
            <img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
        </div>

        <nav>
            <ul>                          
                <a href="<?php echo $website_url ?>/airport-transportation-limousine-car-service" title="Our Services">
                    <li <?php if (($website_auto_url=="$website_url/airport-transportation-limousine-car-service")) {?> class="active" <?php }?>>
                        Our Services
                          
                    </li>
                </a>

                <a href="<?php echo $website_url?>/tour-special-package-deals" title="Package Deals">
                    <li class="package-deals <?php if (strstr($website_auto_url, "$website_url/tour-special-package-deals")) {?> active <?php }?>">
                        Package Deals
                    </li>
                </a>

                <a href="<?php echo $website_url?>/fleet" title="Fleet">
                    <li class="fleet <?php if (strstr($website_auto_url, "$website_url/fleet")) {?> active <?php }?>">
                        Fleet
                    </li>
                </a>

                <a href="<?php echo $website_url?>/wine-country-region-of-northern-california" title="Wine tour">
                    <li class="wine-tour <?php if (strstr($website_auto_url, "$website_url/wine-country-region-of-northern-california")) {?> active <?php }?>">
                        Wine tour
                    </li>
                </a>

                <a href="<?php echo $website_url?>/blog/" title="Blog">
                    <li class="blog <?php if (strstr($website_auto_url, "$website_url/blog")) {?> active <?php }?>">
                        Blog
                    </li>
                </a>

                <li id="expand-div" class="read-more account-login <?php if (strstr($website_auto_url, "$website_url/more")) {?> active <?php }?>">
                    My Account <i class="bi-person"></i>
                    <div class="sub-div animated fadeIn">
                        <ul class="ul-class">
                            <a href="<?php echo $website_url?>/account-login" title="Account Login">
                            <li class="li">Account Login</li></a>
                            <a href="<?php echo $website_url?>/account-register" title="Account Sign-Up">
                            <li class="li">Account Sign-Up</li></a>                           
                        </ul>
                    </div>
                </li>

                <li id="expand-div" class="read-more <?php if (strstr($website_auto_url, "$website_url/more")) {?> active <?php }?>">
                    Read More <i class="bi-plus"></i>
                    <div class="sub-div animated fadeIn">
                        <ul class="ul-class">
                            <a href="<?php echo $website_url?>/fleet" title="Fleet">
                            <li class="li">Fleet</li></a>
                            <a href="<?php echo $website_url?>/wine-country-region-of-northern-california" title="Wine tour">
                            <li class="li">Wine tour</li></a>
                            <a href="<?php echo $website_url?>/blog/" title="Blog">
                            <li class="li">Blog</li></a>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="btn-div">
            <a href="<?php echo $website_url?>/bookings" title="Book a ride now!">
            <button class="btn" title="Book a ride now!"><i class="bi-car-front-fill"></i> Book a ride now!</button></a>
            <button class="mobile-btn" onclick="_open_menu()"><i class="bi-list"></i></button>
        </div>
    </div> 
</header>