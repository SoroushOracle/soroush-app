 <html>
  <head>
    <title>Soroush app</title>
  </head>

  <body>
    <h1>Facebook login</h1>
   <div class="fb-login-button" data-size="small" data-button-type="login_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false" data-width=""></div>
    <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=789575811872186&autoLogAppEvents=1" nonce="jTcu4vlN"></script>
  </body>
 <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '300998901121794',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v8.0'
    });
   FB.getLoginStatus(function(response) {
       console.log("response", response)
       statusChangeCallback(response);
   });
  };
 </script>
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
  
</html> 
