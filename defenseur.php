<?php
session_start();
include("vars.php"); 
$PagePos=2;

if(isset($_POST["player"])) {
	$id = $_POST["player"];
	$_SESSION["POS_".$PagePos] = $id;
}

include("template.php");