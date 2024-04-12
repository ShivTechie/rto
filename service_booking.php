<?php

include 'includes/header.php';

 ?>
 <div class="col-12">
            <div
              class="contact-form-wrap-booking"
              data-bg-src="assets/img/bg/contact_bg_1.png"
            >
            <h3 class="">Service Booking</h3>
              <span class="sub-title-booking">Book an appointment with us and our service executive will get your RTO job done.</span>
              <span class="sub-title-booking">You selected a booking of <strong>International Driving Permit</strong> service for <strong>MH12 PUNE at 4:00 PM on April 13, 2024</strong>. The price for the service is <strong>₹3,000.</strong></span>
              <span class="sub-title-booking">Please provide your details in the form below to proceed with booking.</span>
              <!-- <p class="mt-n1 mb-30 sec-text">
                Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod
                tempor eiusmod tempor incididunt ut labore et dolore magna
                aliqua.
              </p> -->
              <form
                action=""
                method="POST"
                class="contact-form sendMail"
              >
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control style-white"
                        name="name"
                        id="name"
                        vali="yes"
                        placeholder="Your Name*"
                      />
                      <i class="fal fa-user"></i>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control style-white"
                        name="email"
                        id="email"
                        vali="yes"
                        placeholder="Email Address*"
                      />
                      <i class="fal fa-envelope"></i>
                    </div>
                  </div>
                  
                  <div>
                    <div class="form-group">
                      <input
                        type="tel"
                        class="form-control style-white"
                        name="number"
                        id="number"
                        vali="yes"
                        placeholder="Phone Number*"
                      />
                      <i class="fal fa-phone"></i>
                    </div>
                  </div>
                  <div>
                    <div class="form-group">
                      <input
                        type="date"
                        class="form-control style-white"
                        
                        vali="yes"
                        placeholder="Enter Date*"
                      />
                      
                    </div>
                  </div>
                  <div>
                    <div class="form-group">
                      <input
                        type="time"
                        class="form-control style-white"
                        
                        vali="yes"
                        placeholder="Enter Time*"
                      />
                      
                    </div>
                  </div>
                  
                  <input type="hidden" name="slug" value="touchmediaads.com">
                  <div class="respHere"></div>
                  <div class="form-btn col-12 mt-10">
                    <button class="th-btn" type="submit">
                      Send Message<i class="fas fa-long-arrow-right ms-2"></i>
                    </button>
                  </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
              </form>
            </div>
          </div>

<?php
  include 'includes/footer.php';
?>