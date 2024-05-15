<?php include 'config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title>Our Fleets - Limousines, Sedans, SUVs, Sprinter Vans, Party and Charter Buses | <?php echo $thename?></title>
    <meta name="keywords" content="Limo Rental, Limousine, Shuttle, Car Service, Limo Transportation, Limo Rental, Limo to Airport, Airport, Shuttle to Airport, Oakland International Airport, San Francisco International Airport, San Jose International Airport, Napa Airport, Sacramento International Airport, Wine Tour, Wine Tasting, Wine Tour and Tasting, Limo wine tour, Limousine Wine Tour, Napa Wine, Sonoma Wine Tour, Livermore Wine Tour, Russian River Wine Tour, Corporate Transportation Car  Service, Sports Event Limousine, Night Out Limo, Airport Limousine, Airport Car Service, Wedding Limousine, Prom Limousine, Birthday Limousine, Airport Transfer, Bay Area Limo, Limo in San Francisco, Sightseeing Limo, Airport Transportation, Airport Shuttle, Napa Valley Wine Tour, Sonoma Valley Wine Tour, Livermore Valley Wine Tour, Wine Country Tour, Transportation service, Shuttle Service, Limousine Service, Black Car Service, OAK, SFO, SJC, SMF, Hourly transportation, Day Trip, Day tour, Point-to-point transportation, Hourly Limousine Service, Hourly Car Service, Hourly Transportation Car Service, Charter Bus Service, Bay Area, limo rentals, party buses, classic cars, stretch limo rental services, California, 1st classic, first classic" />
    <meta name="description" content="Featured well-maintained fleets and non-smoking vehicles. Our whole fleets are of late models Limos, Sedans, SUVs, Sprinter Vans, and Charter buses for conventions, conferences, corporate transportations, and special events, ideal for large groups."/>

    <meta property="og:title" content="Our Fleets - Limousines, Sedans, SUVs, Sprinter Vans, Party and Charter Buses | <?php echo $thename?>" />
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta property="og:description" content="Featured well-maintained fleets and non-smoking vehicles. Our whole fleets are of late models Limos, Sedans, SUVs, Sprinter Vans, and Charter buses for conventions, conferences, corporate transportations, and special events, ideal for large groups."/>

    <meta name="twitter:title" content="Our Fleets - Limousines, Sedans, SUVs, Sprinter Vans, Party and Charter Buses | <?php echo $thename?>"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta property="og:image" content="<?php echo $website_url?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta name="twitter:description" content="Featured well-maintained fleets and non-smoking vehicles. Our whole fleets are of late models Limos, Sedans, SUVs, Sprinter Vans, and Charter buses for conventions, conferences, corporate transportations, and special events, ideal for large groups."/>
</head>

