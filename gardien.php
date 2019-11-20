<?php
session_start();
include("vars.php"); 
$PagePos=1;

if(isset($_POST["player"])) {
	$id = $_POST["player"];
	$_SESSION["POS_".$PagePos] = $id;
}

include("template.html");