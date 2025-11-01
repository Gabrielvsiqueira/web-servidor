<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/config/database.php';
$router = new \Bramus\Router\Router();
require_once __DIR__ . '/../routes/web.php';