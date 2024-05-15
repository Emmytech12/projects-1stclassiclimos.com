<?php
class allClass
{
    function _BookingsForm($website_url) { ?>
        <div class="fill-form-div other-pages-fill-form animated fadeIn">
            <h2> Book <span>Online</span></h2>
            <div class="form-div">
                <div class="text_field_container">
                    <select class="text_field" placeholder="">
                        <option value="">Select here</option>
                    </select>
                    <div class="placeholder">Select Service Type</div>
                </div>
                <div class="text_field_container">
                    <input class="text_field" type="date" id="dateInput" placeholder=""/>
                    <div class="placeholder">Select Pick-Up Date</div>
                </div>
                <div class="text_field_container">
                    <input class="text_field" type="time" id="timeInput" placeholder=""/>
                    <div class="placeholder">Select Pick-Up Time</div>
                </div>
                
                <button class="btn">Book Now!</button>
            </div>
        </div>
    <?php }


    function _customer_reviews($website_url) { ?>
        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="tour-packages-title other-pages-title" data-aos="fade-in" data-aos-duration="800">
                        <div class="inner-div">
                            <span>WHAT PEOPLE ARE SAYING</span>
                            <h2>Customer  <span>Review</span></h2>
                            <div class="icon-div">
                                <img src="<?php echo $website_url?>/all-images/images/bg-header.png" alt="Icon Image"/>
                            </div>
                        </div> 
                    </div>
                
                    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                    <div class="elfsight-app-da7202e9-404c-4854-b154-c25bf91f03e1" style="width:96%; margin:auto;"></div>
                </div>
            </div>
        </section>
    <?php }
} //end of class
$callclass = new allClass();
?>