//Google API
$(function(){
  $('#signInModal').on('show.bs.modal', function (e) {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://plus.google.com/js/client:plusone.js?onload=start';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
  });  
});    

function signInCallback(authResult) {
  if( authResult['status']['signed_in'] ){
    if (authResult['code']) {
      // Hide the sign-in button now that the user is authorized, for example:
      //$('#signinButton').attr('style', 'display: none');
      //document.getElementById("onSignInText").innerHTML = "Sign in successful";

      var url = base_url + "users/google_login";
      var redirect_url = base_url + "users/loggedin";  
      $(".err-container").html("<div class='alert alert-info'>Redirecting to dashboard</div>");         
      $(".user-login-registration-container").html("<div class='alert alert-info'>Redirecting to dashboard...</div>");     
      $.post(url, {results: authResult['code']},
          function(data){                                         
              $.ajax({
                type: 'GET',
                url: 'https://accounts.google.com/o/oauth2/revoke?token=' +
                    data.token,
                async: false,
                contentType: 'application/json',
                dataType: 'jsonp',
                success: function(result) {
                  location.href = redirect_url;                 
                },
                error: function(e) {
                  console.log(e);
                }
              });
          },"json");
    } else if (authResult['error']) {
      // There was an error.
      // Possible error codes:
      //   "access_denied" - User denied access to your app
      //   "immediate_failed" - Could not automatially log in the user
      // console.log('There was an error: ' + authResult['error']);
    }
  }
}

//FB Login
// This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
      //console.log('statusChangeCallback');
      //console.log(response);
      // The response object is returned with a status field that lets the
      // app know the current login status of the person.
      // Full docs on the response object can be found in the documentation
      // for FB.getLoginStatus().
      if (response.status === 'connected') {
        // Logged into your app and Facebook.      
        fbLogin();
      } 
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }

    window.fbAsyncInit = function() {
    FB.init({
      appId      : '793465480864240',
      cookie     : false,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.6' // use graph api version 2.5
    });

    // Now that we've initialized the JavaScript SDK, we call 
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

    };

    // Load the SDK asynchronously
    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful.  See statusChangeCallback() for when this call is made.
    function fbLogin() { 
      $(".err-container").html("<div class='alert alert-info'>Redirecting to dashboard</div>");   
      FB.api('/me',{ fields: 'id,last_name,first_name,email,birthday,picture,gender' }, function(response) {
          var url = base_url + "users/fb_login";
          var redirect_url = base_url + "users/loggedin";
          $.ajax({
                 type: "POST",
                 url: url,
                 dataType: "json",
                 data: response, 
                 success: function(o)
                 {
                    if( o.is_success ){
                      FB.logout(function(response) {                 
                        location.href = redirect_url;
                      });                  
                    }else{
                      FB.logout(function(response){});                  
                    }                  
                 }
          });
        
      });
    }

    function fb_login(){
        FB.login(function(response) {

            if (response.authResponse) {
                console.log('Welcome!  Fetching your information.... ');
                //console.log(response); // dump complete info
                access_token = response.authResponse.accessToken; //get access token
                user_id = response.authResponse.userID; //get FB UID

                FB.api('/me', function(response) {
                    user_email = response.email; //get user email
              // you can store this data into your database             
                });

                checkLoginState();

            } else {
                //user hit cancel button
                console.log('User cancelled login or did not fully authorize.');

            }
        }, {
            scope: 'public_profile,email'
        });
    }