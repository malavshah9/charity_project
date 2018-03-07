
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Membership History</title>
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
    <table class="wojo basic table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Activated</th>
        <th>Expire</th>
        <th>Recurring</th>
        <th class="collapsing"></th>
      </tr>
    </thead>
        <tr>
      <td>Platinum</td>
      <td>July 04, 2016 12:57 AM</td>
      <td>October 27, 2016 09:48 AM</td>
      <td class="center aligned"><i class="icon positive check"></i></td>
      <td class="center aligned"><a href="http://www.wojoscripts.com/mmp/view/front/controller.php?getInvoice=1&amp;id=85"><i class="icon download"></i></a></td>
    </tr>
        <tr>
      <td>Bronze</td>
      <td>August 13, 2016 01:11 AM</td>
      <td>September 13, 2016 01:11 AM</td>
      <td class="center aligned"><i class="icon negative ban"></i></td>
      <td class="center aligned"><a href="http://www.wojoscripts.com/mmp/view/front/controller.php?getInvoice=1&amp;id=17"><i class="icon download"></i></a></td>
    </tr>
        <tr>
      <td>Bronze</td>
      <td>April 07, 2016 12:58 AM</td>
      <td>May 10, 2016 11:52 PM</td>
      <td class="center aligned"><i class="icon negative ban"></i></td>
      <td class="center aligned"><a href="http://www.wojoscripts.com/mmp/view/front/controller.php?getInvoice=1&amp;id=34"><i class="icon download"></i></a></td>
    </tr>
        <tr>
      <td>Trial</td>
      <td>January 06, 2016 03:58 AM</td>
      <td>February 10, 2016 02:52 AM</td>
      <td class="center aligned"><i class="icon negative ban"></i></td>
      <td class="center aligned"><a href="http://www.wojoscripts.com/mmp/view/front/controller.php?getInvoice=1&amp;id=68"><i class="icon download"></i></a></td>
    </tr>
      </table>
  <div class="wojo small primary button">Total Amount $86.95</div>
  </div><!-- Footer -->
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

