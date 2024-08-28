/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

 $("input,textarea").jqBootstrapValidation(
    {
     preventSubmit: true,
     submitError: function($form, event, errors) {
      // something to have when submit produces an error ?
      // Not decided if I need it yet
     },
     submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
       // get values from FORM
       var name = $("input#name").val();  
       var email = $("input#email").val(); 
       var message = $("textarea#message").val();
        var firstName = name; // For Success/Failure Message
           // Check for white space in name for Success/Fail message
        if (firstName.indexOf(' ') >= 0) {
	   firstName = name.split(' ').slice(0, -1).join(' ');
         }        
         $.ajax({
          url: "contact/contact_me.php",
          type: "POST",
          data: { name: name, email: email, message: message },
          cache: false,
          success: function() {  
              // Success message
              $('#success').html("<div class='alert alert-success'>");
              $('#success > .alert-success')
                  .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>")
                  .append("<strong>Your message has been sent. </strong>")
                  .append('</div>');
                                  
              // Clear all fields
              $('#contactForm').trigger("reset");
      
              // Remove the success message after 3 seconds
              setTimeout(function() {
                  $('#success > .alert-success').fadeOut('slow', function() {
                      $(this).remove(); // Remove the element completely
                  });
              }, 3000); // 3000 milliseconds = 3 seconds
          },
          error: function() {		
              // Fail message
              $('#success').html("<div class='alert alert-danger'>");
              $('#success > .alert-danger')
                  .html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>")
                  .append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding...</strong> Could you please email me directly at <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com'>me@example.com</a>? Sorry for the inconvenience!")
                  .append('</div>');
      
              // Clear all fields
              $('#contactForm').trigger("reset");
          },
      })
      
         },
         filter: function() {
                   return $(this).is(":visible");
         },
       });

      $("a[data-toggle=\"tab\"]").click(function(e) {
                    e.preventDefault();
                    $(this).tab("show");
        });
  });
 

/*When clicking on Full hide fail/success boxes */ 
$('#name').focus(function() {
     $('#success').html('');
  });
