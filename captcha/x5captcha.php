<?php
include("../res/x5engine.php");
$nameList = array("pw8","2c5","dtz","a8h","d66","xp6","cux","2v3","8mz","y6v");
$charList = array("H","L","P","S","T","H","R","G","3","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
