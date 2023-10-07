
$(document).ready(function () {

    // Form validation rules and messages
    $('#on_submit').click(function () {
        $('#registrationForm').validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                mobile: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                dob: {
                    required: true,
                    date: true
                },
                address: {
                    required: true
                },
                city: {
                    required: true
                },
                state: {
                    required: true
                },
                country: {
                    required: true
                },
                pincode: {
                    required: true,
                    digits: true,
                    minlength: 6,
                    maxlength: 6
                }
            },
            messages: {
                name: {
                    required: "Please enter your name"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please enter a password",
                    minlength: "Your password must be at least 6 characters long"
                },
                mobile: {
                    required: "Please enter your mobile number",
                    digits: "Please enter only digits",
                    minlength: "Your mobile number must be 10 digits long",
                    maxlength: "Your mobile number must be 10 digits long"
                },
                dob: {
                    required: "Please enter your date of birth",
                    date: "Please enter a valid date"
                },
                address: {
                    required: "Please enter your address"
                },
                city: {
                    required: "Please enter your city"
                },
                state: {
                    required: "Please enter your state"
                },
                country: {
                    required: "Please enter your country"
                },
                pincode: {
                    required: "Please enter your pincode",
                    digits: "Please enter only digits",
                    minlength: "Your pincode must be 6 digits long",
                    maxlength: "Your pincode must be 6 digits long"
                }
            },
            submitHandler: function (form) {
                // Form submission code
                form.submit();
            }
        });
    });

    $('#registrationForm').submit(function (event) {
        event.preventDefault(); // Prevent default form submission

        var formData = $(this).serialize();

        // Send an AJAX POST request to the PHP script
        $.ajax({
            url: 'data.php', // Path to your PHP script
            method: 'POST',
            data: formData,
            success: function (response) {
                // Handle the response from the PHP script
                console.log(response);
            },
            
        });
    });


});
