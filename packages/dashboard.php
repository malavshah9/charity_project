
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Welcome to Membership Manager</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<script type="text/javascript" src="http://www.wojoscripts.com/mmp/assets/jquery.js"></script>
<script type="text/javascript" src="http://www.wojoscripts.com/mmp/assets/global.js"></script>
<link href="http://www.wojoscripts.com/mmp/view/front/cache/master_main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="menu">
<div class="actionButton"></div>
	    <a href="http://www.wojoscripts.com/mmp/dashboard/" class="sub dashboard" data-content="Dashboard" data-position="left center"></a>
        <a href="http://www.wojoscripts.com/mmp/packages/" class="sub packages" data-content="Memberships" data-position="left center"></a>  
    <a href="http://www.wojoscripts.com/mmp/contact/" class="sub contact" data-content="Contact" data-position="left center"></a> 
        <a href="http://www.wojoscripts.com/mmp/logout/" class="sub logout" data-content="Logout" data-position="left center"></a> 
        <a class="sub news" data-content="News" data-position="left center"></a>
</div>
<div class="wojo-grid">
<div id="logo"><a href="http://www.wojoscripts.com/mmp/" class="logo"><img src="http://www.wojoscripts.com/mmp/uploads/logo.png" alt="Membership Manager"></a></div><div class="content-center"><img src="http://www.wojoscripts.com/mmp/uploads/avatars/av1.jpg" alt="" class="avatar"></div>
<?php
    include '../Assets/dashboard1links.php';
?>
<div class="login-form">
<div class="row screen-block-3 tablet-block-2 mobile-block-1 phone-block-1 double-gutters align-center">
    <div class="column" id="item_1">
    <div class="wojo attached segment content-center relative">
            <img src="http://www.wojoscripts.com/mmp/uploads/memberships/default.png" alt="">
            <div class="wojo space divider"></div>
      <h4 class="content-center">$1.99 Trial</h4>
      <p class="wojo small text">Recurring No</p>
      <p class="wojo small text">7@Days</p>
      <p class="wojo tiny text">This is 2 days membership</p>
            <p><a class="wojo small button add-cart" data-id="1">Select</a></p>
          </div>
  </div>
    <div class="column" id="item_5">
    <div class="wojo attached segment content-center relative">
            <img src="http://www.wojoscripts.com/mmp/uploads/memberships/silver.png" alt="">
            <div class="wojo space divider"></div>
      <h4 class="content-center">$1.99 Silver</h4>
      <p class="wojo small text">Recurring No</p>
      <p class="wojo small text">1@Weeks</p>
      <p class="wojo tiny text">This is 7 days basic membership.</p>
            <p><a class="wojo small button add-cart" data-id="5">Select</a></p>
          </div>
  </div>
    <div class="column" id="item_2">
    <div class="wojo attached segment content-center relative">
            <img src="http://www.wojoscripts.com/mmp/uploads/memberships/bronze.png" alt="">
            <div class="wojo space divider"></div>
      <h4 class="content-center">$2.99 Bronze</h4>
      <p class="wojo small text">Recurring Yes</p>
      <p class="wojo small text">1@Months</p>
      <p class="wojo tiny text">This is 30 days basic membership</p>
            <p><a class="wojo small button add-cart" data-id="2">Select</a></p>
          </div>
  </div>
    <div class="column" id="item_3">
    <div class="wojo attached segment content-center relative">
            <img src="http://www.wojoscripts.com/mmp/uploads/memberships/gold.png" alt="">
            <div class="wojo space divider"></div>
      <h4 class="content-center">$6.99 Gold</h4>
      <p class="wojo small text">Recurring No</p>
      <p class="wojo small text">90@Days</p>
      <p class="wojo tiny text">This is 90 days basic membership</p>
            <p><a class="wojo small button add-cart" data-id="3">Select</a></p>
          </div>
  </div>
    <div class="column" id="item_4">
    <div class="wojo attached segment content-center relative frame">
            <img src="http://www.wojoscripts.com/mmp/uploads/memberships/platinum.png" alt="">
            <div class="wojo space divider"></div>
      <h4 class="content-center">$149.99 Platinum</h4>
      <p class="wojo small text">Recurring Yes</p>
      <p class="wojo small text">1@Years</p>
      <p class="wojo tiny text">Platinum Yearly Subscription</p>
          </div>
  </div>
    </div>
<div id="mResult"></div><!-- Footer -->
</div>
  <footer> Copyright &copy;2018 Membership Manager</footer>
<script type="text/javascript" src="http://www.wojoscripts.com/mmp/view/front/js/master.js"></script> 
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
</html>

