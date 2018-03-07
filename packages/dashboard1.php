<?php session_start();?>
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
<?php
include '../assets/classes/classpck.php';
include '../assets/classes/classmem.php';
$conn=new pckgs();
$con=new classmem();
$result=$conn->getallpckgs();
$_email=$_SESSION["email_id"];
$res=$con->getdata($_email);
$row1=$res->fetch_assoc();

while($row=$result->fetch_assoc())
{
echo '

    <div class="column" id="item_1">
    <div class="wojo shadow attached segment content-center relative ';if($row1["fk_packg_id"]==$row["pk_packg_id"]){echo 'frame';}echo' ">
            <img src="'.$row["pckg_logo"].'" alt="">
            <div class="wojo space divider"></div>
      <h4 class="content-center"><font size="5px"> $ '.$row["pckg_cost"].'</h4>
      <h4 class="content-center"> '.$row["pckg_name"].'</h4>
      <p class="wojo tiny text">'.$row["pckg_days"].' Days</font></p>
      <p><a href="pckgselect.php?id='.$row["pk_packg_id"].'" class="wojo small button add-cart">Select</a></p>
    </div>
  </div>
  ';
}
?>
   
    
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

