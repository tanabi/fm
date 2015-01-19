<?php
$styleChoice = "";
if (!isset($_COOKIE['sitestyle'])) {
    $styleChoice = "Default";
} else {
	$styleChoice = $_COOKIE['sitestyle'];
}
?>