<body>
	<?php  include 'header.php'?>

    <section class="other-pages">
        <div class="other-pages-back-div">
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Our Fleets </span></h1>
                <div class="text-div">
                    <p>Our whole fleets are of latest models Limos, Sedans, SUVs, Sprinter Vans, and Charter buses for conventions, conferences, etc</p>
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
        <?php  include 'bottom-info.php'?>
        
        <section class="body-div">
            <div class="body-div-in">
                <div class="right-left-back-div">
                    <div class="left-div">
                
                        <div class="main-pg-list-back-div fleet-pg-back-div">
                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-sedan.png" alt="Sonoma Valley Wine Country"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class Sedan</h2>

                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $74.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                   
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div>                                  
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-suv.png" alt="Executive Suv"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class Suv</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $94.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 6</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-van.jpg" alt="Executive Sprinter Van"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class Sprinter Van</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $159.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-limo.png" alt="Executive Sedan"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class Stretch Limo</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $199.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-sprinter-limo.png" alt="Executive Class Sprinter Limo"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class Sprinter Limo</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $179.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 12</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-hummer.jpg" alt="Executive Hummer"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class H2 Hummer Limo</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $249.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/party-bus.png" alt="Executive Party Bus"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class Limo Party Bus</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $249.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span>25</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/charter-bus.jpg" alt="Executive Charter Bus"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class Charter Bus</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $239.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 35</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-hummer.jpg" alt="Executive Hummer"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class H2 Hummer Limo</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $249.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-hummer.jpg" alt="Executive Hummer"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class H2 Hummer Limo</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $249.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-hummer.jpg" alt="Executive Hummer"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class H2 Hummer Limo</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $249.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>

                            <div class="main-fleet-list-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url?>/all-images/body-pix/executive-hummer.jpg" alt="Executive Hummer"/>
                                </div>

                                <div class="text-div">
                                    <h2>Executive Class H2 Hummer Limo</h2>
                                  
                                    <div class="price-back-div">
                                        <div class="price-div">
                                            <p>Price: <span> $249.99 / Hour</span></p> 
                                        </div>

                                        <div class="price-div no-border">
                                            <p>Passenger: <span> 14</span></p> 
                                        </div>
                                    </div>
                                    
                                    <div class="btn-div">
                                        <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button></a>
                                    </div> 
                                </div>
                            </div>
                           
                        </div>
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h2>EXPLORE</h2>
                            <div class="fleet-list-div">
                                <ul>
                                    <a href="<?php echo $website_url?>/airport-transportation-limousine-car-service" title="Our Services!">
                                    <li><i class="bi-check2-circle"></i> Our Services</li></a>
                                    <a href="<?php echo $website_url?>/fleet" title="Fleets">
                                    <li><i class="bi-check2-circle"></i> Fleets </li></a>
                                    <a href="<?php echo $website_url?>/wine-country-region-of-northern-california" title="Wine Tour">
                                    <li><i class="bi-check2-circle"></i> Wine Tour</li></a>
                                    <a href="<?php echo $website_url?>/tour-special-package-deals" title="Package Deals">
                                    <li><i class="bi-check2-circle"></i> Package Deals</li></a>                                                  
                                </ul>
                            </div>                                                               
                        </div>
                  
                        <a href="<?php echo $website_url?>/bookings" title="Book a ride now!">
                        <div class="btn-div">
                            <button class="btn" title="Book a ride now"><i class="bi-car-front-fill"></i> Book a ride now!</button>
                        </div></a>
                    </div> 
                    <br clear="all"/>              
                </div>
            </div>
        </section>


        <section class="body-div">
            <div class="service-body">
                <div class="main-pages-back-div">
                    <div class="service-title" data-aos="fade-in" data-aos-duration="800"> 
                        <span>1ST CLASSIC SERVICING AREAS</span>                     
                        <h2><i class="bi-geo-alt"></i> Service Locations</h2>
                        <div class="icon-div">
                            <img src="<?php echo $website_url?>/all-images/images/bg-header.png" alt="Icon Image"/>
                        </div>
                    </div>

                    <div class="location-back-div">
                        <div class="service-location">  
                            <ul id="locationList">
                                <li>Alamo to San Francisco</li>
                                <li>Alameda to San Francisco </li>
                                <li>Rodeo to San Francisco</li>
                                <li>Alamo to San Francisco</li>
                                <li>Albany to San Francisco </li>
                                <li>Alum Rock to San Francisco </li>
                                <li>Alviso to San Francisco</li>
                                <li>Antioch Airport Transportation</li>
                                <li>Aptos Airport Transportation</li>
                                <li>Antioch Airport Transportation</li>
                                <li>Arlington Texas Airport Transportation</li>
                                <li>Atherton Airport Transportation</li>
                                <li>Atherton Airport Transportation</li>
                                <li>Benicia Airport Transportation</li>
                                <li>Benicia to San Francisco</li>
                                <li>Berkeley Airport Transportation</li>
                                <li>Berkeley to San Francisco </li>
                                <li>Bethel Island to San Francisco </li>
                                <li>Big Sur Airport Transportation</li>
                                <li>Blackhawk Airport Transportation </li>
                                <li>Blackhawk to San Francisco</li>
                                <li>Bodega Bay to San Francisco</li>
                                <li>Brentwood Airport Transportation </li>
                                <li>Brentwood to San Francisco</li>
                                <li>Burlingame Airport Transportation</li>
                                <li>Burlingame to San Francisco</li>
                                <li>Byron to San Francisco</li>
                                <li>Calistoga Airport Transportation</li>
                                <li>Calistoga to San Francisco</li>
                                <li>Campbell Airport Transportation</li>
                                <li>Campbell to San Francisco</li>
                            </ul>
                        </div>
                        <button class="btn" id="toggleButton">Show More</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="body-div">
            <div class="service-body services-body">
                <div class="main-pages-back-div">
                    <div class="service-title" data-aos="fade-in" data-aos-duration="1200"> 
                        <span>1ST CLASSIC SERVICES</span>                     
                        <h2><i class="bi-ev-front"></i> Our Services</h2>
                        <div class="icon-div">
                            <img src="<?php echo $website_url?>/all-images/images/bg-header.png" alt="Icon Image"/>
                        </div>
                    </div>

                    <div class="location-back-div">
                        <div class="service-location">  
                            <ul>
                                <li>Airport Transportation</li>
                                <li>Corporate Transportation Black Car Services </li>
                                <li>Point to Point Transportation Limousine Car Service</li>
                                <li>Prom and Graduation Transportation Limousine Car Service</li>
                                <li>Night Out In Town Transportation Limousine Car Service</li>
                                <li>Sports Events Transportation Limousine Car Service </li>
                                <li>Wine Tasting Tour Transportation Limousine Car Service.</li>
                                <li>Concert Events Transportation Limousine Car Service</li>
                                <li>Wedding Transportation Limousine Car Service</li>
                                <li>Medical Doctor's Appointment Transportation Car Service</li>
                                <li>Bachelor or Bachelorette Transportation Limousine Car Service</li>
                                <li>Corporate Events Transportation Charter Bus Service</li>                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br clear="all"/>
        </section>
        
    
        <?php include 'footer.php'?>
    </section>
</body>
</html>


