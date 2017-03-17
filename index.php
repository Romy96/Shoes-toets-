<?php
require_once "inc/blade.php";
require_once "inc/session.php";
$errors = [];

require "inc/connection.php";

	$sql = $conn->prepare("SELECT * FROM shoes ORDER BY id");
	$sql->execute();

	$shoes = $sql->fetchAll(PDO::FETCH_ASSOC);

	if ($sql->rowCount() == 0) {
		$_SESSION['errors'][] = "Database niet gevonden!";
	}


$sth = $conn->prepare("SELECT shoe_size FROM shoes");
$sth->execute();

$shoe_sizes = $sth->fetchAll(PDO::FETCH_ASSOC);

if ($sth->rowCount() == 0) {
	$_SESSION['errors'][] = "Schoenmaten niet gevonden!";
}

echo $blade->view()->make('index')->with('shoes', $shoes)->with('shoe_sizes', $shoe_sizes)->render();