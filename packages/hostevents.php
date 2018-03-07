
<!DOCTYPE html>
<head>
<?php 
    include '../Assets/dashboardheaderlinks.php';
?>
<script src="../assets/ckeditor/ckeditor.js"></script>
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
<a class="static" href="hostevents.php" class="active">Post an Event</a> 
<a class="static" href="guestlist.php">Guest List</a> 
<a class="static" href="profile1.php">My Profile</a> 
</div>
<div class="login-form">
<div class"row screen-block-3 tablet-block-2 mobile-block-1 phone-block-1 double-gutters align-center">

<form method="post" id="wojo_form" enctype="multipart/form-data" action="hostevents.php" name="wojo_form">
      <div class="wojo form">
        <div class="wojo block fields">
          <div class="field">
            <input type="text" placeholder="Event Title" size="80px" name="eventtitle">
          </div>
        </div>
        <div class="wojo fields">
          <div class="field">
          <label>Event Description</label>
          <textarea name="editor1"></textarea>
          </div>
          </div>
          <input type="file" name="image" value="Event Logo">
          
       
            </div>
        </div>
        <br><br>
        <div class="content-center">
          <div class="horizontal-padding">
            <button class="wojo fluid rounded big secondary button" type="submit" name="sub" ><span class="wojo bold small caps text">Post Event</span></button>
          </div>
        </div>

<?php
if(isset($_POST["sub"]))
{
include '../assets/classes/classevents.php';
$conn=new events();
session_start();
$uid=$_SESSION["email_id"];
$ename=$_POST["eventtitle"];
$edesc=$_POST["editor1"];
$target_dir="../assets/eventimgs/";
$target_file=$target_dir.basename($_FILES["image"]["name"]);
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
else
{
    echo 'file not uploaded';
}
$_image1=$target_file;

$result=$conn->insertevent($ename,$edesc,$_image1,$uid);
if($result===true)
{
    echo '<h1>Event Posted Successfully</h1>';
}
else
{
    echo '<h1>Event Can`t Posted Successfully</h1>';
}
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
 <script>
            CKEDITOR.replace( 'editor1' );
        </script>
</body>
</html>

