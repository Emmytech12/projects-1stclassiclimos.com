<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | <?php echo $page_title?></title>
    <meta name="keywords" content="<?php echo $seo_keywords?>" />
    <meta name="description" content="<?php echo $seo_description?>"/>

    <meta property="og:title" content="<?php echo $thename?> | <?php echo $page_title?>" />
    <meta property="og:image" content="<?php echo $website?>/uploaded_files/seo-flyer/<?php echo $seo_flyer?>"/>
    <meta property="og:description" content="<?php echo $seo_description?>"/>

    <meta name="twitter:title" content="<?php echo $thename?> | <?php echo $page_title?>"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta name="twitter:image"  content="<?php echo $website?>/uploaded_files/seo-flyer/<?php echo $seo_flyer?>"/> 
    <meta name="twitter:description" content="<?php echo $seo_description?>"/>
</head>
<body>

    <?php  include 'header.php'?>

    <section class="other-pages">
        <div class="other-pages-back-div">
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800">Airport Transportation</h1>
                <div class="text-div">
                    <p>Book an Airport Transportation, Car, Sedan, SUV, and Van services for Airport Transfer To and From San Francisco (SFO), Oakland, San Jose (SJC), Sacramento (SMF).</p>
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
                <div class="each-pages-back-div">
                    <div class="page-div">
                        <div class="img-div" data-aos="fade-in" data-aos-duration="800">
                            <img src="<?php echo $website_url?>/all-images/body-pix/airpot-transportation-pg.jpg" alt="About Us"/>
                        </div>

                        <div class="content-div" data-aos="fade-in" data-aos-duration="800">                      
                            <h2>On time, in Style with the Greatest of Ease </h2>
                            <p>When you book your Airport Transportation ride with us, you can be assured of a safe, courteous, and comfortable ride. Our professional Chauffeur is certified and trained with the surrounding traffic patterns of the city and the Airport we serve, to in a clean and comfortable vehicle to be at your exact pickup location on time. Guaranteeing of getting you safely to or from your destination on time.</p>
                            <p>With well-maintained and non-smoking vehicles, our fleets are of late models Limos, Sedans, SUVs, Sprinter Vans, and Charter buses for conventions, conferences, corporate transportation, and special events, ideal for large groups.</p>                          
                            <p>We are available 24/7 for Airport Transportation To and From San Francisco Intl. Airport (SFO), Oakland Intl. Airport (OAK), and San Jose Intl. Airport (SJC). You can BOOK online or call us directly at (800) 658-5679</p>                                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="body-div">
            <div class="body-div-in">
                <div class="page-form-back-div">
                    <div class="left-div">
                        <div class="page-list-back-div">
                            <div class="page-form-div">
                                <div class="page-title">AVERAGE TRANSFER RATE -- <span> SAN JOSE INTERNATIONAL AIRPORT (SJC)</span></div>

                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%" id="transaction-table">
                                        <tr class="tb-title">
                                            <td>sn</td>
                                            <td>Airport</td>
                                            <td>Vehicle Type</td>
                                            <td>Passengers Max Capacity</td>
                                            <td>Transfer Rate. To & Fro</td>
                                        </tr>
                                
                                        <tr>
                                            <td>1</td>
                                            <td>San Francisco International Airport (SFO)</td>
                                            <td>Executive Class Sedan</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$124.30</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>San Francisco International Airport (SFO)</td>
                                            <td>Executive Class SUV</td>
                                            <td>Up to 6 passengers</td>
                                            <td>$171.94</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>San Francisco International Airport (SFO)</td>
                                            <td>VIP Class Sedan - s550 Benz</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$207.90</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>San Francisco International Airport (SFO)</td>
                                            <td>VIP Class SUV</td>
                                            <td>Up to 6 passengers</td>
                                            <td>$195.64</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>San Francisco International Airport (SFO)</td>
                                            <td>Executive Class Sprinter Van</td>
                                            <td>Up to 14 passengers</td>
                                            <td>$426.85</td>
                                        </tr>
                                    </table>
                                </div>                                    
                            </div>  
                            
                            <div class="page-form-div">
                                <div class="page-title">AVERAGE TRANSFER RATE -- <span> OAKLAND INTERNATIONAL AIRPORT (OAK)</span></div>

                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%" id="transaction-table">
                                        <tr class="tb-title">
                                            <td>sn</td>
                                            <td>Airport</td>
                                            <td>Vehicle Type</td>
                                            <td>Passengers Max Capacity</td>
                                            <td>Transfer Rate. To & Fro</td>
                                        </tr>
                                
                                        <tr>
                                            <td>1</td>
                                            <td>Oakland International Airport (OAK)</td>
                                            <td>Executive Class Sedan</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$114.99</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Oakland International Airport (OAK)</td>
                                            <td>Executive Class SUV</td>
                                            <td>Up to 6 passengers</td>
                                            <td>$160.99</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Oakland International Airport (OAK)</td>
                                            <td>VIP Class Sedan - s550 Benz</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$186.24</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Oakland International Airport (OAK)</td>
                                            <td>VIP Class SUV</td>
                                            <td>Up to 6 passengers</td>
                                            <td>$183.99</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Oakland International Airport (OAK)</td>
                                            <td>Executive Class Sprinter Van</td>
                                            <td>Up to 14 passengers</td>
                                            <td>$410.54</td>
                                        </tr>
                                    </table>
                                </div>                                    
                            </div>  

                            <div class="page-form-div">
                                <div class="page-title">AVERAGE TRANSFER RATE -- <span> SAN JOSE INTERNATIONAL AIRPORT (SJC)</span></div>

                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%" id="transaction-table">
                                    <tr class="tb-title">
                                            <td>sn</td>
                                            <td>Airport</td>
                                            <td>Vehicle Type</td>
                                            <td>Passengers Max Capacity</td>
                                            <td>Transfer Rate. To & Fro</td>
                                        </tr>
                                
                                        <tr>
                                            <td>1</td>
                                            <td>San Jose International Airport (SJC)</td>
                                            <td>Executive Class Sedan</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$114.99</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>San Jose International Airport (SJC)</td>
                                            <td>Executive Class SUV</td>
                                            <td>Up to 6 passengers</td>
                                            <td>$160.99</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>San Jose International Airport (SJC)</td>
                                            <td>VIP Class Sedan - s550 Benz</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$186.24</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>San Jose International Airport (SJC)</td>
                                            <td>VIP Class SUV</td>
                                            <td>Up to 6 passengers</td>
                                            <td>$183.99</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>San Jose International Airport (SJC)</td>
                                            <td>Executive Class Sprinter Van</td>
                                            <td>Up to 14 passengers</td>
                                            <td>$410.54</td>
                                        </tr>
                                    </table>
                                </div>                                    
                            </div>  

                            <div class="page-form-div">
                                <div class="page-title">AVERAGE TRANSFER RATE -- <span> SACRAMENTO INTERNATIONAL AIRPORT (SMF)</span></div>

                                <div class="table-div animated fadeIn">
                                    <table class="table" cellspacing="0" style="width:100%" id="transaction-table">
                                        <tr class="tb-title">
                                            <td>sn</td>
                                            <td>Airport</td>
                                            <td>Vehicle Type</td>
                                            <td>Passengers Max Capacity</td>
                                            <td>Transfer Rate. To & Fro</td>
                                        </tr>
                                
                                        <tr>
                                            <td>1</td>
                                            <td>Sacramento International Airport (SMF)</td>
                                            <td>Executive Class Sedan</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$159.99</td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Sacramento International Airport (SMF)</td>
                                            <td>Executive Class SUV</td>
                                            <td>Up to 6 passengers</td>
                                            <td>$225.99</td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Sacramento International Airport (SMF)</td>
                                            <td>VIP Class Sedan - s550 Benz</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$262.22</td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Sacramento International Airport (SMF)</td>
                                            <td>VIP Class Sedan - s550 Benz</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$258.99</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Sacramento International Airport (SMF)</td>
                                            <td>VIP Class Sedan - s550 Benz</td>
                                            <td>Up to 3 passengers</td>
                                            <td>$584.04</td>
                                        </tr>
                                    </table>
                                </div>                                    
                            </div>       
                        </div>
                    </div>   
                

                    <div class="right-div sticky-div">
                        <div class="div-in page-div-in">
                            <h3>Our Services</h2>
                            <ul>
                                <a href="<?php echo $website_url?>" title="Airport Transportation">
                                <li><i class="bi-check2-circle"></i> Airport Transportation</li></a>
                                <a href="<?php echo $website_url?>" title="Corporate Transportation Black Car Services">
                                <li><i class="bi-check2-circle"></i> Corporate Transportation </li></a>
                                <a href="<?php echo $website_url?>" title="Point to Point Transportation Limousine Car Service">
                                <li><i class="bi-check2-circle"></i> Point to Point Transportation</li></a>
                                <a href="<?php echo $website_url?>" title="Prom and Graduation Transportation Limousine Car Service">
                                <li><i class="bi-check2-circle"></i> Prom and Graduation Transportation </li></a>      
                                <a href="<?php echo $website_url?>" title="Night Out In Town Transportation Limousine Car Service">
                                <li><i class="bi-check2-circle"></i> Night Out In Town Transportation </li></a>  
                                <a href="<?php echo $website_url?>" title="Sports Events Transportation Limousine Car Service">
                                <li><i class="bi-check2-circle"></i> Sports Events Transportation </li></a> 
                                <a href="<?php echo $website_url?>" title="Wine Tasting Tour Transportation Limousine Car Service.">
                                <li><i class="bi-check2-circle"></i> Wine Tasting Tour Transportation </li></a>
                                <a href="<?php echo $website_url?>" title="Concert Events Transportation Limousine Car Service">
                                <li><i class="bi-check2-circle"></i> Concert Events Transportation</li></a>
                                <a href="<?php echo $website_url?>" title="Wedding Transportation Limousine Car Service">
                                <li><i class="bi-check2-circle"></i> Wedding Transportation</li></a>
                                <a href="<?php echo $website_url?>" title="Medical Doctor's Appointment Transportation Car Service">
                                <li><i class="bi-check2-circle"></i> Medical Doctor's Appointment Transportation</li></a>               
                                <a href="<?php echo $website_url?>" title="Bachelor or Bachelorette Transportation Limousine Car Service">
                                <li><i class="bi-check2-circle"></i> Bachelor or Bachelorette Transportation </li></a>
                                <a href="<?php echo $website_url?>" title="Corporate Events Transportation Charter Bus Service">
                                <li><i class="bi-check2-circle"></i> Corporate Events Transportation </li></a>

                            </ul>                                                              
                        </div>
                        
                    </div> 
                    <br clear="all"/>   
                </div> 
            </div>
        </section>


        <section class="body-div">
            <div class="body-div-in">
                <div class="general-faq-div">
                    <div class="faq-title" onclick="_collapse('faq244')">
                        <div class="inner-title-div">
                            <h2>Why should you book your Airport Transportation Service through 1ST CLASSIC?</h2>
                            <div class="expand-div" id="faq244num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>
                                        
                        <div class="faq-answer-div" id="faq244answer" style="display: none;">
                            <p>Because we are the premier and affordable, safe, and yet courteous private ground transportation provider around. Our chauffeurs are professionally trained and knowledgeable about the logistical terrain of all the cities and airports we serve, getting you to your destination in comfort and style</p>                           
                        </div>
                    </div>

                    <div class="faq-title" onclick="_collapse('faq245')">
                        <div class="inner-title-div">
                            <h2>How far in advance are you required to make a booking?</h2>
                            <div class="expand-div" id="faq245num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>
                                        
                        <div class="faq-answer-div" id="faq245answer" style="display: none;">
                            <p>We require at least a minimum of 3 hours in advance for booking airport transportation both for arrival and pickup to the airport and transfers. And a minimum of  12 hours advance reservation for stretch limousines, charter buses, and mini-charter buses.</p>                           
                        </div>
                    </div>


                    <div class="faq-title" onclick="_collapse('faq246')">
                        <div class="inner-title-div">
                            <h2>Will I be able to cancel past the cancellation time window?</h2>
                            <div class="expand-div" id="faq246num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>                                

                        <div class="faq-answer-div" id="faq246answer" style="display: none;">
                            <p>We strictly follow our cancellation policy. Cancellation can only be made in writing at least 72 hours before the pickup time by sending an email to cancellation@1stclassiclimos.com. A full fare, including a 20% chauffeur gratuity will be billed to the credit card on file for cancellation received less than 72 hours before the scheduled pickup time.  For a detailed cancellation policy, visit our  Terms & Conditions. The policies are stated in the confirmation emails as well.</p>                           
                        </div>
                    </div>

                    <div class="faq-title" onclick="_collapse('faq247')">
                        <div class="inner-title-div">
                            <h2>What will happen if my flight arrives early or late?</h2>
                            <div class="expand-div" id="faq247num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>
                                        
                        <div class="faq-answer-div" id="faq247answer" style="display: none;">
                            <p>The team and drivers closely monitor the flight arrival times to make sure that we will provide the service to you no what the circumstances are.</p>                           
                        </div>
                    </div>

                    <div class="faq-title" onclick="_collapse('faq248')">
                        <div class="inner-title-div">
                            <h2>I have more questions...</h2>
                            <div class="expand-div" id="faq248num">&nbsp;<i class="bi-plus"></i>&nbsp;</div>	
                        </div>
                                        
                        <div class="faq-answer-div" id="faq248answer" style="display: none;">
                            <p>Sure, no problem, please do not hesitate to contact us at: (800) 658-5679 or by email at info@1stclassiclimos.com, and we will gladly assist you.</p>                           
                        </div>
                    </div>
                    
                </div>                
            </div>
        </section>

        
        <section class="body-div">
            <div class="body-div-in">
                <div class="tour-packages-title other-pages-title" data-aos="fade-in" data-aos-duration="800">
                    <div class="inner-div">
                        <span>OUR AIRPORT ARRIVALS</span>
                        <h2>PickUp <span>Instructions</span></h2>
                        <div class="icon-div">
                            <img src="<?php echo $website_url?>/all-images/images/bg-header.png" alt="Icon Image"/>
                        </div>
                    </div>                   
                </div>

                <div class="txt-div">
                    <p>We monitor all commercial flights, even if its delayed or early you can count on our professionals to be there when you arrive. Each chauffeur is professional, knowledgeable and very familiar with the particular needs of the business traveler. So, while we can't take all the stress away from a business trip, your Chauffeur will make certain you get to and from your destination in the most efficient, timely and comfortable way possible.</p>
                </div>

                <div class="upon-arrival-div" data-aos="zoom-in" data-aos-duration="1000">
                    <h3>Reservation Info</h3>
                    <div class="text-div">
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">3 hours minimum advance reservation required.</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Confirmation will be received at the time of booking</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Easy online booking System</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Price is per vehicle</div>
                            <br clear="all" />
                        </li>
                    </div>
                </div>
        
        
                <div class="upon-arrival-div" data-aos="zoom-in" data-aos-duration="1500">
                    <h3>Included</h3>
                    <div class="text-div">
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Private airport transportation</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Friendly and a professional chauffeur</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">WiFi onboard</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Bottled water</div>
                            <br clear="all" />
                        </li>
                    </div>
                </div>
                
                <div class="upon-arrival-div" data-aos="zoom-in" data-aos-duration="1000">
                    <h3>Excluded</h3>
                    <div class="text-div">
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Meet & Greet Service (by request only)</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Additional stops</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Waiting time</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Chauffeur Gratuites (20% recommeneded)</div>
                            <br clear="all" />
                        </li>
                    </div>
                </div>
                
                <div class="upon-arrival-div" data-aos="zoom-in" data-aos-duration="1500">
                    <h3>Upon Arrival</h3>
                    <div class="text-div">
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Your chauffeur will call you to establish contact</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Then pick you up at the Curbside of the baggage claim or arrival level</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">At your request - Meet & Greet with a welcome name sign at the baggage or custom arrival (Additional Charges Will Apply)</div>
                            <br clear="all" />
                        </li>
                        <li>
                            <div class="icon">&nbsp;<i class="bi-check2-circle"></i>&nbsp;</div>
                            <div class="text">Your Airport Limousine Service chauffeur will know the trip destination in advance and will not ask you for directions.</div>
                            <br clear="all" />
                        </li>
                    </div>
                </div>
            </div>
        </section>
       
        <?php $callclass->_customer_reviews($website_url);?>
    
        <?php include 'footer.php'?>
    </section>

</body>
</html>