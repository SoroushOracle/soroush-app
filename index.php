 <html>
  <head>
    <title>Soroush app</title>
  </head>

  <body>
    <h1>This is a heading</h1>
    <p>This is a paragraph.</p>
  </body>
 <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '789575811872186',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v1.0'
    });
  };
 </script>
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
  <script>
   FB.getLoginStatus(function(response) {
       console.log("response", response)
       statusChangeCallback(response);
   });
  </script>
</html> 
