<?php

require './common/Consts.php';
$req_type = $_SERVER['REQUEST_URI'];

if(strpos($req_type, 'btb')){
	require './controller/TopController.php';
	$topController = new TopController();
	$topController->init();
}
else if(strpos($req_type, 'polling')){
	require './controller/TopController.php';
	$topController = new TopController();
	$topController->polling();
};

