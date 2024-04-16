<?php
  $meta = [
    "title" => "Contact - RTO Service in Pune",
    "description" => "Reliable, Timely and Overall RTO Related Work Right From Your Doorstep, So that You Can Spend Your Precious Time More Usefully.",
    "keywords" => "RTO, RTO Services, RTO Work, RTO Jobs, RTO Related Work, RTO Work Done, RTO Work Fast, RTO Work Timely, RTO Work Reliable, RTO Work Simple, RTO Work Hassle Free, RTO Work Overall, RTO Work",
  ];
  include 'includes/header.php';
  breadCrum("Contact")
 ?>
    <div class="space" id="contact-sec">
      <div class="container">
        <div class="map-sec">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892.2101253269457!2d73.82151679839477!3d18.4646139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2952dd101962f%3A0x4bcb1bdf111a5d7!2sRTO%20Services.In%20Pune!5e0!3m2!1sen!2sus!4v1712745530223!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-5 mb-30 mb-xl-0">
            <div class="me-xxl-5 mt-60">
              <div class="title-area mb-25">
                <h2 class="border-title h3">Have Any Questions?</h2>
              </div>
              <p class="mt-n2 mb-25">
                Have a inquiry or some feedback for us? Fill out the form <br />
                below to contact our team.
              </p>
              <div class="contact-feature">
                <div class="contact-feature-icon">
                  <i class="fal fa-location-dot"></i>
                </div>
                <div class="media-body">
                  <p class="contact-feature_label">Our Address</p>
                  <a
                    href="https://www.google.com/maps"
                    class="contact-feature_link"
                    >01, Tushar Apt, Sinhgad Rd, near Kirti Nagar, Kirti Nagar,
                    Vadgaon Budruk, Pune, Maharashtra 411041</a
                  >
                </div>
              </div>
              <div class="contact-feature">
                <div class="contact-feature-icon">
                  <i class="fal fa-phone"></i>
                </div>
                <div class="media-body">
                  <p class="contact-feature_label">Phone Number</p>
                  <p href="tel:+011456586986" class="contact-feature_link"></p>
                    Mobile:<span> +91 95958 56447</span>
                  </p>
                </div>
              </div>
              <div class="contact-feature">
                <div class="contact-feature-icon">
                  <i class="fal fa-clock"></i>
                </div>
                <div class="media-body">
                  <p class="contact-feature_label">Hours of Operation</p>
                  <span class="contact-feature_link"
                    >Monday - Sunday: 07:00 AM - 09:00 PM</span
                  >
                  <!-- <span class="contact-feature_link"
                    >Sunday & Saturday: 10:30 - 22:00</span
                  > -->
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-7">
            <div
              class="contact-form-wrap"
              data-bg-src="assets/img/bg/contact_bg_1.png"
            >
              <span class="sub-title">Contact With Us!</span>
              <h2 class="border-title">Get in Touch</h2>
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
                  <div class="col-12">
                    <div class="form-group">
                      <textarea
                        name="message"
                        id="message"
                        cols="30"
                        rows="3"
                        class="form-control style-white"
                        placeholder="Write Your Message*"
                        vali="yes"
                      ></textarea>
                      <i class="fal fa-pen"></i>
                    </div>
                  </div>
                  <input type="hidden" name="slug" value="touchmediaads.com">
                  <div class="respHere"></div>
                  <div class="form-btn col-12 mt-10">
                    <button class="th-btn">
                      Send Message<i class="fas fa-long-arrow-right ms-2"></i>
                    </button>
                  </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  include 'includes/footer.php';
?>