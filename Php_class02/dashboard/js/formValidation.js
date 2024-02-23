$(document).ready(function(){

    $("#form").validate({

        // In 'rules' user have to specify all the 
        // constraints for respective fields
        rules: {
            fname: {
                required: true,
                maxlength: 20
            },
            mobile: {
                required: true,
            },
            birth:{
                required: true
            },
            // name: "area_pin"
            area_pin:{
                required: true,
                maxlength: 4
            },
            country:{
                required: true,
            },
            qualification:{
                required: true,
            },
            password: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
        },
        // In 'messages' user have to specify message as per rules
        messages: {
            fname: {
                required: " Please enter your firstname",
                maxlength: "max length is 20"
            },
            // mobile: " Please enter your mobile number",
            birth: " Please enter your birth date",
            country: " Please enter your country name",
            mobile:"please enter a valid mobile number",
            qualification: " Please select your qualification",
            area_pin: {
                required: " Please enter area pin",
                maxlength:
                    "area should be 4 digits"
            },
            password: {
                required: " Please enter a password",
                minlength:
                    " Your password must be consist of at least 5 characters"
            },
        }    

    })
  
  });