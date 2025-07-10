jQuery(document).ready(function() {
    // Custom validator for Google reCAPTCHA
    window.Parsley.addValidator('recaptcha', {
      requirementType: 'string',
      validateString: function(value) {
        return grecaptcha.getResponse() !== '';
      },
      messages: {
        en: 'Please complete the reCAPTCHA'
      }
    });

    // Initialize Parsley on the form
    jQuery('#frmcontactform').parsley();

    // Parsley form submission
    jQuery('#frmcontactform').on('submit', function(event) {
      event.preventDefault(); // Prevent the default form submit

      // Trigger Parsley validation
      if (jQuery('#frmcontactform').parsley().validate()) {
        // Check reCAPTCHA response before final submit
        if (grecaptcha.getResponse() !== '') 
        {
          jQuery(".messagenot").text("");

          let formData = jQuery(this).serialize();
          jQuery.ajax({
            type : "POST",
            dataType : "json",
            url : jQuery("#bodysection").data('siteurl'),
            data : formData,
            beforeSend: function(response, data) 
            {
                jQuery(".btnsubmitspan").text('Wait..');
                jQuery(".btnsubmitspan").attr('disabled', true);
            },
            success: function(response, data) 
            {
                jQuery(".btnsubmitspan").attr('disabled', false);
                jQuery(".btnsubmitspan").text('Send a message');
                if( response.status == 1 )
                {
                    jQuery("#successmessage").text(response.message);
                    jQuery('#frmcontactform')[0].reset();        // Reset form fields
                    jQuery('#frmcontactform').parsley().reset();
                }
                else if( response == 0 )
                {
                    jQuery("#errormessage").text(response.message);
                }
            }
        });
        } 
        else 
        {
          alert("Please complete the reCAPTCHA!");
        }
      }
    });
});