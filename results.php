<?php
	$cookie_result = $_POST["res"];
	$cookie_name = "results";
	setcookie($cookie_name, json_encode($cookie_result), time() + 3600); 
?>