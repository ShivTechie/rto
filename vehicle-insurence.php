<?php
  $meta = [
    "title" => "About Us - RTO Service in Pune",
    "description" => "Reliable, Timely and Overall RTO Related Work Right From Your Doorstep, So that You Can Spend Your Precious Time More Usefully.",
    "keywords" => "RTO, RTO Services, RTO Work, RTO Jobs, RTO Related Work, RTO Work Done, RTO Work Fast, RTO Work Timely, RTO Work Reliable, RTO Work Simple, RTO Work Hassle Free, RTO Work Overall, RTO Work",
  ];
  include 'includes/header.php';
  breadCrum("About us")
 ?>
    <section class="space-top space-extra2-bottom">
      <div class="container">
        <div class="row">
          <div class="col-xxl-9 col-lg-8">
            <div class="course-single">
              <div class="course-single-top">
                <div class="tab-content" id="productTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="Coursedescription"
                    role="tabpanel"
                    aria-labelledby="description-tab"
                  >
                    <div class="course-description">
                      <div class="row-flex">
                        <img
                          src="assets\img\service\insurence.png"
                          alt=""
                          width="100px"
                        />
                        <h2 class="mx-3">Vehicle Insurance</h2>
                      </div>
                      <div class="container-insurence">
                        <h4 class="text-center mb-3">
                          Get Vehicle Insurance Quote
                        </h4>
                        <form
                          id="insuranceForm"
                          action="#"
                          method="post"
                          class="sendMail"
                        >
                          <div class="row">
                            <div class="form-group">
                              <label for="firstName">First Name *</label>
                              <input
                                type="text"
                                id="firstName"
                                name="firstName"
                                vali="yes"
                              />
                            </div>
                            <div class="form-group">
                              <label for="lastName">Last Name *</label>
                              <input
                                type="text"
                                id="lastName"
                                name="lastName"
                                vali="yes"
                              />
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group">
                              <label for="email">Your Email Address *</label>
                              <input
                                type="email"
                                id="email"
                                name="email"
                                vali="yes"
                              />
                            </div>
                            <div class="form-group">
                              <label for="mobileNumber"
                                >Your Mobile Number *</label
                              >
                              <input
                                type="tel"
                                id="mobileNumber"
                                name="mobileNumber"
                                vali="yes"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="insuranceType">Insurance Type *</label>
                            <select
                              id="insuranceType"
                              name="insuranceType"
                              vali="yes"
                            >
                              <option value="Third Party">Third Party</option>
                              <option value="Comprehensive">
                                Comprehensive
                              </option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="vehicleType">Vehicle Type *</label>
                            <select
                              id="vehicleType"
                              name="vehicleType"
                              vali="yes"
                            >
                              <option value="Two Wheeler">Two Wheeler</option>
                              <option value="Four Wheeler">Four Wheeler</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="vehicleRegNumber"
                              >Vehicle Registration Number</label
                            >
                            <input
                              type="text"
                              id="vehicleRegNumber"
                              name="vehicleRegNumber"
                              placeholder="Enter Vehicle Number (e.g., MH12AB1234)"
                              vali="yes"
                            />
                          </div>
                          <input
                            type="hidden"
                            name="slug"
                            value="touchmediaads.com"
                          />
                          <div class="respHere"></div>
                          <div class="form-group">
                            <input type="submit" value="Get Quote" />
                          </div>
                        </form>
                        <div
                          id="message"
                          style="display: none"
                          class="insurance-after-submit p-3"
                        ></div>
                      </div>
                      <div class="list-insurence">
                        <div class="license mt-2">
                          <h5 class="m-3">How it will wok?</h5>
                          <div class="license-row2">
                            <div class="icon-container2 border">
                              <i
                                aria-hidden="true"
                                class="far fa-check-circle"
                              ></i>
                            </div>
                            <div class="text-container">
                              <h6>Get the Quote</h6>
                              <p>
                                Fill in the Required Details. <br />
                                Expect a Call Back from Us. <br />
                                We'll Confirm the Details and Give you a Quote.
                              </p>
                            </div>
                          </div>
                          <div class="license-row2">
                            <div class="icon-container2 border">
                              <i aria-hidden="true" class="fas fa-rupee"></i>
                            </div>
                            <div class="text-container">
                              <h6>Make the Payment</h6>
                              <p>
                                Make the Payment through the Link Send to You.
                              </p>
                            </div>
                          </div>
                          <div class="license-row2 border-left">
                            <div class="icon-container2 border">
                              <i aria-hidden="true" class="far fa-file-alt"></i>
                            </div>
                            <div class="text-container2">
                              <h6>Download the Policy</h6>
                              <p>
                                Get your Policy Instantly, Download and Print.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="course-single-bottom">
                <div class="tab-content" id="productTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="Coursedescription"
                    role="tabpanel"
                    aria-labelledby="description-tab"
                  >
                    <div class="row-flex text-center m-3">
                      <img
                        src="assets/img/service/Required Doc.png"
                        alt=""
                        width="40px"
                      />
                      <h6 class="mx-2 my-2">Required Documents</h6>
                    </div>
                    <table border="1">
                      <tbody>
                        <tr>
                          <td>Registration Certificate (R.C.)</td>
                          <td>Photocopy</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="course-single-bottom p-3">
                <div class="tab-content" id="productTabContent">
                  <div
                    class="tab-pane fade show active"
                    id="Coursedescription"
                    role="tabpanel"
                    aria-labelledby="description-tab"
                  >
                    <div class="course-single-bottom-please-note">
                      <h6>Please Note</h6>
                      <ul class="content-ul">
                        <li>Instant Third Party Insurance Policy</li>
                        <li>
                          For Comprehensive Insurance, Vehicle Inspection must
                          be Scheduled.
                        </li>
                      </ul>
                    </div>
                    <div class="course-single-bottom-reference">
                      <div class="m-3">
                        <p class="mb-3">
                          Each and every vehicle which is running on the road
                          should be covered under insurance.
                        </p>
                        <p class="mb-3">Types of motor vehicle insurance</p>
                        <ul class="content-ul">
                          <li>
                            <strong>Third Party Insurance:</strong> Third party
                            insurance offers you the legal minimum level of
                            cover, and is the most basic you’re able to get.
                            Also known as ‘Act Policy’.This kind of policy helps
                            protect other people, vehicles, and property in the
                            event of an accident that was deemed to be your
                            fault.
                          </li>
                          <li class="mt-2">
                            <strong>Comprehensive Insurance: </strong>
                            Comprehensive car insurance is one of the higher
                            levels of protection you can get for your vehicle.
                            Comprehensive policies, however cover for damage to
                            your car as well as third party damages.
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-3 col-lg-4 full-height">
            <aside class="sidebar-area">
              <div class="widget widget_info">
                <div class="insurence-sidebar text-center">
                  <p class="text">Licenced By IRDAI</p>

                  <p>IRDA Agency Code: 200019355</p>

                  <div class="insurence-service my-2">
                    <div>
                      <img
                        src="assets/img/service/Simple.png"
                        alt=""
                        width="60px"
                      />
                      <p>
                        <strong>Simple</strong>
                      </p>
                    </div>
                    <div class="my-2">
                      <img
                        src="assets/img/service/Fast (2).png"
                        alt=""
                        width="55px"
                      />
                      <p><strong>Fast</strong></p>
                    </div>
                    <div class="my-2">
                      <img
                        src="assets/img/service/Reliable.png"
                        alt=""
                        width="55px"
                      />
                      <p>
                        <strong>Reliable</strong>
                      </p>
                    </div>
                  </div>
                </div>
                <h3 class="widget_title">Other Services</h3>
                <div class="info-list">
                  <ul class="sub-menu p-2 pl-0">
                    <li class="menu-item-has-children pb-2">
                      <strong class="toggle-dropdown"
                        >Driving Related Services<i
                          class="fas fa-chevron-down m-2"
                        ></i
                      ></strong>
                      <ul class="sub-menu p-2" style="width: 240px">
                        <li>
                          <a href="driving_license.php">Learner's License</a>
                        </li>
                        <li>
                          <a href="driving_license.php">Permanent License</a>
                        </li>
                        <li>
                          <a href="driving_license_renewal.php"
                            >Driving License Renewal</a
                          >
                        </li>
                        <li>
                          <a href="driving_license_duplicate.php"
                            >Duplicate Driving License</a
                          >
                        </li>
                        <li>
                          <a href="driving_license_cod.php"
                            >Change of Details on Driving License</a
                          >
                        </li>
                        <li>
                          <a href="international_driving_permit.php"
                            >International Driving Permit</a
                          >
                        </li>
                        <li>
                          <a href="driving_license_noc_issue.php"
                            >Issue NOC of Driving License</a
                          >
                        </li>
                        <li>
                          <a href="driving_license_noc_submit.php"
                            >Submit NOC of Driving License</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item-has-children">
                      <strong class="toggle-dropdown"
                        >Vehicle Related Services<i
                          class="fas fa-chevron-down m-2"
                        ></i
                      ></strong>
                      <ul class="sub-menu p-2" style="width: 240px">
                        <li>
                          <a href="vehicle_service_transfer.php"
                            >Transfer of Vehicle Ownership</a
                          >
                        </li>
                        <li>
                          <a href="duplicate_registration.php"
                            >Duplicate Registration Certificate</a
                          >
                        </li>
                        <li>
                          <a href="renewal_registration_certificate.php"
                            >Renewal of Registration Certificate</a
                          >
                        </li>
                        <li>
                          <a href="registration_certificate_coa.php"
                            >Change of Address in Registration Certificate</a
                          >
                        </li>
                        <li>
                          <a href="hypothecation_cancellation.php"
                            >Hypothecation Cancellation</a
                          >
                        </li>
                        <li>
                          <a href="vehicle_service_noc_issue.php"
                            >Issue NOC of Vehicle</a
                          >
                        </li>
                        <li>
                          <a href="vehicle_service_noc_submit.php"
                            >Submit NOC of Vehicle</a
                          >
                        </li>
                        <li>
                          <a href="vehicle_insurence.php">Vehicle Insurence</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">
                        <strong>RTO Forms</strong>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
<?php
include 'includes/footer.php';
?>