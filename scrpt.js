$(document).ready(function() {

    $("#regForm").submit(function(event) {

        let name = $("#name").val();
        let email = $("#email").val();
        let phone = $("#phone").val();
        let course = $("#course").val();
        let address = $("#address").val();

        if (name === "" || email === "" || phone === "" || course === "" || address === "") {
            event.preventDefault();
            $("#error").text("All fields are required!");
            return false;
        }

        // Phone number validation
        if (!/^[0-9]{10}$/.test(phone)) {
            event.preventDefault();
            $("#error").text("Enter a valid 10-digit phone number!");
            return false;
        }

        $("#error").text(""); // Clear error
        return true;
    });

});
