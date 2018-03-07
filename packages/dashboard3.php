
<!DOCTYPE html>
<head>
<?php 
    include '../Assets/dashboardheaderlinks.php';
?>
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
<div class="wojo big space divider"></div>
<div class="clearfix" id="tabs-alt" class="active"> My Hosted Events</a> 
<a class="static" href="hostevents.php">Post an Event</a> 
<a class="static" href="guestlist.php">Guest List</a> 
<a class="static" href="profile1.php">My Profile</a> 
</div>
<div class="login-form">
<div class="row screen-block-3 tablet-block-2 mobile-block-1 phone-block-1 double-gutters align-center">
<?php
include '../assets/classes/classevents.php';
$conn=new events();
session_start();
$uid=$_SESSION["email_id"];
$result=$conn->geteventsbyuid($uid);
while($row=$result->fetch_assoc())
{
echo '
    <div class="column" id="item_1">
    <div class="wojo shadow attached segment content-center relative">
    <img src="'.$row["event_logo"].'" class="img-fluid" alt="Responsive image">
            <div class="wojo space divider"></div>
            <h4 class="content-center"><font size="5px">  '.$row["event_name"].'</font></h4>
            <h4 class="content-center"><font size="4px">  '.$row["event_description"].'</font></h4>
      <h4 class="content-center"><font size="3px"> Event Organized By '.$row["usr_first_name"].' '.$row["usr_last_name"].'</font></h4>
      
    </div>
  </div><br>';
}
?>
    
    
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

