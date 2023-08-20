 
function submitContactForm() {  
    var valid;	
    valid = validateQuoteForm(); 
    if(valid) {   
        jQuery.ajax({
            url: "___contact-form-submit.php",
            data:'fname='+$("#fname").val()+'&lname='+$("#lname").val()+
            '&userEmail='+$("#emailAddress").val()+'&contactNumber='+$("#contactNumber").val()+'&message='+$("#message").val(),
            type: "POST",
            success:function(data){ 
                if(data.response == 'true') { 
                    window.location.href = "mail-success.php"; 
                } else {
                    alert('Someting went worng!');
                }
            }, 
        });
    }
}
function validateQuoteForm() {
    var valid = true;	
    $(".form-control").css('border-color','');
    $(".error").html('');

    // User name validation
    if(!$("#fname").val()) {
        $("#fname-error").html("First name is required");
        $("#fname").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#fname-error").html("");
        $("#fname").css('border-color','#099f1a');
    }
    // User name validation
    if(!$("#lname").val()) {
        $("#lname-error").html("Last name is required");
        $("#lname").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#lname-error").html("");
        $("#lname").css('border-color','#099f1a');
    }

    // User email validation
    if(!$("#emailAddress").val()) {
        $("#emailAddress-error").html("Email is required");
        $("#emailAddress").css('border-color','#dc3545');
        valid = false;
    } else if(!$("#emailAddress").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#emailAddress-error").html("Invalid email");
        $("#emailAddress").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#emailAddress-error").html("");
        $("#emailAddress").css('border-color','#099f1a');
    }

    // User phone number validation
    var phno = $.trim($('#contactNumber').val());
    var che_phno = /^[0-9]{10,15}$/;
    if(!$("#contactNumber").val()) {
        $("#contactNumber-error").html("Phone number required");
        $("#contactNumber").css('border-color','#dc3545');
        valid = false;
    } if (!che_phno.test(phno)) {
        $("#contactNumber").css("border-color", "#FC0000");
        $("#contactNumber-error").html('Please enter valid phone no'); 
        valid = false;
    } else if (phno.length < 10 || phno.length > 15) {
        $("#contactNumber").css("border-color", "#FC0000");
        $("#contactNumber-error").html('Phone no. must be greater than or equals to 10 and less than or equals to 15 digits!!');
        // $("#dash_phone_error").css("color", "#FC0000"); 
        valid = false;
    } else {
        $("#contactNumber-error").html("");
        $("#contactNumber").css('border-color','#099f1a');
    }

    // Prefered Date validation
    if(!$("#message").val()) {
        $("#message-error").html("Message is required");
        $("#message").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#message-error").html("");
        $("#message").css('border-color','#099f1a');
    }

    return valid;
}



// Footer Newsletter Form Validation
function submitNewsLetterForm() { 
    var valid;	
    valid = validateNewsletterForm();
    if(valid) { 
        jQuery.ajax({
            url: "__newsletter-form-submit.php",
            data:'&userEmail='+$("#nEmailAddress").val(),
            type: "POST",
            success:function(data){ 
                if(data.response == 'true') { 
                    window.location.href = "newsletter-success.php"; 
                } else {
                    alert('Someting went worng!');
                }
            }, 
        });
    }
}
function validateNewsletterForm() {
    var valid = true;	
    $(".form-control").css('border-color','');
    $(".error").html(''); 
     
    
    // email validation
    if(!$("#nEmailAddress").val()) {
        $("#nEmailAddress-error").html("Email is required");
        $("#nEmailAddress").css('border-color','#dc3545');
        valid = false;
    } else if(!$("#nEmailAddress").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#nEmailAddress-error").html("Invalid email");
        $("#nEmailAddress").css('border-color','#dc3545');
        valid = false;
    } else {
        $("#nEmailAddress-error").html("");
        $("#nEmailAddress").css('border-color','#099f1a');
    }
     
    return valid;
}

