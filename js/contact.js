$(function() {

  ////////// Contact Form Validation //////////

  function validateName(fullname) {
    if(fullname.length > 2) {
      $('#fullname').removeClass('error');
      $('#fullname-error').hide();
      return true;
    }
    else {
      $('#fullname').addClass('error');
      $('#fullname-error').show();
      return false;
    }
  }

  function validateEmail(email) {
    var re = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/;
    if (re.test(email)) {
      $('#email').removeClass('error');
      $('#email-error').hide();
      return true;
    }
    else {
      $('#email').addClass('error');
      $('#email-error').show();
      return false;
    }
  }

  function validateMessage(message) {
    if (message.length > 0) {
      $('#message').removeClass('error');
      $('#message-error').hide();
      return true;
    }
    else {
      $('#message').addClass('error');
      $('#message-error').show();
      return false;
    }
  }


  $('form').submit(function(event){

    var fullname = $('#fullname').val(),
        email = $('#email').val(),
        message = $.trim($('#message').val());

    if (validateName(fullname) & validateEmail(email) & validateMessage(message)) {
      return true; //submit form.
    }
    else {
      event.preventDefault();  //prevent form from submitting!
    }
  });

});