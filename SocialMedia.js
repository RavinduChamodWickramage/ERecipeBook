// Called when Google Sign-In is successful
function onSignIn(googleUser) {
  var id_token = googleUser.getAuthResponse().id_token;
  // Send the id_token to your server to verify the user's identity
}

// Called when Google Sign-In fails
function onSignInFailure(error) {
  console.log(error);
}

// Called when Facebook Login is successful
function checkLoginState() {
  FB.getLoginStatus(function(response) {
    if (response.status === 'connected') {
      var accessToken = response.authResponse.accessToken;
      // Send the access token to your server to verify the user's identity
    }
  });
}

// Called when Facebook Login fails
function statusChangeCallback(response) {
  console.log('statusChangeCallback');
  console.log(response);
}
