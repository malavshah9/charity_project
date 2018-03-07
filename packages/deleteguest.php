<?php
    $gid=$_GET["id"];
    include '../assets/classes/classevents.php';
    $conn=new events();
    $result=$conn->deleteguest($gid);
    if($result)
    {
        header('location:guestlist.php');
        echo '<h1>Guest Deleted Successfully</h1>';
    }
?>

<!DOCTYPE html>
<head>
<?php 
    include '../Assets/dashboardheaderlinks.php';
?>
<script src="../assets/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
<div class="clearfix" id="tabs-alt"> <a class="static" href="dashboard3.php"> My Hosted Events</a> 
<a class="static" href="hostevents.php" >Post an Event</a> 
<a class="static" href="guestlist.php" class="active">Guest List</a> 
</div>
<div class="login-form">
<div class"row screen-block-3 tablet-block-2 mobile-block-1 phone-block-1 double-gutters align-center">

<h1>Guest Can`t Deleted Successfully.</h1>

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
 <script>
            CKEDITOR.replace( 'editor1' );
        </script>
</body>
</html>

