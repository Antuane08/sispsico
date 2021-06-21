<?php 
session_start();

if ($_SESSION["auth-admi"]!="2") {
		
		header('location: index.php');
		exit();
}


 ?>