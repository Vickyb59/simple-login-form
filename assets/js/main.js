$(window).load(function(){
  $('#mobile_no_sign_in').hide();
  $('.switchSignInToEmail').hide();
  $('#switchSignIn').on('click', () => {
    $('#email_sign_in, #mobile_no_sign_in').toggle();
    $('.switchSignInToEmail, .switchSignInToPhone').toggle();
  } );
});

$(window).load(function(){
  $('#mobileNoSignIn').hide();
  $('.switchSignInToEmailMobile').hide();
  $('#switchSignInMobile').on('click', () => {
    $('#emailSignIn, #mobileNoSignIn').toggle();
    $('.switchSignInToEmailMobile, .switchSignInToPhoneMobile').toggle();
  } );
});