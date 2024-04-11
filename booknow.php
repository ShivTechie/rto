
<?php
  $meta = [
    "title" => "Book Now - RTO Service in Pune",
    "description" => "Reliable, Timely and Overall RTO Related Work Right From Your Doorstep, So that You Can Spend Your Precious Time More Usefully.",
    "keywords" => "RTO, RTO Services, RTO Work, RTO Jobs, RTO Related Work, RTO Work Done, RTO Work Fast, RTO Work Timely, RTO Work Reliable, RTO Work Simple, RTO Work Hassle Free, RTO Work Overall, RTO Work",
  ];
  include 'includes/header.php';
  breadCrum("Book Now")
 ?>
    <section class="space-top space-extra2-bottom">
      <div class="container">
        <div class="row">
          <div class="">
            <div class="course-single">
              <div class="text-center">
                <h3 class="text-danger">RTO Services Now at your Doorstep!</h3>
                <h5 class="text-danger">Have a Hassle Free RTO Experience.</h5>
              </div>
              <div class="about-us mb-4">
                <div class="course-single-top">
                  <div class="tab-content" id="productTabContent">
                    <div
                      class="tab-pane fade show active"
                      id="Coursedescription"
                      role="tabpanel"
                      aria-labelledby="description-tab"
                    >
                      <div class="course-description">
                        <form class="booking-component bookConfirm">
                          <h2>BOOK NOW</h2>
                          <p>Please select your RTO:</p>
                          <select id="rto-select" onchange="resetServiceType()">
                            <option value="MH12">MH12 Pune</option>
                            <!-- Add other RTO options here if needed -->
                          </select>
                          <p class="mt-2 -mb-2">Type of Service:</p>
                          <div class="row-flex my-1">
                            <input
                              type="radio"
                              id="driving-service"
                              name="service-type"
                              value="driving"
                            />
                            <label for="driving-service" class="my-1 mx-2"
                              >Driving Related Service</label
                            >
                            <br />
                            <input
                              type="radio"
                              id="vehicle-service"
                              name="service-type"
                              value="vehicle"
                            />
                            <label for="vehicle-service" class="my-1 mx-2"
                              >Vehicle Related Service</label
                            >
                          </div>

                          <p>Select Service:</p>
                          <select id="service-select">
                            <!-- Options will be populated dynamically based on user selection -->
                          </select>

                          <div class="form-btn col-12 mt-20">
                            <button class="th-btn" type="submit">
                              Proceed to next Step<i
                                class="fas fa-long-arrow-right ms-2"
                              ></i>
                            </button>
                          </div>
                        </form>
                        <div></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="about-us-bottom row">
                  <div class="col-md-4">
                    <div class="row-flex">
                      <img
                        src="assets/img/HomePageIcons/effortless.png"
                        alt=""
                        width="60px"
                      />
                      <div class="mx-4">
                        <h4>Simple</h4>
                        <p>Simplified RTO Services</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="my-2 row-flex">
                      <img
                        src="assets/img/HomePageIcons/Fast__3.png"
                        alt=""
                        width="60px"
                      />
                      <div class="mx-4">
                        <h4>Fast</h4>
                        <p>Get your RTO Work Done Fast</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="my-2 row-flex">
                      <img
                        src="assets/img/HomePageIcons/trustworthy.png"
                        alt=""
                        width="60px"
                      />
                      <div class="mx-4">
                        <h4>Reliable</h4>
                        <p>Reliable RTO Representative</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="my-2 row-flex">
                      <img
                        src="assets/img/HomePageIcons/hasselfree.png"
                        alt=""
                        width="60px"
                      />
                      <div class="mx-4">
                        <h4>Hassle Free</h4>
                        <p>Relax and Enjoy your Hassle Free RTO Experience</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="my-2 row-flex">
                      <img
                        src="assets/img/HomePageIcons/timely-removebg-preview.png"
                        alt=""
                        width="60px"
                      />
                      <div class="mx-4">
                        <h4>Timely</h4>
                        <p>On Time Every Time</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="my-2 row-flex">
                      <img
                        src="assets/img/service/Overall.png"
                        alt=""
                        width="60px"
                      />
                      <div class="mx-4">
                        <h4>Overall</h4>
                        <p>All Types of RTO Related Jobs</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="partner row-flex border mx-5 mt-5">
                  <img
                    src="assets/img/logo.png"
                    alt=""
                    width="300px"
                    class="mx-4"
                  />
                  <h3>Your Preferred RTO Service Partner</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="counter-area-2 bg-theme">
        <div class="row justify-content-between">
          <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
              <h2 class="counter-card_number">
                <span class="counter-number">3.9</span>k<span class="fw-normal"
                  >+</span
                >
              </h2>
              <p class="counter-card_text">
                <strong>Number of Customers</strong> Trained
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
              <h2 class="counter-card_number">
                <span class="counter-number">15.8</span>k<span class="fw-normal"
                  >+</span
                >
              </h2>
              <p class="counter-card_text">
                <strong>RTO Jobs Done</strong> Completed
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
              <h2 class="counter-card_number">
                <span class="counter-number">97.5</span>k<span class="fw-normal"
                  >+</span
                >
              </h2>
              <p class="counter-card_text">
                <strong>Satisfaction</strong> Rate
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 counter-card-wrap">
            <div class="counter-card">
              <h2 class="counter-card_number">
                <span class="counter-number">100.2</span>k<span
                  class="fw-normal"
                  >+</span
                >
              </h2>
              <p class="counter-card_text">
                <strong>Community</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
include 'includes/footer.php';
?>