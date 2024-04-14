// booking.js

// Define services for driving and vehicle
const services = {
    "driving": [
      { "driving-license": "Learner's License" },
      { "driving-license": "Permanent License" },
      { "driving-license-renewal": "Driving License Renewal License" },
      { "duplicate-driving-license": "Duplicate Driving License" },
      { "change-of-details-driving-license": "Change of Details on Driving License" },
      { "international-driving-permit": "International Driving Permit" },
      { "issue-noc-driving-license": "Issue NOC of Driving License" },
      { "submit-noc-driving-license": "Submit NOC of Driving License" }
    ],
    "vehicle": [
      { "transfer-of-vehicle-ownership": "Transfer of Vehicle Ownership" },
      { "duplicate-registration-certificate": "Duplicate Registration Certificate" },
      { "renewal-of-registration-certificate": "Renewal of Registration Certificate" },
      { "change-of-address-registration-certificate": "Change of Address in Registration Certificate" },
      { "hypothecation-cancellation-registration-certificate": "Hypothecation Cancellation of Registration Certificate" },
      { "issue-noc-vehicle-registration-certificate": "Issue NOC of Vehicle Registration Certificate" },
      { "submit-noc-vehicle-registration-certificate": "Submit NOC of Vehicle Registration Certificate" },
      { "vehicle-insurence-registration-certificate": "Vehicle Insurence of Registration Certificate" }
    ]
  }
  
$(document).ready(function(){
  $('#driving-service').prop('checked', true);
  populateServices('driving');

  $('input[name="service-type"]').change(function() {
      let serviceType = $(this).val();
      populateServices(serviceType);
  })

    $('.bookConfirm').on("submit", function(e) {
        e.preventDefault();
        let selectedService = $('#service-select').val();
        console.log(selectedService )
        window.location.href = selectedService+ ".php";
    });
    function populateServices(serviceType) {
      let options = '<option value="">Select Service Type</option>';
      $.each(services[serviceType], function(index, item){
          const keys = Object.keys(item);
          options = options + '<option value="' +keys + '">' + item[keys] + '</option>"';
      })
      $("#service-select").html(options)
  }

  $('#vehicleServices').hide();
  $('#drivingServices').show();

  // Add click event listener to driving services button
  $('.buttons1 .button1:eq(0)').click(function() {
    // Hide vehicle services and show driving services when driving services button is clicked
    $('#vehicleServices').hide();
    $('#drivingServices').show();
    // Add active class to driving services button and remove from vehicle services button
    $(this).addClass('active1');
    $('.buttons1 .button1:eq(1)').removeClass('active1');
  });

  // Add click event listener to vehicle services button
  $('.buttons1 .button1:eq(1)').click(function() {
    // Hide driving services and show vehicle services when vehicle services button is clicked
    $('#drivingServices').hide();
    $('#vehicleServices').show();
    // Add active class to vehicle services button and remove from driving services button
    $(this).addClass('active1');
    $('.buttons1 .button1:eq(0)').removeClass('active1');
  });

  
  });
  