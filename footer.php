
<footer class="footer-div">  
    <div class="footer-div-in"> 
        <div class="segment-back-div">
            <div class="segment-div logo-segment">
                <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php $thename?> Logo"></div>
                <p>We provide 24/7 car services for corporate transportation and wine tours, serving multiple towns and airports in the area and beyond.</p>
                <div class="icon-div">
                    <button class="social-icon"><i class="bi-facebook"></i></button>
                    <button class="social-icon"><i class="bi-whatsapp"></i></button>
                    <button class="social-icon"><i class="bi-instagram"></i></button>
                    <button class="social-icon"><i class="bi-linkedin"></i></button>
                    <button class="social-icon"><i class="bi-twitter"></i></button>
                    <button class="social-icon"><i class="bi-youtube"></i></button>
                    <button class="social-icon"><i class="bi-pinterest"></i></button>
                </div>
            </div>

            <div class="segment-div">
                <h3>Quick Link</h3>
                <ul>
                    <a href="<?php echo $website_url?>/bookings" title="Book A Ride Now">
                    <li><i class="bi-arrow-right"></i> Book A Ride Now</li></a>
                    <a href="<?php echo $website_url?>/account-login" title="Account SignUp / Login">
                    <li><i class="bi-arrow-right"></i> Account SignUp / Login</li></a>
                    <a href="<?php echo $website_url?>/contact-us" title="Contact Us">
                    <li><i class="bi-arrow-right"></i> Contact Us</li></a>
                    <a href="<?php echo $website_url?>/about-us" title="About Us">
                    <li><i class="bi-arrow-right"></i> About Us</li></a>
                    <a href="<?php echo $website_url?>/review-us" title="Review Us">
                    <li><i class="bi-arrow-right"></i> Review US</li></a>
                    <a href="<?php echo $website_url?>/blog/" title="Blog">
                    <li><i class="bi-arrow-right"></i> Blog & Articles</li></a>
                    <a href="<?php echo $website_url?>/faq" title="Frequently Asked Questions">
                    <li><i class="bi-arrow-right"></i> Frequently Asked Questions</li></a>
                    <a href="<?php echo $website_url?>/service-locations" title="Service Locations">
                    <li><i class="bi-arrow-right"></i> Service Locations</li></a>
                </ul>
            </div>

            <div class="segment-div">
                <h3>Official Links</h3>
                <ul>
                    <a href="<?php echo $website_url?>/terms-and-conditions" title="Terms & Conditions">
                    <li><i class="bi-arrow-right"></i> Terms & Conditions</li></a>
                    <a href="<?php echo $website_url?>/privacy-policy" title="Privacy Policy">
                    <li><i class="bi-arrow-right"></i> Privacy Policy</li></a>
                    <a href="<?php echo $website_url?>/cookies-policy" title="Cookies Policy">
                    <li><i class="bi-arrow-right"></i> Cookies Policy</li></a>                  <a href="<?php echo $website_url?>/affiliates" title="Affiliate Networks">
                    <li><i class="bi-arrow-right"></i> Affiliate Networks</li></a>                   
                </ul>
            </div>

            <div class="segment-div">
                <h3>Quick Conatct</h3>
                <div class="contact">
                    <div class="icon"><i class="bi-envelope-at"></i></div>
                    <div class="text-div">
                        <h4>Email Address</h4>
                        info@1stclassiclimos.com
                    </div>
                    <br clear="all" />
                </div>

                <div class="contact">
                    <div class="icon"><i class="bi-telephone-inbound"></i></div>
                    <div class="text-div">
                        <h4>Phone Number</h4>
                        1-800-658-5679
                    </div>
                    <br clear="all" />
                </div>

                <div class="contact">
                    <div class="icon"><i class="bi-geo-alt"></i></div>
                    <div class="text-div">
                        <h4>Location</h4>
                        San Fransisco, USA.
                    </div>
                    <br clear="all" />
                </div>

                <h3>Newsletter</h3>

                <div class="newsletter-text-div">
                    <input id="new_letter_email" class="text_field" placeholder="Enter your email..." />
                    <button class="btn" onclick="_add_news_letter()"><i class="bi-send"></i></button>
                </div>
            </div>
            <br clear="all" />
        </div>
    </div>
    <div class="main-bottom-div">
        <div class="div-in">
            <p>&copy; 2022 - <?php echo date("Y") ?> <span><?php echo $thename?></span>. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<?php include 'bottom-scripts.php'?>