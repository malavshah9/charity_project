<?php session_start();
$email=$_SESSION["email_id"];

require '../assets/usr_class.php';
$obj=new usr_class();
$_result=$obj->getlogin($email);
$row=$_result->fetch_assoc();
$_email=$row["usr_email_id"];
$_fname=$row["usr_first_name"];
$_lname=$row["usr_last_name"];
$_cname=$row["usr_company_name"];
$_mobile=$row["usr_phone_number"];
$_address=$row["usr_address"];
$_state=$row["usr_state"];
$_country=$row["usr_country"];
$_zip=$row["usr_postal_code"];
$_city=$row["usr_city"];
$_image=$row["image"];


?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Profile Settings</title>
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
  <form method="post" enctype="multipart/form-data" id="wojo_form" action="updateprofile.php" name="wojo_form">
    <div class="wojo form">
      <input type="file" name="image" data-type="image" data-exist="../image/<?php echo $_image;?>" accept="image/png, image/jpeg">
      <div class="wojo big space divider"></div>
      <div class="wojo fields">
        <div class="field five wide">
          <label>First Name <i class="icon asterisk"></i></label>
          <input type="text" placeholder="First Name" value="<?php echo $_fname;?>" name="fname">
        </div>
        <div class="field five wide">
          <label>Last Name <i class="icon asterisk"></i></label>
          <input type="text" placeholder="Last Name" value="<?php echo $_lname;?>" name="lname">
        </div>
      </div>
      <div class="wojo fields">
        <div class="field five wide">
          <label>Email Address <i class="icon asterisk"></i></label>
          <input type="text" placeholder="Email Address" value="<?php echo $_email;?>" name="email">
        </div>
        <div class="field">
          <label>New Password</label>
          <input type="password" name="password">
        </div>
      </div>  
            <div class="wojo secondary boxed segment"> 
            <div class="wojo fields align-middle">
            <div class="field four wide labeled">
            <label class="content-right mobile-content-left">Company 
            <i class="icon asterisk"></i> 
            <i data-content="Company Name" class="icon question sign"></i></label></div>
            <div class="six wide field"><input name="company" type="text" placeholder="Company" value="<?php echo $_cname;?>"></div></div><div class="wojo fields align-middle"><div class="field four wide labeled"><label class="content-right mobile-content-left">Phone Number</label></div><div class="six wide field"><input name="mobile" type="text" placeholder="Phone Number" value="<?php echo $_mobile;?>"></div></div></div>
                  <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">Address</label>
        </div>
        <div class="field">
          <input type="text" placeholder="Address" value="<?php echo $_address;?>" name="address">
        </div>
      </div>
      <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">City</label>
        </div>
        <div class="field">
          <input type="text" placeholder="City" value="<?php echo $_city;?>" name="city">
        </div>
      </div>
      <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">Province/State</label>
        </div>
        <div class="field">
          <div class="wojo action input">
            <input type="text" placeholder="state" value="<?php echo $_state;?>" name="state">
          </div>
        </div>
      </div>
      <div class="wojo fields">
        <div class="field four wide labeled">
          <label class="content-right mobile-content-left">Postal Code/Zip / Country</label>
        </div>
        <div class="field">
          <div class="wojo action input">
            <input type="text" placeholder="postal zip code" value="<?php echo $_zip;?>" name="zip">
            <input type="text" placeholder="country" value="<?php echo $_country;?>" name="country">
          </div>
        </div>
      </div>
      <div class="wojo space divider"></div>
            
      <div class="content-center">
        <button type="submit" data-action="profile"  class="wojo secondary button">Update Account</button>
        <a href="deleteacc.php?id=<?php echo $email; ?>"><button type="button" name="delete"  class="wojo secondary button">Delete Account</button></a>
      </div>
    </div>
  </form>
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

