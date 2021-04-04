$("#phoneAuth").click(function(event){

	// show phone number field
	// $(".phone-div").addClass("show");
	$(".phone-div").attr('style', 'display: block !important');

});

//recaptcha 

window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
  'size': 'normal',
  'callback': (response) => {
    // reCAPTCHA solved, allow signInWithPhoneNumber.
    // ...
  },
  'expired-callback': () => {
    // Response expired. Ask user to solve reCAPTCHA again.
    // ...
  }
});

$(".sendOTP").click(function(){

	const phoneNumber = $("[name=phone_number]").val();

	if(isNaN(phoneNumber)){
		alert("Please enter valid phone number");
		return
	}

	const appVerifier = window.recaptchaVerifier;
	firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
	    .then((confirmationResult) => {
	      // SMS sent. Prompt user to type the code from the message, then sign the
	      // user in with confirmationResult.confirm(code).
	      window.confirmationResult = confirmationResult;
	      $(".phone-div").attr('style', 'display: none !important');
	      $("#recaptcha-container").attr('style', 'display: none !important');
	      // now show otp field

	      $(".otp-div").attr('style', 'display: block !important');
	      // ...
	    }).catch((error) => {
	      // Error; SMS not sent
	      alert(error.message);
	      // ...
	    });


})

// now verify otp
$("#verifyOTP").click(function(){

	const code = $("[name=verify_otp]").val();
	confirmationResult.confirm(code).then((result) => {
	  // User signed in successfully.
	  const user = result.user;
	  alert("Verified successfully");
	  // ...
	}).catch((error) => {
	  // User couldn't sign in (bad verification code?)
	  // ...
	  console.log(error.message)
	});


})