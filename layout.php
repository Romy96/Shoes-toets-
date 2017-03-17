<?php
require_once "inc/session.php";
require_once "inc/blade.php";

echo $blade->view()->make('layout')->render();

