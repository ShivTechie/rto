document.getElementById("insuranceForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var mobileNumber = document.getElementById("mobileNumber").value;
    var insuranceType = document.getElementById("insuranceType").value;
    var vehicleType = document.getElementById("vehicleType").value;
    var vehicleRegNumber = document.getElementById("vehicleRegNumber").value;

    // Validate mobile number
    if (!validateMobileNumber(mobileNumber)) {
        alert("Please enter a valid mobile number.");
        return;
    }

    // Prepare message
    var message = "Dear " + firstName + " " + lastName + ",<br><br>" +
        "Thank you for requesting a " + insuranceType + " Insurance quote for your " +
        vehicleType + " - " + vehicleRegNumber + ".<br><br>" +
        "Expect a callback from us on your mobile number: " + mobileNumber + ".<br><br>" +
        "The next steps are:<br>" +
        "- We will confirm the vehicle details with you and give you a quote.<br>" +
        "- Make Payment through the Link sent to you, and download your Vehicle's Insurance Policy.<br><br>" +
        "Talk to you soon,<br>" +
        "My RTO Team.";

    // Hide form
    document.getElementById("insuranceForm").style.display = "none";

    // Display message
    document.getElementById("message").innerHTML = message;
    document.getElementById("message").style.display = "block";
});

// Function to validate mobile number
function validateMobileNumber(mobileNumber) {
    var mobileRegex = /^\d{10}$/; // Regex pattern for 10 digits
    return mobileRegex.test(mobileNumber);
}
