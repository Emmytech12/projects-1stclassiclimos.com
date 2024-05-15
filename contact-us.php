<?php include 'config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Contact Us | 24/7 Online and Offline Support</title>
    <meta name="keywords" content="Book online, Rate Lookup, Online Reservation, Lookup Rate, Limo Rental, Limousine, Shuttle, Car Service, Limo Transportation, Limo Rental, Limo to Airport, Airport, Shuttle to Airport, Oakland International Airport, San Francisco International Airport, San Jose International Airport, Napa Airport, Sacramento International Airport, Wine Tour, Wine Tasting, Wine Tour and Tasting, Limo wine tour, Limousine Wine Tour, Napa Wine, Sonoma Wine Tour, Livermore Wine Tour, Russian River Wine Tour, Corporate Transportation Car  Service, Sports Event Limousine, Night Out Limo, Airport Limousine, Airport Car Service, Wedding Limousine, Prom Limousine, Birthday Limousine, Airport Transfer, Bay Area Limo, Limo in San Francisco, Sightseeing Limo, Airport Transportation, Airport Shuttle, Napa Valley Wine Tour, Sonoma Valley Wine Tour, Livermore Valley Wine Tour, Wine Country Tour, Transportation service, Shuttle Service, Limousine Service, Black Car Service, OAK, SFO, SJC, SMF, Hourly transportation, Day Trip, Day tour, Point-to-point transportation, Hourly Limousine Service, Hourly Car Service, Hourly Transportation Car Service, Charter Bus Service, Bay Area, limo rentals, party buses, classic cars, stretch limo rental services, California, 1st classic, first classic" />
    <meta name="description" content=" For more information about us and the services we provide, please contact us at: (800) 658-5679 or by email at info@1stclassiclimos.com, and we will gladly assist you. "/>

    <meta property="og:title" content="<?php echo $thename?>  | Contact Us | 24/7 Online and Offline Support" />
    <meta property="og:image" content="<?php echo $website?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta property="og:description" content=" For more information about us and the services we provide, please contact us at: (800) 658-5679 or by email at info@1stclassiclimos.com, and we will gladly assist you. "/>

    <meta name="twitter:title" content="<?php echo $thename?> | Contact Us | 24/7 Online and Offline Support"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta name="twitter:image"  content="<?php echo $website?>/all-images/plugin-pix/1st-classic.jpg"/> 
    <meta name="twitter:description" content=" For more information about us and the services we provide, please contact us at: (800) 658-5679 or by email at info@1stclassiclimos.com, and we will gladly assist you. "/>
</head>

<body>
	<?php  include 'header.php'?>

    <section class="other-pages">
        <div class="other-pages-back-div">
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Contact Us</span></h1>
                <div class="text-div">
                    <p>Call 1-800-658-5679 or email at info@1stclassiclimos.com for your Airport transfer, point to point transportation, events limousine car service, wine tour and more.</p>
                </div>
                
                <div class="btn-div">
                    <a href="<?php echo $website_url?>/bookings" title="Book A Limo Now!">
                    <button class="btn" title="Book A Limo Now!">Book A Limo Now! <i class="bi-chevron-right"></i></button></a>
                    <a href="tel:1-800-658-5679" title="Contact Us">
                    <button class="btn right-btn" title="Contact Us">Call Us <span><i class="bi-telephone"></i> 1-800-658-5679</span></button></a>
                </div>                   
            </div>

            <div class="bookings-back-div" data-aos="fade-in" data-aos-duration="900">
                <?php $callclass->_BookingsForm($website_url);?>
            </div>
        </div>
    </section>

    

    <section class="others-pg-content-div">
        <section class="contact-hash-bg">
            <div class="bottom-body-div">
                <div class="bottom-div contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/mail.png" alt="<?php echo $thename?> Email Address"/></div>
                        
                        <div class="text">
                            <h2>MAIL US</h2>
                            <p>info@1stclassiclimos.com</p>
                        </div>                 
                    </div>
                </div>

                <div class="bottom-div contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/phone.png" alt="<?php echo $thename?> Phone Number"/></div>
                        
                        <div class="text">
                            <h2>CALL US</h2>
                            <p>+1-800-658-5679</p>
                        </div>                  
                    </div>
                </div>

                <div class="bottom-div contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                    <div class="icon img-div"><img src="all-images/images/location.png" alt="<?php echo $thename?> Office Address"/></div>

                        <div class="text">
                            <h2>LOCATION</h2> 
                            <p>San Francisco, CA 94111</p>
                        </div>                  
                    </div>
                </div>
            </div>
        </section>


        <section class="map-body-div">
            <div class="map-back-div"> 
                <iframe allowfullscreen="" class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100939.98555103048!2d-122.50764017948534!3d37.75781499657613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2snp!4v1596444244045!5m2!1sen!2snp"></iframe>
            </div>
        </section> 


        <section class="body-div">
            <div class="body-div-in">
                <div class="contact-mail-div" data-aos="fade-in" data-aos-duration="800">
                    <div class="inner-div">
                        <div class="div-in">
                            <div class="text-segment"><input class="text_field" id="fullname" placeholder="Full Name" /></div>
                            <div class="text-segment"><input class="text_field" id="email" placeholder="Email Address" /></div>
                            <input class="text_field" id="subject" placeholder="Subject"/>
                        </div>

                        <div class="div-in right-div-in">
                            <div class="text-segment"><textarea class="text_field text_area" id="message" placeholder="Message" rows="6"></textarea></div>
                            <button class="btn" onclick="_send_contact_email()">Send Mail</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'?>
    </section>
</body>
</html>


