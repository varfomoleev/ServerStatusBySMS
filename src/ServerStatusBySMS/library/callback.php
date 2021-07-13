<?php

/*
*  ___                             ____             
* |_ _|_   ____ _ _ __   _____   _|  _ \  _____   __
*  | |\ \ / / _` | '_ \ / _ \ \ / / | | |/ _ \ \ / /
*  | | \ V / (_| | | | | (_) \ V /| |_| |  __/\ V / 
* |___| \_/ \__,_|_| |_|\___/ \_/ |____/ \___| \_/  
*                               
* @author IvanovDev
* @link https://ivanovdev.ru/
*
*/

foreach ($_POST["data"] as $entry) {
	$lines = explode("\n",$entry);
	if ($lines[0] == "sms_status") {

		$sms_id = $lines[1];
		$sms_status = $lines[2];
	}
}
echo "100";

?>