<!DOCTYPE html>
<head>
<?php
    include '../assets/headerlinks.php';
?>
</head>
<body>
<?php
    include '../assets/rightlinks2.php';
?>
<div class="wojo-grid">
<div id="logo"><a href="..\index.php" class="logo"><img src="..\uploads\logo.png" alt="Membership Manager"></a></div><h1>Nearby Events</h1>
<!--<div class="row screen-block-3 tablet-block-2 mobile-block-1 phone-block-1 double-gutters align-center">-->
<?php
include '../assets/classes/classevents.php';
$conn=new events();
$result=$conn->getallevents();
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
<!-- Footer -->
</div>
  <?php
        include '../assets/footerlinks.php';
  ?>
</body>


