<?php
require_once "inc/session.php";
require "inc/connection.php";

$brand = $_POST['brand'];
$size = $_POST['size'];
$amount = $_POST['amount'];
$id = $_POST['id'];

if (empty($_POST)) {
	$_SESSION['errors'][] = "Post is leeg!";
}

if (!empty($_POST)) {
	$sql = $conn->prepare("UPDATE shoes SET shoe_brand=?, shoe_size=?, amount_of_size=? WHERE id=?");
	if ($sql->execute(array($brand, $size, $amount, $id))) {
		if ( $sql->rowCount() == 0 ) 
  		{
  		 	$_SESSION['errors'][] = 'Kan schoenmerk met id '. $id .' niet vinden';
  		 	header('location: edit.php?id=' . $id);
			exit;
  		}
		if ( $sql->rowCount() > 1 ) 
		{
			 $_SESSION['errors'][] = 'Je wijzigt teveel rijen';
			 header('location: edit.php?id=' . $id);
			 exit;
		}
	}
	else
	{
		$_SESSION['errors'][] = 'Het is niet gelukt om de gegevens op te slaan.';
		header('location: edit.php?id=' . $id);
		exit;
	}

	if ( $sql->rowCount() == 1 ) 
	{
	 	$_SESSION['errors'][] = 'De aangepaste gegevens zijn opgeslagen in de database';
	 	header("location: index.php");
	 	exit;
	}
}
