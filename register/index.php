<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Welcome to Membership Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<script type="text/javascript" src="..\assets\jquery.js"></script>
<script type="text/javascript" src="..\assets\global.js"></script>
<link href="..\view\front\cache\master_main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    include '../assets/rightlinks2.php';
?>

<div class="wojo-grid">
<div id="logo"><a href="..\index.php" class="logo"><img src="..\uploads\logo.png" alt="Membership Manager"></a></div><div id="login-wrap">
  <div class="clearfix" id="tabs"><a href="..\index.php" class="static"> Sign In</a> <a class="active">Signup</a></div>
  <div class="login-form">
    <form method="post" id="wojo_form" enctype="multipart/form-data" action="register.php" name="wojo_form">
      <div class="wojo form">
        <div class="wojo block fields">
          <div class="field">
            <input type="text" placeholder="Email Address" name="email">
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password">
          </div>
        </div>
        <div class="wojo fields">
          <div class="field">
            <input type="text" placeholder="First Name" name="fname">
          </div>
          <div class="field">
            <input type="text" placeholder="Last Name" name="lname">
          </div>
        </div>
        <div class="wojo block fields"><div class="field">
          <input name="company" type="text" placeholder="Company" value=""></div></div>
        <div class="wojo block fields"><div class="field">
          <input name="mobile" type="text" placeholder="Phone Number" value=""></div></div>                <div class="wojo block fields">
          <div class="field">
            <input type="text" placeholder="Address" name="address">
          </div>
          <div class="field">
            <input type="text" placeholder="City" name="city">
          </div>
          <div class="field">
            <input type="text" placeholder="Province/State" name="state">
          </div>
          <div class="field">
            <div class="wojo action input">
              <input type="text" placeholder="Postal Code/Zip" name="zip">
              <input type="text" placeholder="Country" name="country">
            </div>
          </div>
          <div class="field">
       
          
          <input type="file" name="image" value="profile photo">
          
       
            </div>
        </div>

        

                <div class="wojo block fields">
          <div class="field">
            <div class="wojo right labeled input">
              <input name="captcha" placeholder="Captcha" type="text">
              <div class="wojo basic label"><img src="..\captcha.php" alt="" style="height:25px"></div>
            </div>
          </div>
        </div>
        


        <div class="content-center">
          <div class="horizontal-padding">
            <button class="wojo fluid rounded big secondary button" type="submit" ><span class="wojo bold small caps text">Signup</span></button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div><!-- Footer -->
</div>
  <footer> Copyright &copy;2018 Membership Manager</footer>
<script type="text/javascript" src="..\view\front\js\master.js"></script> 
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


