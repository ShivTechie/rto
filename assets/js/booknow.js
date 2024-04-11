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
    $('input[name="service-type"]').change(function() {
        let serviceType = $(this).val();
        let options = '<option value="">Select Service Type</option>';
        $.each(services[serviceType], function(index, item){
            const keys = Object.keys(item);
            options = options + '<option value="' +keys + '">' + item[keys] + '</option>"';
        })
        $("#service-select").php(options)
    })
    $('.bookConfirm').on("submit", function(e) {
        e.preventDefault();
        let selectedService = $('#service-select').val();
        console.log(selectedService)
        window.location.href = selectedService+".php";
    //   var selectedRTO = $('#rto-select').val();
    //   // Depending on the selected RTO, service type, and service, redirect the user
    //   // You can use window.location.href to redirect the user to the appropriate page
    //   // For demonstration purposes, let's just log the selected service
      
    //   console.log("Selected Service:", selectedService);
    });
  });
  