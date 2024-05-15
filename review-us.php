<?php include 'config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Review and Feedback</title>
    <meta name="keywords" content="Limo Rental, Limousine, Shuttle, Car Service, Limo Transportation, Limo Rental, Limo to Airport, Airport, Shuttle to Airport, Oakland International Airport, San Francisco International Airport, San Jose International Airport, Napa Airport, Sacramento International Airport, Wine Tour, Wine Tasting, Wine Tour and Tasting, Limo wine tour, Limousine Wine Tour, Napa Wine, Sonoma Wine Tour, Livermore Wine Tour, Russian River Wine Tour, Corporate Transportation Car  Service, Sports Event Limousine, Night Out Limo, Airport Limousine, Airport Car Service, Wedding Limousine, Prom Limousine, Birthday Limousine, Airport Transfer, Bay Area Limo, Limo in San Francisco, Sightseeing Limo, Airport Transportation, Airport Shuttle, Napa Valley Wine Tour, Sonoma Valley Wine Tour, Livermore Valley Wine Tour, Wine Country Tour, Transportation service, Shuttle Service, Limousine Service, Black Car Service, OAK, SFO, SJC, SMF, Hourly transportation, Day Trip, Day tour, Point-to-point transportation, Hourly Limousine Service, Hourly Car Service, Hourly Transportation Car Service, Charter Bus Service, Bay Area, limo rentals, party buses, classic cars, stretch limo rental services, California, 1st classic, first classic" />
    <meta name="description" content="Please Review and Leave Us Feedback, These feedbacks and reviews are greatly appreciated and very helpful to us in the continuous improvement of our services and growth"/>

    <meta property="og:title" content="<?php echo $thename?>  | Review and Feedback" />
    <meta property="og:image" content="<?php echo $website?>/all-images/plugin-pix/1st-classic.jpg"/>
    <meta property="og:description" content="Please Review and Leave Us Feedback, These feedbacks and reviews are greatly appreciated and very helpful to us in the continuous improvement of our services and growth"/>

    <meta name="twitter:title" content="<?php echo $thename?> | Review and Feedback"/> 
    <meta name="twitter:card" content="<?php echo $thename?>"/> 
    <meta name="twitter:image"  content="<?php echo $website?>/all-images/plugin-pix/1st-classic.jpg"/> 
    <meta name="twitter:description" content="Please Review and Leave Us Feedback, These feedbacks and reviews are greatly appreciated and very helpful to us in the continuous improvement of our services and growth"/>
</head>

<body>
	<?php  include 'header.php'?>
   
    <section class="other-pages">
        <div class="other-pages-back-div">
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Review And Rate Us</span></h1>
                <div class="text-div">
                    <p>We’re really grateful and appreciate you taking the time to share your rating with us.</p>
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

        <?php $callclass->_customer_reviews($website_url);?>

        <?php include 'footer.php'?>
    </section>
</body>
</html>


