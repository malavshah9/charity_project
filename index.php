n<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Welcome to Membership Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<script type="text/javascript" src="assets\jquery.js"></script>
<script type="text/javascript" src="assets\global.js"></script>
<link href="view\front\cache\master_main.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="menu">
<div class="actionButton"></div>
	    <a href="index.htm" class="sub login" data-content="Sign In" data-position="left center"></a>  
    <a href="register\index.htm" class="sub register" data-content="Signup" data-position="left center"></a>  
        <a href="packages\index.htm" class="sub packages" data-content="Memberships" data-position="left center"></a>  
    <a href="contact\index.htm" class="sub contact" data-content="Contact" data-position="left center"></a> 
        <a class="sub news" data-content="News" data-position="left center"></a>
</div>
<div class="wojo-grid">
<div id="logo"><a href="index.htm" class="logo"><img src="uploads\logo.png" alt="Membership Manager"></a></div><div id="login-wrap">
  <div class="clearfix" id="tabs"><a class="active"> Sign In</a> <a class="static" href="register\index.htm">Signup</a></div>
  <div class="login-form">
    <div class="wojo form" id="loginform">
      <form method="post" id="login_form" name="wojo_form">
        <div class="wojo block fields">
          <div class="field">
            <input type="text" placeholder="Email Address" name="email">
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password">
          </div>
        </div>
        <div class="content-center">
          <div class="horizontal-padding">
            <button class="wojo fluid rounded big secondary button" name="login" type="submit"><span class="wojo bold small caps text">Sign In</span></button>
          </div>
          <div class="wojo space divider"></div>
          <a class="inverted" id="passreset">Forgotten Password?</a> </div>
      </form>
    </div>
    <div class="wojo form hide-all" id="passform">
      <form method="post" id="pass_form" name="wojo_form">
        <div class="wojo block fields">
          <div class="field">
            <input type="text" placeholder="Email Address" name="pemail">
          </div>
          <div class="field">
            <input type="text" placeholder="First Name" name="fname">
          </div>
        </div>
        <div class="content-center">
          <div class="horizontal-padding">
            <button class="wojo fluid rounded big negative button" name="passreset" type="button"><span class="wojo bold small caps text">Submit</span></button>
          </div>
          <div class="wojo space divider"></div>
          <a class="inverted" id="backto">Back to login</a> </div>
      </form>
    </div>
  </div>
  <div id="message-box"> </div>
</div><!-- Footer -->
</div>
  <footer> Copyright &copy;2018 Membership Manager</footer>
<script type="text/javascript" src="view\front\js\master.js"></script> 
<script type="text/javascript"> 
// <![CDATA[  
$(document).ready(function() {
    $.Master({
		url: "http://www.wojoscripts.com/mmp/view/front",
		surl: "http://www.wojoscripts.com/mmp",
        lang: {
            button_text: "Browse...",
            empty_text: "No file...",
        }
    });
});
// ]]>
</script>
</body>


