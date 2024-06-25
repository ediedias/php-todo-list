<?php

require "../vendor/autoload.php";

use App\Controllers\TaskController;

$controller = new TaskController();

$action = $_GET['action'] ?? 'index';

$controller->$action();