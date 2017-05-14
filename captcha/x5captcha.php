<?php
include("../res/x5engine.php");
$nameList = array("nxj","jut","gpn","pcx","nwt","z56","727","ly2","6at","eg3");
$charList = array("H","S","H","5","Z","2","J","U","8","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
