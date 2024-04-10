// booking.js

// Define services for driving and vehicle
const services = {
    "vehicle": ["Learner's License",
"Permanent License",
"Driving License Renewal License",
"Duplicate Driving License",
"Change of Details on Driving License",
"International Driving Permit",
"Issue NOC of Driving License",
"Submit NOC of Driving License"],
"driving":  ["Transfer of Vehicle Ownership",
    "Duplicate Registration Certificate",
    "Renewal of Registration Certificate",
    "Change of Address in Registration Certificate",
    "Hypothecation Cancellation of Registration Certificate",
    "Issue NOC of Vehicle Registration Certificate",
    "Submit NOC of Vehicle Registration Certificate",
    "Vehicle Insurence of Registration Certificate"]}
$(document).ready(function(){
    $('input[name="service-type"]').change(function() {
        let serviceType = $(this).val();
        console.log(services[serviceType])
        let options = '<option value="">Select Service Type</option>';
        $.each(services[serviceType], function(index, item){
            options = options + '<option value="' +item + '">' + item + '</option>"';
        })
        $("#service-select").html(options)
    })
})