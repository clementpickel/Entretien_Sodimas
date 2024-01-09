<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__).'/vendor/autoload.php';

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$request->server->set('SCRIPT_NAME', '/index.php');  // Add this line

$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
