// Define services for driving and vehicle
const services = {
  "driving": [
      { "driving-license": "Learner's License" },
      { "driving-license": "Permanent License" },
      { "driving-license-renewal": "Driving License Renewal" },
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
      { "vehicle-insurance-registration-certificate": "Vehicle Insurance of Registration Certificate" }
  ]
};

$(document).ready(function () {
  // Set default radio button to driving
  $('#driving-service').prop('checked', true);
  populateServices('driving');

  // Change event for radio buttons
  $('input[name="service-type"]').change(function () {
      let serviceType = $(this).val();
      populateServices(serviceType);
  });

  // Form submission
  $('.bookConfirm').on("submit", function (e) {
      e.preventDefault();
      let selectedService = $('#service-select').val();
      if (selectedService) {
          window.location.href = selectedService + ".php";
      } else {
          alert("Please select a service.");
      }
  });

  // Function to populate services
  function populateServices(serviceType) {
      let options = '<option value="">Select Service</option>';
      $.each(services[serviceType], function (index, item) {
          const keys = Object.keys(item);
          options += '<option value="' + keys[0] + '">' + item[keys[0]] + '</option>';
      });
      $("#service-select").html(options);
  }

  // Initial setup for hiding/showing service types
  $('#vehicleServices').hide();
  $('#drivingServices').show();

  // Click event for driving services button
  $('.buttons1 .button1:eq(0)').click(function () {
      $('#vehicleServices').hide();
      $('#drivingServices').show();
      $(this).addClass('active1');
      $('.buttons1 .button1:eq(1)').removeClass('active1');
  });

  // Click event for vehicle services button
  $('.buttons1 .button1:eq(1)').click(function () {
      $('#drivingServices').hide();
      $('#vehicleServices').show();
      $(this).addClass('active1');
      $('.buttons1 .button1:eq(0)').removeClass('active1');
  });
});
