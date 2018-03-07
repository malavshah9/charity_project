<!DOCTYPE html>
<head>
<?php
    include '../assets/headerlinks.php';
?>
</head>
<body>
<?php
    include '../assets/rightlinks3.php';
?>
<div class="wojo-grid">
<div id="logo"><a href="..\index.htm" class="logo"><img src="..\uploads\logo.png" alt="Membership Manager"></a></div><h1>Membership Packages</h1>
<div class="row screen-block-3 tablet-block-2 mobile-block-1 phone-block-1 double-gutters align-center">
<?php
include '../assets/classes/classpck.php';
$conn=new pckgs();
$result=$conn->getallpckgs();
while($row=$result->fetch_assoc())
{
echo '
    <div class="column" id="item_1">
    <div class="wojo shadow attached segment content-center relative">
            <img src="'.$row["pckg_logo"].'" alt="">
            <div class="wojo space divider"></div>
      <h4 class="content-center"><font size="5px"> $ '.$row["pckg_cost"].'</h4>
      <p class="wojo tiny text">'.$row["pckg_days"].' Days</font></p>
    </div>
  </div>';
}
?>
<!-- Footer -->
</div>
  <?php
        include '../assets/footerlinks.php';
  ?>
</body>


