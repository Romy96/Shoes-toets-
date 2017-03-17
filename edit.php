<?php
require_once "inc/blade.php";
require_once "inc/session.php";
$errors = [];

require "inc/connection.php";

$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM shoes WHERE id=?");
if ($sql->execute(array($id))) {
	$shoe = $sql->fetchAll(PDO::FETCH_ASSOC);

	if ($sql->rowCount() == 0) {
		$_SESSION['errors'][] = 'Kan schoenmerk met id '. $id .' niet vinden';
	}
	if ($sql->rowCount() > 1) {
		$_SESSION['errors'][] = 'U haalt teveel rijen op';
	}
}

echo $blade->view()->make('edit')->with('shoe', $shoe)->render();