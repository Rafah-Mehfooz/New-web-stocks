$(function() {
  $("form[name='registration']").validate({

    rules: {
      username: {
        required: true,
        minlength:6
      },    
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5,
        maxlength:15
      }
    },

    messages: {
      username:{
        required: "Please enter a username",
        minlength: "Username should be of atleast 6 characters"  
      },
      password: {
		    required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
        maxlength:"Your password must be less than 15 characters"
      },
      email: "Please enter a valid email address ending with @seecs.edu.pk"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});